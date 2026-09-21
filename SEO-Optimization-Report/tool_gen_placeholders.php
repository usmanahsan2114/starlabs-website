<?php
/* Generate branded placeholder images for products without a real photo,
 * plus the default 1200x630 OG share image. */
$root = "C:/xampp/htdocs/starlabs";
require $root . "/include/products-data.php";
$FONT  = "C:/Windows/Fonts/arial.ttf";
$FONTB = "C:/Windows/Fonts/arialbd.ttf";
@mkdir($root . "/img/placeholder", 0755, true);
@mkdir($root . "/img/seo", 0755, true);

function wrap_lines($text, $size, $font, $maxw) {
    $words = explode(' ', $text); $lines = array(); $cur = '';
    foreach ($words as $w) {
        $try = $cur === '' ? $w : $cur . ' ' . $w;
        $bb = imagettfbbox($size, 0, $font, $try);
        if (($bb[2] - $bb[0]) > $maxw && $cur !== '') { $lines[] = $cur; $cur = $w; }
        else { $cur = $try; }
    }
    if ($cur !== '') { $lines[] = $cur; }
    return $lines;
}
function centertext($im, $size, $y, $font, $color, $text, $W) {
    $bb = imagettfbbox($size, 0, $font, $text);
    $x = (int)(($W - ($bb[2] - $bb[0])) / 2);
    imagettftext($im, $size, 0, $x, $y, $color, $font, $text);
}

/* ---- per-product placeholders ---- */
$logo = @imagecreatefrompng($root . "/img/logo/logo.png");
$count = 0;
foreach ($STARLABS_PRODUCTS as $key => $p) {
    $img = ltrim(isset($p['img']) ? $p['img'] : '', '/');
    if ($img !== '' && is_file($root . "/" . $img)) { continue; } // has real photo

    $W = 600; $H = 450;
    $im = imagecreatetruecolor($W, $H);
    $white = imagecolorallocate($im, 255, 255, 255);
    $bg    = imagecolorallocate($im, 247, 248, 250);
    $red   = imagecolorallocate($im, 219, 0, 0);
    $dark  = imagecolorallocate($im, 26, 26, 46);
    $gray  = imagecolorallocate($im, 120, 130, 145);
    $line  = imagecolorallocate($im, 232, 234, 238);
    imagefilledrectangle($im, 0, 0, $W, $H, $white);
    imagefilledrectangle($im, 0, 0, $W, 8, $red);                 // top accent
    imagefilledrectangle($im, 24, 24, $W-24, $H-24, $bg);         // inner panel
    imagerectangle($im, 24, 24, $W-24, $H-24, $line);

    // logo (contain to 180 wide)
    if ($logo) {
        $lw = imagesx($logo); $lh = imagesy($logo);
        $tw = 180; $th = (int)($lh * ($tw / $lw));
        imagecopyresampled($im, $logo, (int)(($W-$tw)/2), 70, 0, 0, $tw, $th, $lw, $lh);
    }

    // product name (wrapped, bold)
    $name = $p['name'];
    $lines = wrap_lines($name, 24, $FONTB, $W - 120);
    $lines = array_slice($lines, 0, 3);
    $y = 210;
    foreach ($lines as $ln) { centertext($im, 24, $y, $FONTB, $dark, $ln, $W); $y += 34; }

    // segment . form
    $cat = strtoupper($p['segment'] . '  ·  ' . $p['form']);
    $cat = $p['segment'] . '  -  ' . $p['form'];
    centertext($im, 13, $y + 14, $FONT, $red, strtoupper($cat), $W);

    // footer note
    centertext($im, 12, $H - 50, $FONT, $gray, 'Star Laboratories (Pvt) Ltd', $W);

    $flat = str_replace('/', '__', preg_replace('#^products/#', '', $key));
    imagepng($im, $root . "/img/placeholder/" . $flat . ".png", 8);
    imagedestroy($im);
    $count++;
}
echo "Generated $count product placeholders\n";

/* ---- default OG share image (1200x630) ---- */
$W = 1200; $H = 630;
$im = imagecreatetruecolor($W, $H);
$navy = imagecolorallocate($im, 12, 12, 38);
$red  = imagecolorallocate($im, 219, 0, 0);
$white= imagecolorallocate($im, 255, 255, 255);
$soft = imagecolorallocate($im, 200, 205, 220);
imagefilledrectangle($im, 0, 0, $W, $H, $navy);
imagefilledrectangle($im, 0, 0, 14, $H, $red);
imagefilledrectangle($im, 0, $H-14, $W, $H, $red);
$logo2 = @imagecreatefrompng($root . "/img/logo/white-logo.png");
if ($logo2) {
    $lw=imagesx($logo2);$lh=imagesy($logo2);$tw=320;$th=(int)($lh*($tw/$lw));
    imagecopyresampled($im,$logo2,(int)(($W-$tw)/2),90,0,0,$tw,$th,$lw,$lh);
}
centertext($im, 46, 320, $FONTB, $white, 'Star Laboratories (Pvt) Ltd', $W);
centertext($im, 24, 380, $FONT, $soft, 'Human & Veterinary Pharmaceutical Manufacturer', $W);
centertext($im, 22, 430, $FONT, $red, 'Cure, Care, Connect!', $W);
centertext($im, 18, 500, $FONT, $soft, 'WHO-GMP certified  -  Lahore, Pakistan  -  Exporting to 30+ countries since 1962', $W);
imagejpeg($im, $root . "/img/seo/og-default.jpg", 88);
imagedestroy($im);
echo "Generated default OG image (1200x630)\n";
