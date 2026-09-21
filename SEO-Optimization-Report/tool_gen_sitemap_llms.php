<?php
/**
 * Star Laboratories (Pvt) Ltd — Segmented Sitemap & LLM Documentation Generator
 * Generates:
 *   1. sitemap-main.xml (Institutional & Core Pages)
 *   2. sitemap-products-veterinary.xml (Veterinary Formulations)
 *   3. sitemap-products-human.xml (Human Formulations)
 *   4. sitemap-manufacturing.xml (Technical & Quality Facilities)
 *   5. sitemap-news.xml (Blog, Guides & Corporate Events)
 *   6. sitemap.xml (Overarching Sitemap Index)
 *   7. llms.txt & llms-full.txt (AI & Answer Engine Reference)
 */

$root = "C:/xampp/htdocs/starlabs";
$BASE = "https://starlabs.com.pk";
require $root . "/include/products-data.php";

function sl_url_path($p) {
    if ($p === '') return '';
    $segs = explode('/', $p);
    foreach ($segs as $k => $s) $segs[$k] = rawurlencode($s);
    return implode('/', $segs);
}

/* Collect every directory that has an index.php (= a real page) */
$exclude = array('include', 'SEO-Optimization-Report', '.well-known', 'fonts', 'css', 'js', 'img');
$urls = array();
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS));
foreach ($rii as $f) {
    if ($f->getFilename() !== 'index.php') continue;
    $rel = str_replace('\\', '/', substr($f->getPath(), strlen($root)));
    $rel = trim($rel, '/');
    $top = explode('/', $rel)[0];
    if ($rel !== '' && in_array($top, $exclude, true)) continue;
    $urls[$rel] = $f->getMTime();
}
// Homepage
$urls[''] = @filemtime($root . "/index.php") ?: time();
ksort($urls);

/* Segment URLs into topical silos */
$silos = array(
    'main' => array(
        'file' => 'sitemap-main.xml',
        'freq' => 'monthly',
        'priority' => '1.0',
        'urls' => array(),
    ),
    'veterinary' => array(
        'file' => 'sitemap-products-veterinary.xml',
        'freq' => 'weekly',
        'priority' => '0.9',
        'urls' => array(),
    ),
    'human' => array(
        'file' => 'sitemap-products-human.xml',
        'freq' => 'weekly',
        'priority' => '0.9',
        'urls' => array(),
    ),
    'manufacturing' => array(
        'file' => 'sitemap-manufacturing.xml',
        'freq' => 'quarterly',
        'priority' => '0.7',
        'urls' => array(),
    ),
    'news' => array(
        'file' => 'sitemap-news.xml',
        'freq' => 'weekly',
        'priority' => '0.6',
        'urls' => array(),
    ),
);

$manufacturing_pages = array(
    'manufacturing',
    'manufacturing/production',
    'manufacturing/quality-control-and-assurance',
    'contract-manufacturing',
    'quality',
);

foreach ($urls as $rel => $mt) {
    if (strpos($rel, 'products/veterinary') === 0) {
        $prio = ($rel === 'products/veterinary') ? '0.95' : ((substr_count($rel, '/') === 2) ? '0.90' : '0.80');
        $silos['veterinary']['urls'][$rel] = array('mtime' => $mt, 'priority' => $prio);
    } elseif (strpos($rel, 'products/human') === 0) {
        $prio = ($rel === 'products/human') ? '0.95' : ((substr_count($rel, '/') === 2) ? '0.90' : '0.80');
        $silos['human']['urls'][$rel] = array('mtime' => $mt, 'priority' => $prio);
    } elseif (in_array($rel, $manufacturing_pages, true)) {
        $silos['manufacturing']['urls'][$rel] = array('mtime' => $mt, 'priority' => '0.75');
    } elseif (strpos($rel, 'blog') === 0 || strpos($rel, 'news') === 0) {
        $prio = ($rel === 'blog') ? '0.70' : '0.65';
        $silos['news']['urls'][$rel] = array('mtime' => $mt, 'priority' => $prio);
    } else {
        $prio = ($rel === '') ? '1.0' : '0.85';
        $silos['main']['urls'][$rel] = array('mtime' => $mt, 'priority' => $prio);
    }
}

/* Generate individual topical XML sitemaps */
$now = date('Y-m-d');
$index_entries = array();

