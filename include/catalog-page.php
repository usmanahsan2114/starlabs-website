<?php
/* ----------------------------------------------------------------------------
 * Star Laboratories — Unified Catalogue Page Renderer
 * Server-renders EVERY product under $catalog_scope as a crawlable link
 * (fixes the orphan-pages problem), with a hero, subcategory navigation,
 * client-side search and a "load more" pager. Used by the products landing,
 * human/veterinary pages and all subcategory hubs.
 *
 * Caller sets before include:
 *   $catalog_scope    e.g. ''/'products', 'products/human', 'products/human/injectable'
 *   $catalog_heading  H1 text
 *   $catalog_sub      short eyebrow/kicker (optional)
 *   $catalog_intro    1-2 sentence intro paragraph (optional, good for SEO)
 *   $catalog_hero_img background image URL (optional)
 * -------------------------------------------------------------------------- */
require_once __DIR__ . '/sl-catalog.php';

$scope    = isset($catalog_scope) ? trim($catalog_scope, '/') : '';
$heading  = isset($catalog_heading) ? $catalog_heading : 'Our Products';
$sub      = isset($catalog_sub) ? $catalog_sub : 'Cure, Care, Connect!';
$intro    = isset($catalog_intro) ? $catalog_intro : '';
$hero_img = isset($catalog_hero_img) ? $catalog_hero_img : '/img/banner/products.jpg';

$items = sl_products_under($scope);

/* Build subcategory navigation: distinct immediate children under the scope. */
global $STARLABS_PRODUCTS;
$childmap = array();
$scopeTrimmed = trim($scope, '/');
$scopeSegs = ($scopeTrimmed === '' || $scopeTrimmed === 'products') ? array('products') : explode('/', $scopeTrimmed);
$targetLength = count($scopeSegs) + 1; // immediate child directory level

foreach ($STARLABS_PRODUCTS as $k => $p) {
    if ($scopeTrimmed !== '' && $scopeTrimmed !== 'products' && strpos($k, $scopeTrimmed . '/') !== 0) { continue; }
    $parts = explode('/', $k);
    if (count($parts) > $targetLength) {
        $childPath = implode('/', array_slice($parts, 0, $targetLength));
        if (!isset($childmap[$childPath])) { $childmap[$childPath] = 0; }
        $childmap[$childPath]++;
    }
}
?>
<section class="sl-cat-hero" style="background-image: linear-gradient(rgba(2,0,37,.62), rgba(2,0,37,.62)), url('<?php echo htmlspecialchars($hero_img, ENT_QUOTES); ?>');">
    <div class="container">
        <p class="sl-cat-hero__kicker"><?php echo htmlspecialchars($sub); ?></p>
        <h1 class="sl-cat-hero__title"><?php echo htmlspecialchars($heading); ?></h1>
        <?php if ($intro !== ''): ?>
        <p class="sl-cat-hero__intro"><?php echo htmlspecialchars($intro); ?></p>
        <?php endif; ?>
        <p class="sl-cat-hero__count"><?php echo count($items); ?> products</p>
    </div>
</section>

<section class="sl-shop2">
    <div class="container">
        <?php if (count($childmap)): ?>
        <nav class="sl-subnav" aria-label="Product categories">
            <a class="sl-subnav__chip<?php echo ($scope==='' || $scope==='products')?' is-active':''; ?>" href="/products/">All</a>
            <?php foreach ($childmap as $cpath => $cnt):
                $clabel = sl_label(basename($cpath)); ?>
            <a class="sl-subnav__chip" href="/<?php echo htmlspecialchars($cpath, ENT_QUOTES); ?>/"><?php echo htmlspecialchars($clabel); ?> <span><?php echo $cnt; ?></span></a>
            <?php endforeach; ?>
        </nav>
        <?php endif; ?>

        <div class="sl-shop2__toolbar">
            <div class="sl-shop2__search">
                <i class="fas fa-search" aria-hidden="true"></i>
                <label for="sl-cat-search" class="sr-only">Search products</label>
                <input type="search" id="sl-cat-search" placeholder="Search products by name or molecule&hellip;" autocomplete="off">
            </div>
            <p class="sl-shop2__count" id="sl-cat-count"><?php echo count($items); ?> products</p>
        </div>

        <div class="sl-grid" id="sl-cat-grid">
            <?php foreach ($items as $k => $p) { echo sl_product_card($k, $p); } ?>
        </div>
        <div class="sl-empty" id="sl-cat-empty" style="display:none;">
            <i class="fas fa-box-open" aria-hidden="true"></i>No products match your search.
        </div>
        <div class="text-center">
            <button type="button" class="sl-loadmore" id="sl-cat-loadmore">Load more products</button>
        </div>
    </div>
