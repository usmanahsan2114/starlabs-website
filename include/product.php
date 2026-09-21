<?php
/* ----------------------------------------------------------------------------
 * Star Laboratories — Single Product Enquiry Block
 * Included by every product detail page (depth 4: products/SEG/FORM/NAME/).
 * The product context ($product, $meta_title) is provided by include/seo.php,
 * which runs earlier in the same page <head>.
 * This site is NOT e-commerce: visitors enquire / request a quotation only.
 * -------------------------------------------------------------------------- */
$sl_pname = '';
if (isset($product['name']) && $product['name'] !== '') {
    $sl_pname = $product['name'];
} elseif (isset($meta_title) && $meta_title !== '') {
    $sl_pname = trim(preg_replace('/\s*[—|].*$/u', '', $meta_title));
}
$sl_pname = trim($sl_pname);
$sl_pcat = '';
if (isset($product['segment'], $product['form'])) {
    $sl_pcat = $product['segment'] . ' ' . $product['form'];
}
$sl_label   = $sl_pname !== '' ? $sl_pname : 'this product';
$sl_wa_text = rawurlencode('Hello Star Laboratories, I would like information and a quotation for "'
    . $sl_label . '"' . ($sl_pcat ? ' (' . $sl_pcat . ')' : '')
    . '. Please share availability, pack sizes and pricing.');
$sl_form_url = '../../../../contact/?product=' . rawurlencode($sl_pname)
    . ($sl_pcat ? '&cat=' . rawurlencode($sl_pcat) : '');
$sl_mail_subject = rawurlencode('Quotation Request: ' . $sl_label);
?>
<div class="sl-enquiry">
    <p class="sl-enquiry__note">
        <i class="fas fa-info-circle" aria-hidden="true"></i>
        Available for <strong>inquiry, quotation &amp; export orders</strong>. Choose how you'd like to reach us:
    </p>
    <div class="sl-enquiry__btns">
        <a href="<?php echo $sl_form_url; ?>" class="sl-enquiry__btn sl-enquiry__btn--form">
            <i class="fas fa-file-invoice" aria-hidden="true"></i> Request a Quotation
        </a>
        <a href="https://wa.me/923092554000?text=<?php echo $sl_wa_text; ?>"
           target="_blank" rel="noopener" class="sl-enquiry__btn sl-enquiry__btn--wa">
            <i class="fab fa-whatsapp" aria-hidden="true"></i> Enquire on WhatsApp
        </a>
    </div>
    <p class="sl-enquiry__alt">
        Prefer email? Write to
        <a href="mailto:sales@starlabs.com.pk?subject=<?php echo $sl_mail_subject; ?>">sales@starlabs.com.pk</a>
        &nbsp;&middot;&nbsp; Call <a href="tel:+923092554000">+92&nbsp;309&nbsp;2554000</a>
    </p>
</div>
<style>
    .sl-enquiry { margin: 26px 0 30px; }
    .sl-enquiry__note {
        font-size: 14px; color: #4a5568; background: #fdeaea;
        border-left: 4px solid #db0000; padding: 11px 15px; border-radius: 6px; margin-bottom: 18px;
    }
    .sl-enquiry__note i { color: #db0000; margin-right: 4px; }
    .sl-enquiry__btns { display: flex; flex-wrap: wrap; gap: 12px; }
    .sl-enquiry__btn {
        display: inline-flex; align-items: center; gap: 9px; padding: 13px 26px;
        border-radius: 50px; font-weight: 700; font-size: 15px; text-decoration: none;
        transition: transform .2s ease, box-shadow .2s ease; line-height: 1.2;
    }
    .sl-enquiry__btn:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,.18); }
    .sl-enquiry__btn--form { background: #db0000; color: #fff; }
    .sl-enquiry__btn--wa { background: #25d366; color: #fff; }
    .sl-enquiry__btn i { font-size: 17px; }
    .sl-enquiry__alt { font-size: 13px; color: #647589; margin-top: 15px; }
    .sl-enquiry__alt a { color: #db0000; font-weight: 600; }
    @media (max-width: 575px) {
        .sl-enquiry__btn { width: 100%; justify-content: center; }
    }
    @media (prefers-reduced-motion: reduce) { .sl-enquiry__btn { transition: none; } }
</style>
