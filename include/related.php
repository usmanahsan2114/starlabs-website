<?php
/* ----------------------------------------------------------------------------
 * Star Laboratories — Related Products (dynamic)
 * Replaces the old static 7-product carousel (which had 14 dead href="#" links).
 * Pulls genuine same-segment/same-form siblings from products-data.php and
 * renders real, crawlable product links — turning every product page into a hub
 * that interlinks the catalogue. Context ($product, $rel_dir) comes from seo.php.
 * -------------------------------------------------------------------------- */
require_once __DIR__ . '/sl-catalog.php';

$sl_rel_key   = isset($rel_dir) ? $rel_dir : '';
$sl_related   = $sl_rel_key ? sl_related($sl_rel_key, 8) : array();
$sl_seg       = isset($product['segment']) ? $product['segment'] : '';
$sl_seg_slug  = strtolower($sl_seg);
$sl_hub       = $sl_seg_slug ? '/products/' . $sl_seg_slug . '/' : '/products/';

if (count($sl_related)):
?>
<section class="related-product-area sl-related pt-50 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="sl-related__title text-center">Related Products</h2>
                <p class="sl-related__sub text-center">More <?php echo htmlspecialchars(trim($sl_seg . ' ' . (isset($product['form']) ? $product['form'] : ''))); ?> from Star Laboratories</p>
            </div>
        </div>
        <?php sl_render_grid($sl_related); ?>
        <div class="text-center mt-40">
            <a class="sl-related__more" href="<?php echo htmlspecialchars($sl_hub, ENT_QUOTES); ?>">
                View all <?php echo htmlspecialchars($sl_seg); ?> products <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>
