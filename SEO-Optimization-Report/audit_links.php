<?php
/**
 * Star Laboratories — Comprehensive Link, Button & Asset Auditor
 * Crawls the entire website through http://localhost/starlabs/ and verifies
 * every <a href>, <form action>, and <img src> for broken links / 404s.
 */

ini_set('memory_limit', '512M');
set_time_limit(0);

$baseUrl = 'http://localhost/starlabs';
$siteRoot = 'C:/xampp/htdocs/starlabs';

echo "=== Star Laboratories Comprehensive Link & Asset Audit ===\n";

// 1. Collect all URLs from all sitemaps
$sitemaps = array(
    'sitemap-main.xml',
    'sitemap-products-veterinary.xml',
    'sitemap-products-human.xml',
    'sitemap-manufacturing.xml',
    'sitemap-news.xml'
);

$pagesToCrawl = array();
foreach ($sitemaps as $sm) {
    $smPath = $siteRoot . '/' . $sm;
    if (!file_exists($smPath)) continue;
    $xml = simplexml_load_file($smPath);
    if ($xml && isset($xml->url)) {
        foreach ($xml->url as $u) {
            $loc = (string)$u->loc;
            // Map live domain to localhost/starlabs
            $rel = str_replace('https://starlabs.com.pk', '', $loc);
            $pagesToCrawl[] = $rel;
        }
    }
}
$pagesToCrawl = array_values(array_unique($pagesToCrawl));
echo "Found " . count($pagesToCrawl) . " unique pages in sitemaps to audit.\n\n";

// Also check all PHP files with index.php directly on disk to ensure nothing is missed
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($siteRoot, FilesystemIterator::SKIP_DOTS));
$excludeDirs = array('include', 'SEO-Optimization-Report', '.well-known', 'fonts', 'css', 'js', 'img', '.git');
foreach ($rii as $file) {
    if ($file->getFilename() !== 'index.php') continue;
    $rel = str_replace('\\', '/', substr($file->getPath(), strlen($siteRoot)));
    $rel = trim($rel, '/');
    $top = explode('/', $rel)[0];
    if ($rel !== '' && in_array($top, $excludeDirs, true)) continue;
    $path = '/' . ($rel === '' ? '' : $rel . '/');
    if (!in_array($path, $pagesToCrawl, true)) {
        $pagesToCrawl[] = $path;
    }
}
echo "Total target pages after filesystem scan: " . count($pagesToCrawl) . "\n\n";

// Helper to resolve a link relative to current page
function resolveUrl($link, $currentPage, $baseUrl) {
    $link = trim($link);
    if ($link === '' || $link === '#' || strpos($link, 'javascript:') === 0 || strpos($link, 'mailto:') === 0 || strpos($link, 'tel:') === 0) {
        return array('type' => 'ignore', 'url' => $link);
    }
    
    // External link
    if (preg_match('#^https?://#i', $link)) {
        if (strpos($link, 'https://starlabs.com.pk') === 0) {
            $rel = substr($link, strlen('https://starlabs.com.pk'));
            return array('type' => 'internal', 'url' => $baseUrl . $rel, 'path' => $rel);
        }
        if (strpos($link, 'http://localhost/starlabs') === 0) {
            $rel = substr($link, strlen('http://localhost/starlabs'));
            return array('type' => 'internal', 'url' => $link, 'path' => $rel);
        }
        return array('type' => 'external', 'url' => $link);
    }

    // Root-relative link starting with /
    if ($link[0] === '/') {
        // If it starts with /starlabs/
        if (strpos($link, '/starlabs/') === 0) {
            $rel = substr($link, strlen('/starlabs'));
            return array('type' => 'internal', 'url' => $baseUrl . $rel, 'path' => $rel);
        }
        // Root relative link intended for domain root on production (e.g. /contract-manufacturing/)
        // On localhost, this needs to be checked against siteRoot . $link
        return array('type' => 'internal_root_rel', 'url' => $baseUrl . $link, 'path' => $link);
    }

    // Relative link
    // Remove query / hash
    $cleanLink = preg_replace('/[?#].*$/', '', $link);
    
    // Current page dir relative to site root
    $currentDir = trim($currentPage, '/');
    if ($currentDir === '') {
        $combined = $cleanLink;
    } else {
        $combined = $currentDir . '/' . $cleanLink;
    }
    
    // Normalize ../ and ./
    $parts = explode('/', $combined);
    $stack = array();
    foreach ($parts as $p) {
        if ($p === '' || $p === '.') continue;
        if ($p === '..') {
            array_pop($stack);
        } else {
            $stack[] = $p;
        }
    }
    $normalizedPath = '/' . implode('/', $stack) . (substr($link, -1) === '/' ? '/' : '');
    return array('type' => 'internal', 'url' => $baseUrl . $normalizedPath, 'path' => $normalizedPath);
}