</section>

<style>
.sl-cat-hero { background-size: cover; background-position: center; color: #fff; padding: 150px 0 70px; text-align: center; }
.sl-cat-hero__kicker { color: #ff6b6b; font-weight: 700; letter-spacing: .5px; margin-bottom: 8px; }
.sl-cat-hero__title { color: #fff; font-size: 42px; font-weight: 800; margin: 0 0 14px; }
.sl-cat-hero__intro { max-width: 760px; margin: 0 auto 12px; font-size: 17px; line-height: 1.7; color: #e8eaf0; }
.sl-cat-hero__count { font-size: 14px; color: #c9ccd6; margin: 0; }
.sl-shop2 { padding: 40px 0 80px; background: #f7f8fa; }
.sl-subnav { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 26px; justify-content: center; }
.sl-subnav__chip { display: inline-flex; align-items: center; gap: 7px; background: #fff; border: 1px solid #e6e8ec;
    border-radius: 50px; padding: 9px 18px; font-size: 14px; font-weight: 600; color: #1a1a2e; text-decoration: none; transition: all .2s ease; }
.sl-subnav__chip span { background: #f0f1f4; color: #647589; border-radius: 20px; padding: 1px 9px; font-size: 12px; font-weight: 700; }
.sl-subnav__chip:hover, .sl-subnav__chip.is-active { background: #db0000; color: #fff; border-color: #db0000; }
.sl-subnav__chip:hover span, .sl-subnav__chip.is-active span { background: rgba(255,255,255,.25); color: #fff; }
.sl-shop2__toolbar { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 14px; margin-bottom: 24px; }
.sl-shop2__search { position: relative; flex: 1; min-width: 260px; max-width: 520px; }
.sl-shop2__search > i { position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: #db0000; }
.sl-shop2__search input { width: 100%; border: 1px solid #e0e3e8; border-radius: 50px; padding: 13px 18px 13px 44px;
    font-size: 15px; outline: none; background: #fff; transition: border-color .2s ease, box-shadow .2s ease; }
.sl-shop2__search input:focus { border-color: #db0000; box-shadow: 0 0 0 3px rgba(219,0,0,.12); }
.sl-shop2__count { margin: 0; font-size: 14px; font-weight: 700; color: #647589; }
.sl-loadmore { margin-top: 36px; border: 1px solid #db0000; background: #fff; color: #db0000; border-radius: 50px;
    padding: 13px 34px; font-size: 15px; font-weight: 700; cursor: pointer; transition: background .2s ease, color .2s ease; }
.sl-loadmore:hover { background: #db0000; color: #fff; }
.sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
@media (max-width: 575px) { .sl-cat-hero { padding: 120px 0 50px; } .sl-cat-hero__title { font-size: 30px; } }
</style>

<script>
(function () {
    var grid = document.getElementById('sl-cat-grid');
    if (!grid) { return; }
    var search = document.getElementById('sl-cat-search');
    var countEl = document.getElementById('sl-cat-count');
    var emptyEl = document.getElementById('sl-cat-empty');
    var moreBtn = document.getElementById('sl-cat-loadmore');
    var cards = Array.prototype.slice.call(grid.querySelectorAll('.sl-pcard'));
    var PER = 24, shown = PER, q = '';

    function matches(card) {
        if (q === '') { return true; }
        var n = (card.getAttribute('data-name') || '') + ' ' + (card.getAttribute('data-cat') || '');
        return n.indexOf(q) !== -1;
    }
    function render() {
        var visible = 0, total = 0;
        cards.forEach(function (c) {
            if (matches(c)) {
                total++;
                if (visible < shown) { c.style.display = ''; visible++; }
                else { c.style.display = 'none'; }
            } else { c.style.display = 'none'; }
        });
        countEl.textContent = total + (total === 1 ? ' product' : ' products');
        emptyEl.style.display = total === 0 ? 'block' : 'none';
        moreBtn.style.display = (visible < total) ? 'inline-block' : 'none';
    }
    if (search) {
        search.addEventListener('input', function () {
            q = this.value.trim().toLowerCase(); shown = PER; render();
        });
    }
    moreBtn.addEventListener('click', function () { shown += PER; render(); });
    render();
})();
</script>
