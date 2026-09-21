<?php
/* ----------------------------------------------------------------------------
 * Star Laboratories — Rich Product Body (data-driven, DRAP-safe)
 * Replaces the old thin tab block. Renders a proper H2/H3 outline that search
 * and AI engines can extract: Composition, Uses & Class, Dosage, Storage, Pack
 * Sizes, FAQ, disclaimer + enquiry. Context ($product, $rel_dir, $SL) from seo.php.
 * The visible FAQ here mirrors the FAQPage JSON-LD emitted by seo.php.
 * -------------------------------------------------------------------------- */
require_once __DIR__ . '/sl-catalog.php';

$p          = isset($product) && is_array($product) ? $product : array();
$pname      = isset($p['name']) ? $p['name'] : 'This product';
$seg        = isset($p['segment']) ? $p['segment'] : '';
$form       = isset($p['form']) ? $p['form'] : '';
$active     = isset($p['active']) ? trim($p['active']) : '';
$compos     = isset($p['composition']) ? trim($p['composition']) : '';
$dclass     = isset($p['drug_class']) ? trim($p['drug_class']) : '';
$uses       = isset($p['uses']) ? trim($p['uses']) : trim(isset($p['desc']) ? $p['desc'] : '');
$route      = isset($p['route']) ? trim($p['route']) : '';
$rx         = isset($p['prescription']) ? $p['prescription'] : 'rx';
$packs      = array();
if (!empty($p['packs'])) { $packs = array_filter(array_map('trim', explode('|', $p['packs']))); }

$is_vet     = (strtolower($seg) === 'veterinary');
$prescriber = $is_vet ? 'qualified veterinarian' : 'registered physician';
$patient    = $is_vet ? 'animal' : 'patient';

/* Storage text by dosage form */
$fl = strtolower($form);
if (strpos($fl, 'inject') !== false || strpos($fl, 'infus') !== false) {
    $storage = 'Store below 30&deg;C, protected from light. Do not freeze. Keep out of the reach of children. Use immediately after opening / reconstitution.';
} elseif (strpos($fl, 'liquid') !== false || strpos($fl, 'syrup') !== false || strpos($fl, 'suspension') !== false || strpos($fl, 'drench') !== false || strpos($fl, 'solution') !== false) {
    $storage = 'Store below 30&deg;C in a dry place, protected from light. Shake well before use. Keep the bottle tightly closed and out of the reach of children.';
} else {
    $storage = 'Store below 30&deg;C in a dry place, protected from light and moisture. Keep out of the reach of children.';
}
?>
<section class="sl-pbody" aria-label="Product information">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <?php if ($active !== '' || $compos !== ''): ?>
                <div class="sl-pbody__block">
                    <h2>Composition</h2>
                    <p><?php echo htmlspecialchars($compos !== '' ? $compos : ('Each unit contains: ' . $active . '.')); ?></p>
                </div>
                <?php endif; ?>

                <div class="sl-pbody__block">
                    <h2>Uses &amp; Therapeutic Class</h2>
                    <?php if ($dclass !== ''): ?>
                    <p><strong><?php echo htmlspecialchars($pname); ?></strong><?php echo $active !== '' ? ' (' . htmlspecialchars($active) . ')' : ''; ?> belongs to the <strong><?php echo htmlspecialchars($dclass); ?></strong> class of medicines, manufactured by Star Laboratories (Pvt) Ltd, Lahore, Pakistan.</p>
                    <?php endif; ?>
                    <?php if ($uses !== ''): ?>
                    <p><?php echo htmlspecialchars($uses); ?></p>
                    <?php endif; ?>
                </div>

                <div class="sl-pbody__block">
                    <h2>Dosage &amp; Administration</h2>
                    <p>The dose, frequency and duration of treatment must be determined by a <?php echo $prescriber; ?> according to the condition and the response of the <?php echo $patient; ?>. Always follow the prescription and the approved package insert.
                    <?php if ($route !== ''): ?> Route of administration: <strong><?php echo htmlspecialchars($route); ?></strong>.<?php endif; ?></p>
                </div>

                <div class="sl-pbody__block">
                    <h2>Storage</h2>
                    <p><?php echo $storage; ?></p>
                </div>

                <?php if (count($packs)): ?>
                <div class="sl-pbody__block">
                    <h2>Pack Sizes</h2>
                    <ul class="sl-packs">
                        <?php foreach ($packs as $pk): ?>
                        <li><?php echo htmlspecialchars($pk); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <div class="sl-pbody__block">
                    <h2>Frequently Asked Questions</h2>
                    <div class="sl-faq">
                        <?php if ($uses !== ''): ?>
                        <div class="sl-faq__item">
                            <h3>What is <?php echo htmlspecialchars($pname); ?> used for?</h3>
                            <p><?php echo htmlspecialchars($pname . ' ' . rtrim($uses, '.') . '.'); ?> Always use strictly as directed by a <?php echo $prescriber; ?>.</p>
                        </div>
                        <?php endif; ?>
                        <?php if ($active !== ''): ?>
                        <div class="sl-faq__item">
                            <h3>What is the composition of <?php echo htmlspecialchars($pname); ?>?</h3>
                            <p><?php echo htmlspecialchars($pname); ?> contains <?php echo htmlspecialchars($active); ?>. It is manufactured by Star Laboratories (Pvt) Ltd, Lahore, Pakistan.</p>
                        </div>
                        <?php endif; ?>
                        <div class="sl-faq__item">
                            <h3>Who manufactures <?php echo htmlspecialchars($pname); ?>?</h3>
                            <p><?php echo htmlspecialchars($pname); ?> is manufactured by Star Laboratories (Pvt) Ltd, a WHO-GMP certified human and veterinary pharmaceutical manufacturer in Lahore, Pakistan, established in 1962.</p>
                        </div>
                    </div>
                </div>

                <p class="sl-pbody__disclaimer">
                    <i class="fas fa-info-circle" aria-hidden="true"></i>
                    <?php echo $rx === 'otc' ? 'Read the label carefully before use.' : 'Prescription medicine.'; ?>
                    This information is provided for general and healthcare-professional reference only and is not a substitute for professional medical advice. Use strictly as directed by a <?php echo $prescriber; ?>.
                </p>
            </div>

            <div class="col-lg-4">
                <div class="sl-pbody__aside">
                    <h2 class="sl-pbody__aside-title">Request Information or a Quotation</h2>
                    <p>Available for inquiry, quotation &amp; export orders. Our team will respond promptly.</p>
                    <?php include __DIR__ . '/product-contact.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>