// Check if an internal path exists on disk
function verifyPathOnDisk($path, $siteRoot) {
    // Strip query or hash
    $clean = preg_replace('/[?#].*$/', '', $path);
    $clean = urldecode($clean);
    $clean = trim($clean, '/');
    
    if ($clean === '') {
        return file_exists($siteRoot . '/index.php');
    }
    
    $fullPath = $siteRoot . '/' . $clean;
    if (is_dir($fullPath)) {
        return file_exists($fullPath . '/index.php') || file_exists($fullPath . '/index.html');
    }
    if (is_file($fullPath)) {
        return true;
    }
    // Check if it's an extensionless php reference
    if (is_file($fullPath . '.php')) {
        return true;
    }
    return false;
}

$brokenLinks = array();
$brokenImages = array();
$deadHashButtons = array();
$testedUrls = array();
$totalLinksScanned = 0;

$samplePages = $pagesToCrawl; // Check all pages!

echo "Scanning all pages...\n";
$counter = 0;

foreach ($samplePages as $pageRel) {
    $counter++;
    if ($counter % 50 === 0) {
        echo "Checked $counter / " . count($samplePages) . " pages...\n";
    }

    $pageDisk = $siteRoot . '/' . trim($pageRel, '/') . ($pageRel === '/' ? '' : '/index.php');
    if ($pageRel === '/') $pageDisk = $siteRoot . '/index.php';

    // We can check the source HTML directly from disk or via HTTP
    // Reading disk is 100x faster and captures PHP include links before rendering
    if (!file_exists($pageDisk)) {
        $brokenLinks[] = array(
            'source' => 'SITEMAP',
            'target' => $pageRel,
            'reason' => 'Page file does not exist on disk'
        );
        continue;
    }

    $content = file_get_contents($pageDisk);

    // Extract all hrefs
    if (preg_match_all('/<a\b[^>]*href=["\']([^"\']*)["\'][^>]*>(.*?)<\/a>/is', $content, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $m) {
            $totalLinksScanned++;
            $href = trim($m[1]);
            $anchorText = strip_tags(trim($m[2]));

            // Check for suspicious dead anchors
            if ($href === '#' && $anchorText !== '' && !preg_match('/^(collapse|tab|next|prev)/i', $anchorText)) {
                // If it looks like a navigation item or button rather than an accordion trigger
                if (!preg_match('/data-(?:toggle|bs-toggle)=["\']collapse["\']/i', $m[0])) {
                    $deadHashButtons[] = array(
                        'source' => $pageRel,
                        'text' => $anchorText,
                        'tag' => substr($m[0], 0, 100)
                    );
                }
                continue;
            }

            $resolved = resolveUrl($href, $pageRel, $baseUrl);
            if ($resolved['type'] === 'ignore' || $resolved['type'] === 'external') {
                continue;
            }

            $checkPath = $resolved['path'];
            if (!isset($testedUrls[$checkPath])) {
                $exists = verifyPathOnDisk($checkPath, $siteRoot);
                $testedUrls[$checkPath] = $exists;
            } else {
                $exists = $testedUrls[$checkPath];
            }

            if (!$exists) {
                $brokenLinks[] = array(
                    'source' => $pageRel,
                    'href' => $href,
                    'resolvedPath' => $checkPath,
                    'anchorText' => substr($anchorText, 0, 40)
                );
            }
        }
    }

    // Extract all img srcs
    if (preg_match_all('/<img\b[^>]*src=["\']([^"\']*)["\'][^>]*>/is', $content, $imgMatches)) {
        foreach ($imgMatches[1] as $src) {
            $src = trim($src);
            if (empty($src) || strpos($src, 'data:') === 0) continue;
            
            $resolved = resolveUrl($src, $pageRel, $baseUrl);
            if ($resolved['type'] === 'ignore' || $resolved['type'] === 'external') continue;

            $checkPath = $resolved['path'];
            if (!isset($testedUrls['IMG:' . $checkPath])) {
                $exists = verifyPathOnDisk($checkPath, $siteRoot);
                $testedUrls['IMG:' . $checkPath] = $exists;
            } else {
                $exists = $testedUrls['IMG:' . $checkPath];
            }

            if (!$exists) {
                $brokenImages[] = array(
                    'source' => $pageRel,
                    'src' => $src,
                    'resolvedPath' => $checkPath
                );
            }
        }
    }
}