foreach ($silos as $key => $data) {
    $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $latest_mtime = 0;

    foreach ($data['urls'] as $rel => $info) {
        if ($info['mtime'] > $latest_mtime) {
            $latest_mtime = $info['mtime'];
        }
        $loc = $BASE . '/' . ($rel === '' ? '' : sl_url_path($rel) . '/');
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . htmlspecialchars($loc, ENT_XML1) . "</loc>\n";
        $xml .= "    <lastmod>" . date('Y-m-d', $info['mtime']) . "</lastmod>\n";
        $xml .= "    <changefreq>" . $data['freq'] . "</changefreq>\n";
        $xml .= "    <priority>" . $info['priority'] . "</priority>\n";
        $xml .= "  </url>\n";
    }
    $xml .= "</urlset>\n";

    file_put_contents($root . "/" . $data['file'], $xml);
    echo $data['file'] . ": " . count($data['urls']) . " URLs\n";

    $lastmod_str = $latest_mtime ? date('Y-m-d', $latest_mtime) : $now;
    $index_entries[] = array(
        'loc' => $BASE . '/' . $data['file'],
        'lastmod' => $lastmod_str,
    );
}

/* Generate master sitemap.xml index */
$index_xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$index_xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($index_entries as $entry) {
    $index_xml .= "  <sitemap>\n";
    $index_xml .= "    <loc>" . htmlspecialchars($entry['loc'], ENT_XML1) . "</loc>\n";
    $index_xml .= "    <lastmod>" . $entry['lastmod'] . "</lastmod>\n";
    $index_xml .= "  </sitemap>\n";
}
$index_xml .= "</sitemapindex>\n";
file_put_contents($root . "/sitemap.xml", $index_xml);
echo "sitemap.xml (SitemapIndex): " . count($index_entries) . " sub-sitemaps linked\n";

