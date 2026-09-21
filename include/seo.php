<?php
/**
 * ============================================================================
 * Star Laboratories (Pvt) Ltd — Centralised Technical SEO + AEO Engine
 * ----------------------------------------------------------------------------
 * Included inside <head> of every page. It auto-detects the current page from
 * the filesystem path (works on any domain / sub-directory) and emits:
 *   - <title>, meta description, keywords, robots, author, language
 *   - Canonical URL + hreflang (en / en-PK / x-default)
 *   - Open Graph + Twitter Card tags
 *   - JSON-LD: Organization, WebSite (+SearchAction), BreadcrumbList,
 *     Product / Drug, FAQPage, ContactPage, AboutPage where relevant
 *   - Favicons, theme-color, preconnect / dns-prefetch performance hints
 *
 * AEO (Answer Engine Optimization): clean entity data + FAQ + llms.txt make
 * the site machine-readable for Google AI Overviews, ChatGPT, Perplexity, etc.
 * ============================================================================
 */

/* Run-once guard: if already included on this request, stop here. */
if (defined('STARLABS_SEO_LOADED')) { return; }
define('STARLABS_SEO_LOADED', true);

/* ---------------------------------------------------------------------------
 * 1. CONFIG — edit the canonical domain here if it ever changes
 * ------------------------------------------------------------------------- */
$SL = array(
    'base_url'    => 'https://starlabs.com.pk',              // production canonical host (non-www, matches live)
    'name'        => 'Star Laboratories (Pvt) Ltd',
    'short_name'  => 'Star Laboratories',
    'legal_name'  => 'Star Laboratories (Private) Limited',
    'founded'     => '1960',
    'phone'       => '+92-42-37511331',
    'phone_alt'   => '+92-309-2554000',
    'email'       => 'starlabshr@starlabs.com.pk',
    'street'      => '23 K.M. Multan Road',
    'city'        => 'Lahore',
    'region'      => 'Punjab',
    'postal'      => '53800',
    'country'     => 'PK',
    'geo_lat'     => '31.3729',
    'geo_lng'     => '74.1955',
    'logo'        => '/img/logo/logo.png',
    'og_image'    => '/img/seo/og-default.jpg',             // 1200x630 social share image (generated)
    'facebook'    => 'https://www.facebook.com/Starlabs.com.pk/',
    'twitter'     => 'https://x.com/starlaboratori1',
    'instagram'   => 'https://www.instagram.com/starlaboratoriespvt.l/',
    'linkedin'    => 'https://www.linkedin.com/company/star-laboratories-pvt-ltd/',
);

/* ---------------------------------------------------------------------------
 * 2. RESOLVE CURRENT PAGE PATH (relative to the starlabs site root)
 *    __DIR__ = .../starlabs/include  ->  site root = parent of include
 * ------------------------------------------------------------------------- */
$site_root = str_replace('\\', '/', dirname(__DIR__));
$script_fs = str_replace('\\', '/', isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : '');
$rel = '';
if ($script_fs && strpos($script_fs, $site_root) === 0) {
    $rel = ltrim(substr($script_fs, strlen($site_root)), '/');
}
$rel_dir = preg_replace('#/?index\.php$#i', '', $rel);   // e.g. products/human/injectable/amicin-100mg-injection
$rel_dir = trim($rel_dir, '/');

/* URL-safe path: percent-encode each segment but keep '/' separators.
 * Fixes canonical/OG/JSON-LD URLs for product dirs that contain spaces,
 * parentheses or other non-ASCII-safe characters. */
function sl_url_path($p) {
    if ($p === '') { return ''; }
    $segs = explode('/', $p);
    foreach ($segs as $k => $s) { $segs[$k] = rawurlencode($s); }
    return implode('/', $segs);
}
$rel_url   = sl_url_path($rel_dir);
$canonical = $SL['base_url'] . '/' . ($rel_url === '' ? '' : $rel_url . '/');

/* depth-aware relative prefix so favicon/manifest resolve on every directory */
$depth  = $rel_dir === '' ? 0 : substr_count($rel_dir, '/') + 1;
$prefix = str_repeat('../', $depth);

/* ---------------------------------------------------------------------------
 * 3. STATIC PAGE REGISTRY — curated titles & descriptions
 * ------------------------------------------------------------------------- */
