<?php
/**
 * ============================================================================
 * Star Laboratories — Shared Catalogue Helpers
 * ----------------------------------------------------------------------------
 * Single source of truth for rendering product cards / grids / related blocks
 * and for resolving product images (real photo -> branded placeholder ->
 * default), used by the listing pages, subcategory hubs and include/related.php.
 *
 * Internal links are ROOT-RELATIVE (/products/...) so they work from any page
 * depth (production is served at the domain root).
 * ============================================================================
 */
if (defined('SL_CATALOG_LOADED')) { return; }
define('SL_CATALOG_LOADED', true);

if (!defined('SL_ROOT')) { define('SL_ROOT', str_replace('\\', '/', dirname(__DIR__))); }

require_once __DIR__ . '/products-data.php';   // $STARLABS_PRODUCTS

/* URL-safe path (mirror of seo.php's helper; guarded so either can define it). */
if (!function_exists('sl_url_path')) {
    function sl_url_path($p) {
        if ($p === '') { return ''; }
        $segs = explode('/', $p);
        foreach ($segs as $k => $s) { $segs[$k] = rawurlencode($s); }
        return implode('/', $segs);
    }
}

/* Resolve a product image to a root-relative URL that is GUARANTEED to exist:
 *   1) the real photo if present on disk
 *   2) a generated branded placeholder (img/placeholder/<flatkey>.png)
 *   3) the default branded share image
 */
function sl_img_url($img_rel, $key = '') {
    $img_rel = ltrim((string)$img_rel, '/');
    if ($img_rel !== '' && is_file(SL_ROOT . '/' . $img_rel)) {
        return '/' . sl_url_path($img_rel);
    }
    if ($key !== '') {
        $flat = str_replace('/', '__', preg_replace('#^products/#', '', $key));
        $ph   = 'img/placeholder/' . $flat . '.png';
        if (is_file(SL_ROOT . '/' . $ph)) { return '/' . sl_url_path($ph); }
    }
    return '/img/seo/og-default.jpg';
}

/* Does a real (non-placeholder) photo exist for this product? */
function sl_has_real_img($img_rel) {
    $img_rel = ltrim((string)$img_rel, '/');
    return $img_rel !== '' && is_file(SL_ROOT . '/' . $img_rel);
}

/* Pretty label for a form/segment slug. */
function sl_label($s) {
    $s = ucwords(str_replace('-', ' ', $s));
    return str_replace(array('And', 'Qc'), array('and', 'QC'), $s);
}

/* Descriptive alt text for a product image. */
function sl_img_alt($p) {
    $bits = array($p['name']);
    if (!empty($p['active'])) { $bits[] = $p['active']; }
    $bits[] = $p['segment'] . ' ' . rtrim($p['form'], 's');
    $bits[] = 'by Star Laboratories';
    return implode(' — ', array_filter($bits));
}

/* One product card (root-relative link). */
function sl_product_card($key, $p) {
    $url   = '/' . sl_url_path($key) . '/';
    $img   = sl_img_url(isset($p['img']) ? $p['img'] : '', $key);
    $cat   = $p['segment'] . ' · ' . $p['form'];
    $name  = $p['name'];
    $alt   = sl_img_alt($p);
    $dcat  = strtolower($p['segment'] . '-' . str_replace(' ', '-', $p['form']));
    ob_start(); ?>
<div class="sl-pcard" data-name="<?php echo htmlspecialchars(strtolower($name), ENT_QUOTES); ?>" data-cat="<?php echo htmlspecialchars($dcat, ENT_QUOTES); ?>">
  <a class="sl-pcard__link" href="<?php echo htmlspecialchars($url, ENT_QUOTES); ?>">
    <span class="sl-pcard__imgwrap">
      <img src="<?php echo htmlspecialchars($img, ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($alt, ENT_QUOTES); ?>" loading="lazy" decoding="async" width="220" height="170">
    </span>
    <span class="sl-pcard__title"><?php echo htmlspecialchars($name, ENT_QUOTES); ?></span>
    <span class="sl-pcard__cat"><?php echo htmlspecialchars($cat, ENT_QUOTES); ?></span>
  </a>
</div>
<?php
    return ob_get_clean();
}

/* All products whose key sits under a given path prefix (e.g. products/human,
 * products/veterinary/injectables). '' or 'products' = everything. */
function sl_products_under($prefix) {
    global $STARLABS_PRODUCTS;
    $prefix = trim($prefix, '/');
    $out = array();
    foreach ($STARLABS_PRODUCTS as $k => $p) {
        if ($prefix === '' || $prefix === 'products' || strpos($k, $prefix . '/') === 0) {
            $out[$k] = $p;
        }
    }
    return $out;
}

/* Render a full responsive grid for a set of products. */
function sl_render_grid($products) {
    if (!count($products)) {
        echo '<div class="sl-empty"><i class="fas fa-box-open" aria-hidden="true"></i>No products found in this category.</div>';
        return;
    }
    echo '<div class="sl-grid">';
    foreach ($products as $k => $p) { echo sl_product_card($k, $p); }
    echo '</div>';
}

/* Related products: same segment+form siblings (then same segment), excluding self. */
function sl_related($key, $limit = 8) {
    global $STARLABS_PRODUCTS;
    if (!isset($STARLABS_PRODUCTS[$key])) { return array(); }
    $self = $STARLABS_PRODUCTS[$key];
    $same_form = array(); $same_seg = array();
    foreach ($STARLABS_PRODUCTS as $k => $p) {
        if ($k === $key) { continue; }
        if ($p['segment'] === $self['segment'] && $p['form'] === $self['form']) { $same_form[$k] = $p; }
        elseif ($p['segment'] === $self['segment']) { $same_seg[$k] = $p; }
    }
    $pool = $same_form + $same_seg;
    return array_slice($pool, 0, $limit, true);
}
