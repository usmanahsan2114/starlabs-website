<?php
/* Generate <path>.webp siblings for every JPG/PNG under img/ (append convention).
 * .htaccess serves them automatically when the browser sends Accept: image/webp. */
$root = "C:/xampp/htdocs/starlabs/img";
$q = 82;
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS));
$made = 0; $skip = 0; $fail = 0; $bytesOrig = 0; $bytesWebp = 0;
foreach ($it as $f) {
    $path = $f->getPathname();
    if (!preg_match('/\.(jpe?g|png)$/i', $path)) continue;
    $webp = $path . '.webp';
    if (is_file($webp)) { $skip++; continue; }
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $im = ($ext === 'png') ? @imagecreatefrompng($path) : @imagecreatefromjpeg($path);
    if (!$im) { $fail++; continue; }
    if ($ext === 'png') { imagepalettetotruecolor($im); imagealphablending($im, true); imagesavealpha($im, true); }
    if (@imagewebp($im, $webp, $q)) {
        $made++;
        $bytesOrig += filesize($path);
        $bytesWebp += filesize($webp);
        // if webp ended up larger than source, drop it (rare for already-small PNGs)
        if (filesize($webp) >= filesize($path)) { @unlink($webp); $made--; }
    } else { $fail++; }
    imagedestroy($im);
}
echo "WebP created: $made | skipped(existing): $skip | failed: $fail\n";
if ($bytesOrig > 0) {
    printf("Converted source bytes: %.1f MB -> WebP %.1f MB  (saved %.0f%%)\n",
        $bytesOrig/1048576, $bytesWebp/1048576, 100*(1-$bytesWebp/$bytesOrig));
}