$brand = ' | Star Laboratories (Pvt) Ltd';
$PAGES = array(
  '' => array(
    'title' => 'Star Laboratories | Human & Veterinary Pharmaceutical Manufacturer in Pakistan',
    'desc'  => 'Star Laboratories (Pvt) Ltd is a leading WHO-GMP certified pharmaceutical manufacturer in Lahore, Pakistan, producing high-quality human and veterinary medicines since 1960 and exporting to over 30 countries.',
    'type'  => 'website'),
  'about' => array(
    'title' => 'About Us — 60+ Years of Pharmaceutical Excellence' . $brand,
    'desc'  => 'Learn about Star Laboratories (Pvt) Ltd — a Pakistani pharmaceutical manufacturer with 60+ years of expertise in human and veterinary medicine, WHO-GMP compliant facilities and global exports.',
    'type'  => 'AboutPage'),
  'about/the-team' => array(
    'title' => 'Our Team — Leadership & Experts' . $brand,
    'desc'  => 'Meet the leadership and scientific team behind Star Laboratories — experienced pharmacists, chemists and quality experts driving human and veterinary healthcare innovation in Pakistan.',
    'type'  => 'AboutPage'),
  'about/our-journey' => array(
    'title' => 'Our Journey — Milestones Since 1960' . $brand,
    'desc'  => 'Explore the journey of Star Laboratories from its founding in 1960 to becoming a trusted human and veterinary pharmaceutical manufacturer exporting across the globe.',
    'type'  => 'AboutPage'),
  'about/code-of-conduct' => array(
    'title' => 'Code of Conduct — Ethics & Compliance' . $brand,
    'desc'  => 'Star Laboratories\' Code of Conduct sets out our commitment to ethics, integrity, regulatory compliance and responsible pharmaceutical manufacturing.',
    'type'  => 'AboutPage'),
  'products' => array(
    'title' => 'Products — Human & Veterinary Medicines' . $brand,
    'desc'  => 'Browse Star Laboratories\' portfolio of 480+ human and veterinary pharmaceutical products — injectables, tablets, capsules, syrups, suspensions, powders and topical formulations.',
    'type'  => 'CollectionPage'),
  'products/human' => array(
    'title' => 'Human Pharmaceutical Products — Tablets, Injectables & Syrups' . $brand,
    'desc'  => 'Explore Star Laboratories\' range of human medicines: antibiotics, analgesics, cardiovascular, gastro, CNS and nutritional products in oral solid, oral liquid, injectable and topical forms.',
    'type'  => 'CollectionPage'),
  'products/human/oral-solids' => array(
    'title' => 'Human Oral Solids — Tablets & Capsules' . $brand,
    'desc'  => 'Star Laboratories\' human oral solid dosage forms — quality tablets and capsules manufactured under WHO-GMP standards across multiple therapeutic categories.',
    'type'  => 'CollectionPage'),
  'products/veterinary' => array(
    'title' => 'Veterinary Pharmaceutical Products — Animal Health Medicines' . $brand,
    'desc'  => 'Star Laboratories\' veterinary medicine range for livestock and poultry — injectables, drenches, boluses, powders and aerosols supporting animal health and productivity.',
    'type'  => 'CollectionPage'),
  'manufacturing' => array(
    'title' => 'Manufacturing & Research — WHO-GMP Pharmaceutical Facility' . $brand,
    'desc'  => 'Discover Star Laboratories\' state-of-the-art manufacturing and R&D facilities in Lahore, Pakistan — WHO-GMP compliant production of human and veterinary pharmaceuticals.',
    'type'  => 'website'),
  'manufacturing/production' => array(
    'title' => 'Production Facility — Pharmaceutical Manufacturing' . $brand,
    'desc'  => 'Inside Star Laboratories\' production facility: modern, validated manufacturing lines for injectables, tablets, capsules, liquids and powders built to international GMP standards.',
    'type'  => 'website'),
  'manufacturing/quality-control-and-assurance' => array(
    'title' => 'Quality Control & Assurance — Pharmaceutical Testing' . $brand,
    'desc'  => 'Star Laboratories\' Quality Control and Quality Assurance: rigorous in-process and finished-product testing ensuring safe, effective, GMP-compliant medicines.',
    'type'  => 'website'),
  'exports' => array(
    'title' => 'Exports — Pharmaceuticals Shipped to 30+ Countries' . $brand,
    'desc'  => 'Star Laboratories exports WHO-GMP certified human and veterinary pharmaceuticals to over 30 countries across Asia, Africa and the Middle East. Partner with a trusted Pakistani manufacturer.',
    'type'  => 'website'),
  'careers' => array(
    'title' => 'Careers — Join Star Laboratories' . $brand,
    'desc'  => 'Build your career with Star Laboratories (Pvt) Ltd. Explore opportunities in pharmaceutical manufacturing, R&D, quality, sales and marketing in Lahore, Pakistan.',
    'type'  => 'website'),
  'contact' => array(
    'title' => 'Contact Us — Lahore, Pakistan' . $brand,
    'desc'  => 'Get in touch with Star Laboratories (Pvt) Ltd — 23 K.M. Multan Road, Lahore, Pakistan. Phone +92-42-37511331. Enquiries for products, exports, partnerships and careers.',
    'type'  => 'ContactPage'),
  'news-and-events' => array(
    'title' => 'News & Events — Star Laboratories' . $brand,
    'desc'  => 'Latest news, awards, exhibitions and events from Star Laboratories (Pvt) Ltd — including export awards, international delegations and pharmaceutical industry updates.',
    'type'  => 'website'),
  'contract-manufacturing' => array(
    'title' => 'Contract & Toll Manufacturing in Pakistan — WHO-GMP Partner' . $brand,
    'desc'  => 'WHO-GMP certified contract, third-party and toll manufacturing of human and veterinary pharmaceuticals in Pakistan — tablets, capsules, injectables, syrups, ointments and more. Partner with Star Laboratories.',
    'type'  => 'website'),
  'quality' => array(
    'title' => 'Quality, Certifications & Compliance — WHO-GMP & DRAP' . $brand,
    'desc'  => 'Star Laboratories manufactures human and veterinary medicines under WHO-GMP standards with DRAP licensing, rigorous quality control and quality assurance, and export-compliance documentation (CoPP).',
    'type'  => 'website'),
  'blog' => array(
    'title' => 'Insights & Resources — Pharma Manufacturing Knowledge Hub' . $brand,
    'desc'  => 'Guidance on pharmaceutical manufacturing, quality and sourcing from Star Laboratories — for healthcare professionals, distributors and partners.',
    'type'  => 'Blog'),
  'blog/who-gmp-pharmaceutical-manufacturer-pakistan' => array(
    'title' => 'What is WHO-GMP & Why It Matters in a Pharma Manufacturer' . $brand,
    'desc'  => 'A practical guide for brand owners and distributors evaluating a WHO-GMP pharmaceutical manufacturing partner in Pakistan — what GMP covers and how to verify quality credentials.',
    'type'  => 'Article'),
  'blog/pharmaceutical-export-from-pakistan-guide' => array(
    'title' => 'Pharmaceutical Export from Pakistan — Guide for Importers' . $brand,
    'desc'  => 'How pharmaceutical export from Pakistan works: product registration, CoPP documentation, distribution and what to look for when sourcing generic medicines.',
    'type'  => 'Article'),
  'blog/contract-manufacturing-pharmaceuticals-pakistan-drap-guide' => array(
    'title' => 'Contract & Toll Manufacturing in Pakistan: DRAP Guidelines' . $brand,
    'desc'  => 'Comprehensive guide to contract and toll manufacturing of pharmaceuticals in Pakistan under DRAP regulations, cGMP cleanroom standards, and partner selection.',
    'type'  => 'Article'),
  'blog/oral-solid-dosage-vs-liquid-formulations-manufacturing' => array(
    'title' => 'Oral Solids vs Oral Liquids: Formulation Science & Bioavailability' . $brand,
    'desc'  => 'Comparative formulation analysis of oral solid dosage forms (tablets, capsules) versus liquid formulations (syrups, suspensions), stability, and cGMP manufacturing.',
    'type'  => 'Article'),
  'blog/pharmaceutical-quality-assurance-qc-who-gmp-standards' => array(
    'title' => 'Pharmaceutical QA & QC in WHO-GMP Facilities — Comprehensive Guide' . $brand,
    'desc'  => 'An in-depth breakdown of Quality Assurance and Quality Control systems in WHO-GMP pharmaceutical manufacturing, HPLC testing, and batch release protocols.',
    'type'  => 'Article'),
  'blog/veterinary-medicine-manufacturing-livestock-poultry-pakistan' => array(
    'title' => 'Veterinary Medicine & Animal Health in Pakistan — Clinical Guide' . $brand,
    'desc'  => 'Expert guide to veterinary pharmaceutical manufacturing in Pakistan for dairy cattle, livestock, and poultry farming, covering anthelmintics and antimicrobials.',
    'type'  => 'Article'),
  'blog/bovine-mastitis-prevention-treatment-intramammary-infusions' => array(
    'title' => 'Bovine Mastitis Management & Intramammary Infusion Protocols' . $brand,
    'desc'  => 'Clinical veterinary guide on managing bovine mastitis in dairy cattle and buffaloes in Pakistan, CMT testing, intramammary therapy, and dry cow protocols.',
    'type'  => 'Article'),
  'blog/antibiotic-stewardship-safe-pediatric-adult-dosage' => array(
    'title' => 'Responsible Antibiotic Stewardship & Safe Dosage Guidelines' . $brand,
    'desc'  => 'Clinical principles of antimicrobial stewardship, pediatric dry powder suspension reconstitution, narrow vs broad-spectrum selection, and AMR prevention in Pakistan.',
    'type'  => 'Article'),
  'blog/pharmaceutical-regulatory-dossier-ctd-actd-export-markets' => array(
    'title' => 'CTD & ACTD Regulatory Dossiers for Pharma Exports Guide' . $brand,
    'desc'  => 'A complete regulatory roadmap for generic pharmaceutical export: compiling CTD and ACTD dossiers, Zone IVa/IVb stability validation, and Certificate of Pharmaceutical Product (CoPP).',
    'type'  => 'Article'),
  'blog/poultry-biosecurity-water-soluble-powder-therapeutics' => array(
    'title' => 'Commercial Poultry Health, Water-Soluble Medication & Biosecurity' . $brand,
    'desc'  => 'Guide to commercial poultry flock healthcare, addressing Chronic Respiratory Disease (CRD), water-soluble therapeutics, and essential farm biosecurity in Pakistan.',
    'type'  => 'Article'),
);

