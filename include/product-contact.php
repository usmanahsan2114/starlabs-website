<?php
/* ----------------------------------------------------------------------------
 * Star Laboratories — Product detail "Contact Us" tab
 * A compact, product-aware enquiry panel included by every product page.
 * Product context is provided by include/seo.php (+ include/product.php),
 * which run earlier in the same page scope.
 * This site is NOT e-commerce — enquiry / quotation requests only.
 * -------------------------------------------------------------------------- */
$pc_name = '';
if (isset($sl_pname) && $sl_pname !== '') {
    $pc_name = $sl_pname;
} elseif (isset($product['name']) && $product['name'] !== '') {
    $pc_name = $product['name'];
} elseif (isset($meta_title) && $meta_title !== '') {
    $pc_name = trim(preg_replace('/\s*[—|].*$/u', '', $meta_title));
}
$pc_name = trim($pc_name);
$pc_cat = '';
if (isset($sl_pcat) && $sl_pcat !== '') {
    $pc_cat = $sl_pcat;
} elseif (isset($product['segment'], $product['form'])) {
    $pc_cat = $product['segment'] . ' ' . $product['form'];
}
$pc_label   = $pc_name !== '' ? $pc_name : 'this product';
$pc_wa_text = rawurlencode('Hello Star Laboratories, I would like information and a quotation for "'
    . $pc_label . '"' . ($pc_cat ? ' (' . $pc_cat . ')' : '')
    . '. Please share availability, pack sizes and pricing.');
