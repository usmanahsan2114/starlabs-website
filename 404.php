<?php
/* Slug recovery: 301 legacy malformed/renamed product URLs (spaces, uppercase,
 * parentheses, %) to their clean slug before showing the 404 page. */
(function () {
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $path = urldecode((string)parse_url($uri, PHP_URL_PATH));
    $req = trim($path, '/');
    if ($req === '' || strpos($req, 'products/') !== 0) return;
    $segs = explode('/', $req);
    foreach ($segs as $i => $s) {
        $s = strtolower($s);
        $s = str_replace(array('%','(',')','.',"'"), array('','','','-',''), $s);
        $s = preg_replace('/[^a-z0-9]+/', '-', $s);
        $s = preg_replace('/-+/', '-', $s);
        $segs[$i] = trim($s, '-');
    }
    $clean = implode('/', $segs);
    if ($clean === $req) return;                       // already clean → genuine 404
    require_once __DIR__ . '/include/products-data.php';
    if ((isset($STARLABS_PRODUCTS) && isset($STARLABS_PRODUCTS[$clean])) || is_dir(__DIR__ . '/' . $clean)) {
        header('Location: /' . $clean . '/', true, 301);
        exit;
    }
})();
http_response_code(404);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include_once('include/seo.php'); ?>
    <?php include_once('include/head.php'); ?>
    <meta name="robots" content="noindex, follow">
</head>

<body>
<?php include_once('include/loader.php'); ?>
    <!-- header begin -->
    <?php include_once('include/header.php'); ?>
    <!-- header end -->

    <main id="main-content">
        <section class="pt-150 pb-150" style="text-align:center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <h1 style="font-size:120px; color:#db0000; margin-bottom:0; line-height:1;">404</h1>
                        <h2 style="color:#020025; margin-bottom:20px;">Page Not Found</h2>
                        <p style="margin-bottom:30px;">The page you are looking for may have been moved, renamed,
                            or is temporarily unavailable. Let's get you back on track.</p>
                        <div class="hero-slider-btn">
                            <a href="./" class="btn btn-icon ml-0"><span>+</span>Back to Home</a>
                            <a href="products/" class="btn btn-icon ml-0"><span>+</span>Browse Products</a>
                            <a href="contact/" class="btn btn-icon ml-0"><span>+</span>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer begin -->
    <?php include_once('include/footer.php'); ?>
    <!-- footer end -->

    <?php include_once('include/end.php'); ?>
</body>

</html>
