<?php
/* ============================================================================
 * Star Laboratories — Contact / Product Enquiry Handler
 * Receives the contact form (POST) and emails it to the sales team.
 * Returns a plain-text message that ajax-form.js shows to the visitor.
 * This site is NOT e-commerce — this handler only sends enquiry / quotation
 * requests by email; it never processes payments or orders.
 * ========================================================================== */

header('Content-Type: text/plain; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo 'Invalid request method.';
    exit;
}

/* Honeypot — bots fill hidden fields; humans never see them */
if (!empty($_POST['website']) || !empty($_POST['company_url'])) {
    echo 'Thank you! Your enquiry has been received.';
    exit;
}

function sl_clean($key) {
    $v = isset($_POST[$key]) ? (string) $_POST[$key] : '';
    $v = strip_tags($v);
    $v = preg_replace('/[\r\n]+/', ' ', $v);   // header-injection guard
    return trim($v);
}

$name    = sl_clean('name');
$email   = sl_clean('email');
$phone   = sl_clean('phone');
$country = sl_clean('country');
$subject = sl_clean('subject');
$product = sl_clean('product');
$message = isset($_POST['message']) ? trim(strip_tags((string) $_POST['message'])) : '';

/* Validation */
$errors = array();
if ($name === '')    { $errors[] = 'your name'; }
if ($email === '')   { $errors[] = 'your email'; }
if ($message === '') { $errors[] = 'a message'; }
if ($errors) {
    http_response_code(422);
    echo 'Please provide ' . implode(', ', $errors) . '.';
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo 'Please enter a valid email address so we can reply to you.';
    exit;
}

/* Compose */
$to      = 'sales@starlabs.com.pk';
$cc      = 'starlabshr@starlabs.com.pk';
$subjectLine = 'Website Enquiry'
    . ($product !== '' ? ' — ' . $product : ($subject !== '' ? ' — ' . $subject : ''));

$body  = "New enquiry submitted from the Star Laboratories website.\n";
$body .= str_repeat('-', 56) . "\n";
if ($product !== '') { $body .= "Product of interest : $product\n"; }
$body .= "Name                : $name\n";
$body .= "Email               : $email\n";
$body .= "Phone               : " . ($phone !== '' ? $phone : '(not provided)') . "\n";
$body .= "Country             : " . ($country !== '' ? $country : '(not provided)') . "\n";
$body .= "Subject             : " . ($subject !== '' ? $subject : '(not provided)') . "\n";
$body .= str_repeat('-', 56) . "\n\n";
$body .= "Message:\n$message\n\n";
$body .= str_repeat('-', 56) . "\n";
$body .= 'Received: ' . date('Y-m-d H:i:s') . "\n";
$body .= 'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";

$fromName = 'Star Laboratories Website';
$fromAddr = 'noreply@starlabs.com.pk';
$headers  = 'From: ' . $fromName . ' <' . $fromAddr . ">\r\n";
$headers .= 'Reply-To: ' . $name . ' <' . $email . ">\r\n";
$headers .= 'Cc: ' . $cc . "\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$sent = @mail($to, $subjectLine, $body, $headers);

if ($sent) {
    echo 'Thank you, ' . $name . '! Your enquiry'
        . ($product !== '' ? ' about "' . $product . '"' : '')
        . ' has been sent to our team. We will get back to you shortly with the details and a quotation.';
} else {
    http_response_code(500);
    echo 'Sorry — we could not send your message automatically right now. '
        . 'Please email us directly at sales@starlabs.com.pk or message us on WhatsApp at +92 309 2554000.';
}