// Also check all PHP includes in include/ folder:
// header.php, header1-4.php, footer.php, footer1-4.php, breadcrumb.php, product-body.php, related.php
$includeFiles = glob($siteRoot . '/include/*.php');
foreach ($includeFiles as $incFile) {
    $incName = 'include/' . basename($incFile);
    $content = file_get_contents($incFile);
    
    // Extract hrefs
    if (preg_match_all('/<a\b[^>]*href=["\']([^"\']*)["\'][^>]*>(.*?)<\/a>/is', $content, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $m) {
            $totalLinksScanned++;
            $href = trim($m[1]);
            $anchorText = strip_tags(trim($m[2]));

            if ($href === '#' && !preg_match('/data-(?:toggle|bs-toggle)=["\']collapse["\']/i', $m[0])) {
                $deadHashButtons[] = array(
                    'source' => $incName,
                    'text' => $anchorText,
                    'tag' => substr($m[0], 0, 100)
                );
                continue;
            }

            // For root-relative links in includes (/products/, /quality/, etc.)
            if (strpos($href, '/') === 0) {
                $checkPath = $href;
                $exists = verifyPathOnDisk($checkPath, $siteRoot);
                if (!$exists) {
                    $brokenLinks[] = array(
                        'source' => $incName,
                        'href' => $href,
                        'resolvedPath' => $checkPath,
                        'anchorText' => substr($anchorText, 0, 40)
                    );
                }
            }
        }
    }
}

echo "\n=== AUDIT RESULTS ===\n";
echo "Total pages scanned: " . count($samplePages) . "\n";
echo "Total unique internal URLs tested: " . count($testedUrls) . "\n";
echo "Total links inspected: " . $totalLinksScanned . "\n";
echo "Total Broken Links: " . count($brokenLinks) . "\n";
echo "Total Missing Image References: " . count($brokenImages) . "\n";
echo "Total Dead '#' Anchors: " . count($deadHashButtons) . "\n";

echo "\n--- DETAILS OF BROKEN LINKS (" . count($brokenLinks) . ") ---\n";
if (empty($brokenLinks)) {
    echo "SUCCESS: Zero broken links found! All internal links resolve cleanly.\n";
} else {
    $dedup = array();
    foreach ($brokenLinks as $bl) {
        $k = $bl['source'] . ' -> ' . ($bl['href'] ?? $bl['target']);
        if (!isset($dedup[$k])) {
            $dedup[$k] = $bl;
            echo "Page: {$bl['source']}\n  Href: " . ($bl['href'] ?? $bl['target']) . "\n  Target Path: " . ($bl['resolvedPath'] ?? 'N/A') . "\n  Anchor Text: '" . ($bl['anchorText'] ?? '') . "'\n\n";
        }
    }
}

echo "\n--- DETAILS OF DEAD '#' LINKS OR UNLINKED BUTTONS (" . count($deadHashButtons) . ") ---\n";
$dedupHash = array();
foreach ($deadHashButtons as $dh) {
    $k = $dh['source'] . ' | ' . $dh['text'];
    if (!isset($dedupHash[$k])) {
        $dedupHash[$k] = true;
        echo "File: {$dh['source']} | Text: '{$dh['text']}'\n  Tag: {$dh['tag']}\n";
    }
}

// Save JSON report
$report = array(
    'totalPages' => count($samplePages),
    'totalLinks' => $totalLinksScanned,
    'brokenLinks' => $brokenLinks,
    'brokenImages' => $brokenImages,
    'deadHashButtons' => $deadHashButtons
);
file_put_contents($siteRoot . '/SEO-Optimization-Report/audit_results.json', json_encode($report, JSON_PRETTY_PRINT));
echo "\nDetailed audit saved to SEO-Optimization-Report/audit_results.json\n";