/* ---------------------------------------------------------------------------
 * 4. RESOLVE METADATA FOR THIS PAGE (static page OR product OR fallback)
 * ------------------------------------------------------------------------- */
$is_product = false;
$product    = null;
$page_type  = 'website';
$keywords   = 'Star Laboratories, pharmaceutical manufacturer Pakistan, human medicine, veterinary medicine, WHO-GMP, Lahore pharma company';

if (isset($PAGES[$rel_dir])) {
    $meta_title = $PAGES[$rel_dir]['title'];
    $meta_desc  = $PAGES[$rel_dir]['desc'];
    $page_type  = $PAGES[$rel_dir]['type'];
} else {
    // Try product lookup
    @include_once(__DIR__ . '/products-data.php');
    if (isset($STARLABS_PRODUCTS) && isset($STARLABS_PRODUCTS[$rel_dir])) {
        $is_product = true;
        $product    = $STARLABS_PRODUCTS[$rel_dir];
        $page_type  = 'product';
        $seg  = $product['segment'];
        $form = rtrim($product['form'], 's'); // singular-ish for readability
        $active = !empty($product['active']) ? $product['active'] : '';
        // Title includes the generic molecule (strong SEO signal) when available.
        $gen = $active !== '' ? ' (' . preg_replace('/\s*\d.*$/', '', $active) . ')' : '';
        if (strlen($product['name'] . $gen) > 50) { $gen = ''; }
        $meta_title = $product['name'] . $gen . ' — ' . $seg . ' ' . $product['form'] . $brand;
        $base_desc  = !empty($product['uses']) ? trim($product['uses']) : trim($product['desc']);
        if ($base_desc === '') {
            $base_desc = $product['name'] . ' is a quality ' . strtolower($seg) . ' pharmaceutical product manufactured by Star Laboratories.';
        }
        $lead = $product['name'] . ($active !== '' ? ' (' . $active . ')' : '') . ', a ' . strtolower($seg) . ' ' . strtolower($product['form']) . ' by Star Laboratories. ';
        $meta_desc = $lead . $base_desc;
        if (strlen($meta_desc) > 300) { $meta_desc = rtrim(substr($meta_desc, 0, 297)) . '...'; }
        $keywords = $product['name'] . ', ' . ($active !== '' ? $active . ', ' : '') . $product['name'] . ' uses, ' . $seg . ' ' . $product['form']
                  . ', Star Laboratories, pharmaceutical manufacturer Pakistan';
    } elseif (strpos($rel_dir, 'products') === 0) {
        // Category / subcategory hub (e.g. products/human/injectable) -> CollectionPage
        $page_type = 'CollectionPage';
        $parts = explode('/', $rel_dir);
        $segName  = isset($parts[1]) ? ucwords(str_replace('-', ' ', $parts[1])) : '';
        $formName = isset($parts[2]) ? ucwords(str_replace('-', ' ', $parts[2])) : '';
        if ($formName !== '') {
            $meta_title = $segName . ' ' . $formName . ' — Pharmaceutical Products' . $brand;
            $meta_desc  = 'Browse Star Laboratories\' ' . strtolower($segName) . ' ' . strtolower($formName)
                        . ' range — WHO-GMP certified pharmaceutical products manufactured in Lahore, Pakistan, and exported to 30+ countries.';
        } else {
            $meta_title = $segName . ' Pharmaceutical Products' . $brand;
            $meta_desc  = 'Explore Star Laboratories\' ' . strtolower($segName) . ' medicine range — WHO-GMP certified products across multiple dosage forms and therapeutic categories.';
        }
    } else {
        // Generic fallback derived from the URL path
        $nice = ucwords(str_replace(array('-', '/'), array(' ', ' '), $rel_dir));
        $meta_title = ($nice ? $nice . $brand : 'Star Laboratories (Pvt) Ltd — Human & Veterinary Pharmaceutical Manufacturer');
        $meta_desc  = 'Star Laboratories (Pvt) Ltd — a WHO-GMP certified human and veterinary pharmaceutical manufacturer in Lahore, Pakistan, serving customers in 30+ countries since 1962.';
    }
}

