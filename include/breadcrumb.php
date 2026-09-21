<?php
/* ----------------------------------------------------------------------------
 * Star Laboratories — Visible breadcrumb
 * Renders the same trail as the JSON-LD BreadcrumbList in seo.php ($crumbs),
 * giving product pages a visible upward link to their category (UX + the
 * strongest contextual internal link). Root-relative hrefs.
 * -------------------------------------------------------------------------- */
if (empty($crumbs) || count($crumbs) < 2) { return; }
$sl_base = isset($SL['base_url']) ? $SL['base_url'] : '';
?>
<nav class="sl-breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol class="sl-breadcrumb__list">
            <?php foreach ($crumbs as $i => $c):
                $last = ($i === count($crumbs) - 1);
                $path = '/' . ltrim(str_replace($sl_base, '', $c['url']), '/');
            ?>
            <li class="sl-breadcrumb__item"<?php echo $last ? ' aria-current="page"' : ''; ?>>
                <?php if ($last): ?>
                    <span><?php echo htmlspecialchars($c['name']); ?></span>
                <?php else: ?>
                    <a href="<?php echo htmlspecialchars($path, ENT_QUOTES); ?>"><?php echo htmlspecialchars($c['name']); ?></a>
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