$pc_mail = rawurlencode('Quotation Request: ' . $pc_label);
?>
<div class="sl-pcontact">
    <div class="sl-pcontact__grid">

        <!-- LEFT — quick enquiry form (pre-filled with this product) -->
        <div class="sl-pcontact__formwrap">
            <h4>Request a Quotation for this Product</h4>
            <p class="sl-pcontact__intro">
                Send your requirement and our team will reply by email with availability,
                pack sizes and pricing. This is an enquiry only &mdash; no payment is taken online.
            </p>
            <form id="sl-product-enquiry-form" action="/include/send-enquiry.php" method="post" novalidate>
                <input type="hidden" name="product" value="<?php echo htmlspecialchars($pc_name, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="subject" value="<?php echo htmlspecialchars('Quotation Request: ' . $pc_label, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="sl-hp" aria-hidden="true">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>
                <?php if ($pc_name !== ''): ?>
                <p class="sl-pcontact__tag">
                    <i class="fas fa-file-invoice" aria-hidden="true"></i>
                    Enquiry about: <strong><?php echo htmlspecialchars($pc_name, ENT_QUOTES, 'UTF-8'); ?></strong>
                </p>
                <?php endif; ?>
                <div class="sl-pcontact__row">
                    <input type="text" name="name" placeholder="Your Name *" aria-label="Your name" required>
                    <input type="email" name="email" placeholder="Your Email *" aria-label="Your email address" required>
                </div>
                <div class="sl-pcontact__row">
                    <input type="text" name="phone" placeholder="Phone / WhatsApp" aria-label="Phone or WhatsApp number">
                    <input type="text" name="country" placeholder="Your Country" aria-label="Your country">
                </div>
                <textarea name="message" rows="4" aria-label="Quantity, pack size required and any other details"
                    placeholder="Quantity / pack size required and any other details *" required></textarea>
                <button type="submit" class="sl-pcontact__submit">
                    <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Enquiry
                </button>
                <p class="sl-pcontact__feedback" id="sl-pcontact-feedback" role="status" aria-live="polite"></p>
            </form>
        </div>

        <!-- RIGHT — direct contact options -->
        <div class="sl-pcontact__side">
            <h4>Prefer to reach us directly?</h4>
            <a class="sl-pcontact__action sl-pcontact__action--wa"
               href="https://wa.me/923092554000?text=<?php echo $pc_wa_text; ?>"
               target="_blank" rel="noopener">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                <span>WhatsApp Enquiry<small>+92 309 2554000</small></span>
            </a>
            <a class="sl-pcontact__action" href="tel:+923092554000">
                <i class="fas fa-phone" aria-hidden="true"></i>
                <span>Call Sales<small>+92 309 2554000</small></span>
            </a>
            <a class="sl-pcontact__action" href="mailto:sales@starlabs.com.pk?subject=<?php echo $pc_mail; ?>">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <span>Email Sales<small>sales@starlabs.com.pk</small></span>
            </a>
            <div class="sl-pcontact__info">
                <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    23 K.M. Multan Road, Lahore 53800, Pakistan</p>
                <p><i class="far fa-clock" aria-hidden="true"></i>
                    Monday &ndash; Saturday, 08:00 am &ndash; 5:00 pm</p>
            </div>
        </div>

    </div>
</div>

<style>
    .sl-pcontact { font-size: 15px; }
    .sl-pcontact__grid {
        display: grid;
        grid-template-columns: 1.4fr 1fr;
        gap: 30px;
    }
    .sl-pcontact h4 {
        font-size: 19px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 8px;
    }
    .sl-pcontact__intro {
        font-size: 14px;
        color: #647589;
        line-height: 1.7;
        margin-bottom: 18px;
    }
    .sl-pcontact__tag {
        background: #fdeaea;
        border-left: 3px solid #db0000;
        border-radius: 6px;
        padding: 9px 13px;
        font-size: 13px;
        color: #1a1a2e;
        margin-bottom: 16px;
    }
    .sl-pcontact__tag i { color: #db0000; margin-right: 5px; }
    .sl-pcontact__tag strong { color: #db0000; }
    .sl-pcontact__row {
        display: flex;
        gap: 12px;
        margin-bottom: 12px;
    }
    .sl-pcontact__row > * { flex: 1; }
    .sl-pcontact input,
    .sl-pcontact textarea {
        width: 100%;
        border: 1px solid #e0e3e8;
        border-radius: 8px;
        padding: 11px 14px;
        font-size: 14px;
        outline: none;
        font-family: inherit;
        transition: border-color .2s ease, box-shadow .2s ease;
    }
    .sl-pcontact textarea { margin-bottom: 14px; resize: vertical; }
    .sl-pcontact input:focus,
    .sl-pcontact textarea:focus {
        border-color: #db0000;
        box-shadow: 0 0 0 3px rgba(219, 0, 0, .12);
    }
    .sl-pcontact .sl-hp {
        position: absolute;
        left: -9999px;
        width: 1px;
        height: 1px;
        overflow: hidden;
    }
    .sl-pcontact__submit {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        background: #db0000;
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 13px 30px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: background .2s ease, transform .2s ease;
    }
    .sl-pcontact__submit:hover { background: #b00000; transform: translateY(-2px); }
    .sl-pcontact__submit:disabled { opacity: .6; cursor: not-allowed; transform: none; }
    .sl-pcontact__feedback {
        margin: 14px 0 0;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.6;
    }
    .sl-pcontact__feedback.is-ok  { color: #1a7f37; }
    .sl-pcontact__feedback.is-err { color: #db0000; }

    .sl-pcontact__side h4 { margin-bottom: 14px; }
    .sl-pcontact__action {
        display: flex;
        align-items: center;
        gap: 13px;
        background: #f7f8fa;
        border: 1px solid #eceef1;
        border-radius: 12px;
        padding: 13px 16px;
        margin-bottom: 11px;
        text-decoration: none;
        color: #1a1a2e;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }
    .sl-pcontact__action:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, .1);
        border-color: #db0000;
        color: #1a1a2e;
    }
    .sl-pcontact__action i {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #db0000;
        color: #fff;
        font-size: 17px;
        flex-shrink: 0;
    }
    .sl-pcontact__action--wa i { background: #25d366; }
    .sl-pcontact__action span {
        display: flex;
        flex-direction: column;
        font-weight: 700;
        font-size: 14px;
        line-height: 1.3;
    }
    .sl-pcontact__action span small {
        font-weight: 500;
        font-size: 12px;
        color: #647589;
    }
    .sl-pcontact__info {
        margin-top: 16px;
        padding-top: 16px;
        border-top: 1px solid #eceef1;
    }
    .sl-pcontact__info p {
        font-size: 13px;
        color: #647589;
        line-height: 1.6;
        margin-bottom: 8px;
    }
    .sl-pcontact__info i { color: #db0000; margin-right: 7px; }

    @media (max-width: 767px) {
        .sl-pcontact__grid { grid-template-columns: 1fr; gap: 26px; }
        .sl-pcontact__row { flex-direction: column; gap: 12px; }
    }
    @media (prefers-reduced-motion: reduce) {
        .sl-pcontact__submit, .sl-pcontact__action { transition: none; }
    }
</style>

<script>
    (function () {
        var form = document.getElementById('sl-product-enquiry-form');
        if (!form) { return; }
        var feedback = document.getElementById('sl-pcontact-feedback');
        var btn = form.querySelector('.sl-pcontact__submit');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            // basic client-side validation
            var name = form.name.value.trim();
            var email = form.email.value.trim();
            var message = form.message.value.trim();
            if (!name || !email || !message) {
                feedback.textContent = 'Please fill in your name, email and message.';
                feedback.className = 'sl-pcontact__feedback is-err';
                return;
            }
            feedback.textContent = 'Sending your enquiry...';
            feedback.className = 'sl-pcontact__feedback';
            btn.disabled = true;

            fetch(form.getAttribute('action'), { method: 'POST', body: new FormData(form) })
                .then(function (r) {
                    return r.text().then(function (t) { return { ok: r.ok, text: t }; });
                })
                .then(function (res) {
                    feedback.textContent = res.text || (res.ok
                        ? 'Thank you! Your enquiry has been sent.'
                        : 'Something went wrong. Please try WhatsApp or email.');
                    feedback.className = 'sl-pcontact__feedback ' + (res.ok ? 'is-ok' : 'is-err');
                    if (res.ok) { form.reset(); }
                    btn.disabled = false;
                })
                .catch(function () {
                    feedback.textContent = 'Could not send right now. Please use WhatsApp or email sales@starlabs.com.pk directly.';
                    feedback.className = 'sl-pcontact__feedback is-err';
                    btn.disabled = false;
                });
        });
    })();
</script>