/* ---- llms.txt (concise index) ---- */
$segforms = array();
foreach ($STARLABS_PRODUCTS as $k => $p) {
    $parts = explode('/', $k);
    if (count($parts) >= 3) { $sf = $parts[1] . '/' . $parts[2]; $segforms[$sf] = ($segforms[$sf] ?? 0) + 1; }
}
$llms  = "# Star Laboratories (Pvt) Ltd\n\n";
$llms .= "> WHO-GMP certified manufacturer of human and veterinary pharmaceutical products in Lahore, Pakistan. Founded 1960. Exporting to 30+ countries. " . count($STARLABS_PRODUCTS) . " registered products.\n\n";
$llms .= "Star Laboratories manufactures human medicines (antibiotics, cardiovascular, gastrointestinal, CNS, respiratory, anti-diabetic, nutritional) and veterinary medicines for livestock and poultry, across injectable, oral solid, oral liquid, topical, drench, bolus, powder and aerosol dosage forms. The company also offers contract / third-party / toll manufacturing.\n\n";
$llms .= "## Key Facts\n";
$llms .= "- Legal name: Star Laboratories (Private) Limited\n";
$llms .= "- Founded: 1960\n";
$llms .= "- Address: 23 K.M. Multan Road, Lahore 53800, Punjab, Pakistan\n";
$llms .= "- Phone: +92-42-37511331, +92-309-2554000\n";
$llms .= "- Email: starlabshr@starlabs.com.pk\n";
$llms .= "- Certifications: WHO-GMP; licensed by DRAP (Drug Regulatory Authority of Pakistan); ISO 9001:2015, ISO 14001:2015, ISO 45001:2018\n";
$llms .= "- Awards: PPMA PESA Top Exporter Award 2023, PPMA PESA Top Exporter Award 2024\n";
$llms .= "- Products: " . count($STARLABS_PRODUCTS) . " (human + veterinary)\n\n";
$llms .= "## Main Pages\n";
$llms .= "- [Products](" . $BASE . "/products/): full human & veterinary catalogue\n";
$llms .= "- [Human Products](" . $BASE . "/products/human/)\n";
$llms .= "- [Veterinary Products](" . $BASE . "/products/veterinary/)\n";
$llms .= "- [Contract Manufacturing](" . $BASE . "/contract-manufacturing/): WHO-GMP contract / toll / third-party manufacturing\n";
$llms .= "- [Quality & Certifications](" . $BASE . "/quality/)\n";
$llms .= "- [Exports](" . $BASE . "/exports/)\n";
$llms .= "- [About](" . $BASE . "/about/)\n";
$llms .= "- [Contact](" . $BASE . "/contact/)\n";
$llms .= "- [Insights](" . $BASE . "/blog/)\n\n";
$llms .= "## Knowledge Hub & Technical Guides\n";
$llms .= "- [Contract Manufacturing in Pakistan: DRAP Licensing & WHO-GMP Guide](" . $BASE . "/blog/contract-manufacturing-pharmaceuticals-pakistan-drap-guide/)\n";
$llms .= "- [Oral Solid Dosage vs Liquid Formulations: Technical Comparison](" . $BASE . "/blog/oral-solid-dosage-vs-liquid-formulations-manufacturing/)\n";
$llms .= "- [Pharmaceutical Quality Assurance & QC: WHO-GMP Standards](" . $BASE . "/blog/pharmaceutical-quality-assurance-qc-who-gmp-standards/)\n";
$llms .= "- [Veterinary Medicine Manufacturing for Livestock & Poultry in Pakistan](" . $BASE . "/blog/veterinary-medicine-manufacturing-livestock-poultry-pakistan/)\n";
$llms .= "- [Bovine Mastitis Prevention & Treatment: Intramammary Infusions](" . $BASE . "/blog/bovine-mastitis-prevention-treatment-intramammary-infusions/)\n";
$llms .= "- [Antibiotic Stewardship & Safe Dosage Guide: Pediatric & Adult](" . $BASE . "/blog/antibiotic-stewardship-safe-pediatric-adult-dosage/)\n";
$llms .= "- [Pharmaceutical Regulatory Dossier: CTD & ACTD for Export Markets](" . $BASE . "/blog/pharmaceutical-regulatory-dossier-ctd-actd-export-markets/)\n";
$llms .= "- [Poultry Biosecurity & Water-Soluble Powder Therapeutics Guide](" . $BASE . "/blog/poultry-biosecurity-water-soluble-powder-therapeutics/)\n\n";
$llms .= "## Product Categories\n";
foreach ($segforms as $sf => $n) {
    $label = ucwords(str_replace(array('-', '/'), array(' ', ' / '), $sf));
    $llms .= "- [" . $label . "](" . $BASE . "/products/" . sl_url_path($sf) . "/): " . $n . " products\n";
}
$llms .= "\n## Segmented Sitemaps\n";
$llms .= "- [Master Sitemap Index](" . $BASE . "/sitemap.xml)\n";
$llms .= "- [Institutional Pages Sitemap](" . $BASE . "/sitemap-main.xml)\n";
$llms .= "- [Veterinary Formulations Sitemap](" . $BASE . "/sitemap-products-veterinary.xml)\n";
$llms .= "- [Human Formulations Sitemap](" . $BASE . "/sitemap-products-human.xml)\n";
$llms .= "- [Manufacturing Facilities Sitemap](" . $BASE . "/sitemap-manufacturing.xml)\n";
$llms .= "- [Corporate News & Blog Sitemap](" . $BASE . "/sitemap-news.xml)\n";
$llms .= "\n## More\n- Full machine-readable product catalogue: [llms-full.txt](" . $BASE . "/llms-full.txt)\n";
file_put_contents($root . "/llms.txt", $llms);
echo "llms.txt: " . strlen($llms) . " bytes\n";

/* ---- llms-full.txt (full enriched catalogue) ---- */
$full = "# Star Laboratories (Pvt) Ltd — Full Product Catalogue\n\n";
$full .= "> WHO-GMP certified human & veterinary pharmaceutical manufacturer, Lahore, Pakistan (founded 1960). " . count($STARLABS_PRODUCTS) . " products. All product information is for general/professional reference; medicines should be used as directed by a registered physician or veterinarian.\n\n";
$curSeg = '';
foreach ($STARLABS_PRODUCTS as $k => $p) {
    $parts = explode('/', $k);
    $segform = ucwords(str_replace('-', ' ', $parts[1])) . ' / ' . ucwords(str_replace('-', ' ', $parts[2]));
    if ($segform !== $curSeg) { $full .= "\n## " . $segform . "\n\n"; $curSeg = $segform; }
    $full .= "### " . $p['name'] . "\n";
    $full .= "- URL: " . $BASE . "/" . sl_url_path($k) . "/\n";
    if (!empty($p['active']))      $full .= "- Active ingredient: " . $p['active'] . "\n";
    if (!empty($p['drug_class']))  $full .= "- Class: " . $p['drug_class'] . "\n";
    if (!empty($p['route']))       $full .= "- Route: " . $p['route'] . "\n";
    if (!empty($p['uses']))        $full .= "- Uses: " . $p['uses'] . "\n";
    $full .= "\n";
}
file_put_contents($root . "/llms-full.txt", $full);
echo "llms-full.txt: " . strlen($full) . " bytes\n";