/* og:image — product image ONLY when the file truly exists on disk, else the
 * default branded share image. Crawlers read OG/JSON-LD before JS runs, so the
 * client-side logo-swap does NOT fix social/structured-data previews — this
 * server-side guard does, preventing ~385 missing-image 404s in metadata. */
$og_image          = $SL['base_url'] . $SL['og_image'];
$product_has_image = false;
$product_img_url   = '';
if ($is_product) {
    $img_rel = !empty($product['img']) ? ltrim($product['img'], '/') : '';
    if ($img_rel !== '' && is_file($site_root . '/' . $img_rel)) {
        $product_has_image = true;                               // real photo
        $product_img_url   = $SL['base_url'] . '/' . sl_url_path($img_rel);
    } else {
        // branded placeholder (generated for every photo-less product)
        $flat = str_replace('/', '__', preg_replace('#^products/#', '', $rel_dir));
        $ph   = 'img/placeholder/' . $flat . '.png';
        if (is_file($site_root . '/' . $ph)) {
            $product_has_image = true;                           // valid branded image
            $product_img_url   = $SL['base_url'] . '/' . sl_url_path($ph);
        }
    }
    if ($product_img_url !== '') { $og_image = $product_img_url; }
}

/* small helper */
function sl_attr($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

/* ---------------------------------------------------------------------------
 * 5. BUILD BREADCRUMB TRAIL
 * ------------------------------------------------------------------------- */
$crumbs = array(array('name' => 'Home', 'url' => $SL['base_url'] . '/'));
if ($rel_dir !== '') {
    $parts = explode('/', $rel_dir);
    $acc = '';
    foreach ($parts as $i => $p) {
        $acc .= ($acc === '' ? '' : '/') . $p;
        $label = ucwords(str_replace('-', ' ', $p));
        // nicer labels
        $label = str_replace(array('And', 'Qc'), array('and', 'QC'), $label);
        if ($i === count($parts) - 1 && ($is_product)) { $label = $product['name']; }
        $crumbs[] = array('name' => $label, 'url' => $SL['base_url'] . '/' . sl_url_path($acc) . '/');
    }
}
?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo sl_attr($meta_title); ?></title>
<meta name="description" content="<?php echo sl_attr($meta_desc); ?>">
<meta name="author" content="Star Laboratories (Pvt) Ltd">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="googlebot" content="index, follow">
<meta name="rating" content="general">
<meta name="theme-color" content="#db0000">
<meta name="format-detection" content="telephone=yes">
<meta name="generator" content="Star Laboratories Technical SEO Engine">
<meta http-equiv="content-language" content="en">
<meta name="geo.region" content="PK-PB">
<meta name="geo.placename" content="Lahore">
<meta name="geo.position" content="<?php echo $SL['geo_lat']; ?>;<?php echo $SL['geo_lng']; ?>">
<meta name="ICBM" content="<?php echo $SL['geo_lat']; ?>, <?php echo $SL['geo_lng']; ?>">

<!-- Canonical (single-locale English site → no hreflang needed) -->
<link rel="canonical" href="<?php echo sl_attr($canonical); ?>">

<!-- Open Graph -->
<meta property="og:type" content="<?php echo $is_product ? 'product' : 'website'; ?>">
<meta property="og:site_name" content="Star Laboratories (Pvt) Ltd">
<meta property="og:title" content="<?php echo sl_attr($meta_title); ?>">
<meta property="og:description" content="<?php echo sl_attr($meta_desc); ?>">
<meta property="og:url" content="<?php echo sl_attr($canonical); ?>">
<meta property="og:image" content="<?php echo sl_attr($og_image); ?>">
<meta property="og:image:alt" content="<?php echo sl_attr($meta_title); ?>">
<?php if (!$product_has_image): ?>
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<?php endif; ?>
<meta property="og:locale" content="en_PK">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo sl_attr($meta_title); ?>">
<meta name="twitter:description" content="<?php echo sl_attr($meta_desc); ?>">
<meta name="twitter:image" content="<?php echo sl_attr($og_image); ?>">
<meta name="twitter:site" content="@starlaboratori1">

<!-- Icons & manifest -->
<link rel="icon" type="image/png" href="<?php echo $prefix; ?>img/favicon.png">
<link rel="apple-touch-icon" href="<?php echo $prefix; ?>img/favicon.png">
<link rel="manifest" href="<?php echo $prefix; ?>site.webmanifest">

<!-- Performance: resource hints (only hosts actually used) -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://translate.google.com">
<link rel="dns-prefetch" href="https://www.youtube.com">
<?php if ($rel_dir === ''): /* Homepage: preload the LCP hero (htaccess serves WebP when supported) */ ?>
<link rel="preload" as="image" href="<?php echo $prefix; ?>img/banner/home1.jpg" fetchpriority="high">
<?php endif; ?>

<!-- ================= JSON-LD STRUCTURED DATA (SEO + AEO) ================= -->
<script type="application/ld+json">
<?php
$graph = array();

/* Organization + LocalBusiness (Pharmaceutical manufacturer) */
$graph[] = array(
  '@type' => array('Organization', 'MedicalOrganization', 'MedicalBusiness', 'LocalBusiness'),
  '@id'   => $SL['base_url'] . '/#organization',
  'name'  => $SL['name'],
  'legalName' => $SL['legal_name'],
  'alternateName' => 'Star Labs',
  'url'   => $SL['base_url'] . '/',
  'logo'  => array('@type' => 'ImageObject', 'url' => $SL['base_url'] . $SL['logo']),
  'image' => $og_image,
  'description' => 'Star Laboratories (Pvt) Ltd is a WHO-GMP certified and DRAP licensed pharmaceutical manufacturer producing human and veterinary healthcare products in Lahore, Pakistan since 1960.',
  'foundingDate' => $SL['founded'],
  'slogan' => 'Cure, Care, Connect!',
  'telephone' => array($SL['phone'], $SL['phone_alt']),
  'email' => $SL['email'],
  'award' => array(
    'PPMA PESA Top Exporter Award 2023',
    'PPMA PESA Top Exporter Award 2024'
  ),
  'hasCredential' => array(
    array('@type' => 'EducationalOccupationalCredential', 'name' => 'WHO-GMP Certification'),
    array('@type' => 'EducationalOccupationalCredential', 'name' => 'DRAP Manufacturing License'),
    array('@type' => 'EducationalOccupationalCredential', 'name' => 'ISO 9001:2015'),
    array('@type' => 'EducationalOccupationalCredential', 'name' => 'ISO 14001:2015'),
    array('@type' => 'EducationalOccupationalCredential', 'name' => 'ISO 45001:2018'),
  ),
  'address' => array(
    '@type' => 'PostalAddress',
    'streetAddress' => $SL['street'],
    'addressLocality' => $SL['city'],
    'addressRegion' => $SL['region'],
    'postalCode' => $SL['postal'],
    'addressCountry' => $SL['country'],
  ),
  'geo' => array('@type' => 'GeoCoordinates', 'latitude' => $SL['geo_lat'], 'longitude' => $SL['geo_lng']),
  'areaServed' => array(
    array('@type' => 'Country', 'name' => 'Pakistan'),
    array('@type' => 'Place', 'name' => 'Asia, Africa & the Middle East'),
  ),
  'contactPoint' => array(
    array('@type' => 'ContactPoint', 'telephone' => $SL['phone'], 'contactType' => 'customer service', 'areaServed' => 'PK', 'availableLanguage' => array('English', 'Urdu')),
    array('@type' => 'ContactPoint', 'telephone' => $SL['phone_alt'], 'contactType' => 'sales', 'availableLanguage' => array('English', 'Urdu')),
  ),
  'sameAs' => array($SL['facebook'], $SL['twitter'], $SL['instagram'], $SL['linkedin']),
  'knowsAbout' => array('Pharmaceutical Manufacturing', 'Human Medicine', 'Veterinary Medicine', 'WHO-GMP', 'Drug Formulation', 'Pharmaceutical Exports'),
);

/* WebSite (no SearchAction: this is a static catalogue with no server-side
 * search endpoint, and robots.txt disallows query-string URLs) */
$graph[] = array(
  '@type' => 'WebSite',
  '@id'   => $SL['base_url'] . '/#website',
  'url'   => $SL['base_url'] . '/',
  'name'  => 'Star Laboratories (Pvt) Ltd',
  'publisher' => array('@id' => $SL['base_url'] . '/#organization'),
  'inLanguage' => 'en',
);

/* BreadcrumbList */
$bcItems = array();
foreach ($crumbs as $i => $c) {
  $bcItems[] = array('@type' => 'ListItem', 'position' => $i + 1, 'name' => $c['name'], 'item' => $c['url']);
}
$graph[] = array('@type' => 'BreadcrumbList', '@id' => $canonical . '#breadcrumb', 'itemListElement' => $bcItems);

/* WebPage node — MedicalWebPage for drug/product pages (YMYL) */
$webpage = array(
  '@type' => $is_product ? array('MedicalWebPage', 'WebPage')
             : (($page_type && $page_type !== 'website' && $page_type !== 'product') ? $page_type : 'WebPage'),
  '@id'   => $canonical . '#webpage',
  'url'   => $canonical,
  'name'  => $meta_title,
  'description' => $meta_desc,
  'isPartOf' => array('@id' => $SL['base_url'] . '/#website'),
  'about' => array('@id' => $SL['base_url'] . '/#organization'),
  'breadcrumb' => array('@id' => $canonical . '#breadcrumb'),
  'inLanguage' => 'en',
);
if ($product_has_image) {
  $webpage['primaryImageOfPage'] = array('@type' => 'ImageObject', 'url' => $product_img_url);
}
$sl_mtime = $script_fs ? @filemtime($script_fs) : false;
if ($sl_mtime) { $webpage['dateModified'] = date('Y-m-d', $sl_mtime); }
if ($is_product) {
  $webpage['medicalAudience'] = array(
    array('@type' => 'MedicalAudience', 'audienceType' => 'Patient'),
    array('@type' => 'MedicalAudience', 'audienceType' => 'Clinician'),
  );
  if ($sl_mtime) { $webpage['lastReviewed'] = date('Y-m-d', $sl_mtime); }
}
$graph[] = $webpage;

/* Drug + Product schema (Drug leads: no offers/reviews needed; Product kept for
 * entity context only). Image emitted only when the file truly exists. */
if ($is_product) {
  $drug = array(
    '@type' => array('Drug', 'Product'),
    '@id'   => $canonical . '#product',
    'name'  => $product['name'],
    'description' => $meta_desc,
    'url'   => $canonical,
    'category' => $product['segment'] . ' / ' . $product['form'],
    'proprietaryName' => $product['name'],
    'brand' => array('@type' => 'Brand', 'name' => 'Star Laboratories'),
    'manufacturer' => array('@id' => $SL['base_url'] . '/#organization'),
    'dosageForm' => $product['form'],
    'isProprietary' => true,
    'isAvailableGenerically' => true,
  );
  if ($product_has_image) {
    $drug['image'] = array('@type' => 'ImageObject', 'url' => $product_img_url);
  }
  if (!empty($product['active'])) {
    $drug['activeIngredient']   = $product['active'];
    $drug['nonProprietaryName'] = $product['active'];
  }
  if (!empty($product['route']))       { $drug['administrationRoute'] = $product['route']; }
  if (!empty($product['drug_class']))  { $drug['drugClass'] = $product['drug_class']; }
  if (!empty($product['prescription'])) {
    $drug['prescriptionStatus'] = ($product['prescription'] === 'otc') ? 'OTC' : 'PrescriptionOnly';
  }
  $sl_indic = !empty($product['uses']) ? $product['uses'] : trim($product['desc']);
  if ($sl_indic !== '') {
    $drug['indication'] = array('@type' => 'MedicalIndication', 'name' => $sl_indic);
  }
  $graph[] = $drug;
}

/* ItemList for category / collection pages (catalogue structure for AI + Google) */
if ($page_type === 'CollectionPage') {
  @include_once(__DIR__ . '/products-data.php');
  if (isset($STARLABS_PRODUCTS)) {
    $sl_items = array(); $sl_pos = 0;
    foreach ($STARLABS_PRODUCTS as $sl_k => $sl_pr) {
      if ($rel_dir === 'products' || strpos($sl_k, $rel_dir . '/') === 0) {
        $sl_pos++;
        $sl_items[] = array('@type' => 'ListItem', 'position' => $sl_pos,
          'name' => $sl_pr['name'], 'url' => $SL['base_url'] . '/' . sl_url_path($sl_k) . '/');
        if ($sl_pos >= 100) { break; }
      }
    }
    if (count($sl_items)) {
      $graph[] = array('@type' => 'ItemList', '@id' => $canonical . '#itemlist',
        'name' => $meta_title, 'numberOfItems' => $sl_pos, 'itemListElement' => $sl_items);
    }
  }
}

/* ContactPage extras */
if ($rel_dir === 'contact') {
  $graph[] = array(
    '@type' => 'FAQPage',
    '@id'   => $canonical . '#faq',
    'mainEntity' => array(
      array('@type' => 'Question', 'name' => 'Where is Star Laboratories located?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'Star Laboratories (Pvt) Ltd is located at 23 K.M. Multan Road, Lahore 53800, Punjab, Pakistan.')),
      array('@type' => 'Question', 'name' => 'How can I contact Star Laboratories?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'You can reach Star Laboratories by phone at +92-42-37511331 or +92-309-2554000, or by email at starlabshr@starlabs.com.pk.')),
      array('@type' => 'Question', 'name' => 'Does Star Laboratories export pharmaceuticals?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'Yes. Star Laboratories exports WHO-GMP certified human and veterinary pharmaceutical products to more than 30 countries across Asia, Africa and the Middle East.')),
    ),
  );
}

/* Home page FAQ for AEO / rich results */
if ($rel_dir === '') {
  $graph[] = array(
    '@type' => 'FAQPage',
    '@id'   => $canonical . '#faq',
    'mainEntity' => array(
      array('@type' => 'Question', 'name' => 'What does Star Laboratories manufacture?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'Star Laboratories (Pvt) Ltd manufactures a broad range of human and veterinary pharmaceutical products, including injectables, tablets, capsules, syrups, suspensions, powders, drenches, boluses and topical formulations.')),
      array('@type' => 'Question', 'name' => 'Is Star Laboratories WHO-GMP certified?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'Yes. Star Laboratories operates WHO-GMP compliant manufacturing facilities in Lahore, Pakistan, with rigorous quality control and quality assurance systems.')),
      array('@type' => 'Question', 'name' => 'When was Star Laboratories founded?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'Star Laboratories was founded in 1962 and has more than 60 years of experience in pharmaceutical manufacturing.')),
      array('@type' => 'Question', 'name' => 'Which countries does Star Laboratories export to?',
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => 'Star Laboratories exports its human and veterinary medicines to over 30 countries across Asia, Africa and the Middle East.')),
    ),
  );
}

/* Per-product FAQ (AEO). Mirrors the visible FAQ rendered by product-body.php. */
if ($is_product) {
  $pf_uses = !empty($product['uses']) ? $product['uses'] : trim($product['desc']);
  $faqs = array();
  if ($pf_uses !== '') {
    $faqs[] = array('@type' => 'Question', 'name' => 'What is ' . $product['name'] . ' used for?',
      'acceptedAnswer' => array('@type' => 'Answer',
        'text' => $product['name'] . ' ' . rtrim($pf_uses, '.') . '. Always use strictly as directed by a registered physician or qualified veterinarian.'));
  }
  if (!empty($product['active'])) {
    $faqs[] = array('@type' => 'Question', 'name' => 'What is the composition of ' . $product['name'] . '?',
      'acceptedAnswer' => array('@type' => 'Answer',
        'text' => $product['name'] . ' contains ' . $product['active'] . '. It is manufactured by Star Laboratories (Pvt) Ltd, Lahore, Pakistan.'));
  }
  $faqs[] = array('@type' => 'Question', 'name' => 'Who manufactures ' . $product['name'] . '?',
    'acceptedAnswer' => array('@type' => 'Answer',
      'text' => $product['name'] . ' is manufactured by Star Laboratories (Pvt) Ltd, a WHO-GMP certified human and veterinary pharmaceutical manufacturer in Lahore, Pakistan, established in 1962.'));
  $graph[] = array('@type' => 'FAQPage', '@id' => $canonical . '#faq', 'mainEntity' => $faqs);
}

echo json_encode(array('@context' => 'https://schema.org', '@graph' => $graph),
                 JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
</script>
<!-- =================== END JSON-LD STRUCTURED DATA ====================== -->
<!-- Graceful fallback for any missing image: show the brand logo instead of a broken icon -->
<script>
(function () {
    var FALLBACK = '<?php echo $prefix; ?>img/logo/logo.png';
    function fix(img) {
        if (img.dataset.slFallback) { return; }
        img.dataset.slFallback = '1';
        img.src = FALLBACK;
        img.style.objectFit = 'contain';
        img.style.opacity = '0.55';
    }
    function scan() {
        var imgs = document.getElementsByTagName('img');
        for (var i = 0; i < imgs.length; i++) {
            var img = imgs[i];
            img.addEventListener('error', function () { fix(this); });
            if (img.complete && img.naturalWidth === 0 && img.getAttribute('src')) { fix(img); }
        }
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', scan);
    } else { scan(); }
    window.addEventListener('load', scan);
})();
</script>
