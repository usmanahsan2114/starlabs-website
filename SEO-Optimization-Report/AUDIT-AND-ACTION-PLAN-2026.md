# Star Laboratories — Deep SEO / AEO / Technical Audit & Action Plan

**Site:** https://starlabs.com.pk **Date:** 4 June 2026
**Method:** Full filesystem analysis of `c:\xampp\htdocs\starlabs` (534 PHP files, 691 images) + live-site checks + 11-agent parallel audit + Pakistani-pharma competitor research.

---

## 0. The single most important context

**The live site is still the OLD, un-optimized build.** Live `starlabs.com.pk` today serves `lang="zxx"`, `<title>Star Labs Website</title>`, an empty meta description, and **zero** structured data. All the good SEO work already in your local files (`include/seo.php`, JSON-LD, robots.txt, optimized `.htaccess`, llms.txt) **has not been deployed yet**. So: perfecting these local files and deploying them *is* the upgrade. This plan hardens them to best-in-class first.

---

## 1. Critical issues (fix before deploy)

| # | Issue | Evidence | Impact |
|---|---|---|---|
| C1 | **Canonical domain conflict** — local `seo.php`, `sitemap.xml`, `.htaccess` all force **www**, but live serves **non-www** as primary (both return 200, no redirect). | `seo.php:28`, `.htaccess:26-27`, all 1497 sitemap hosts = www | Deploying as-is flips the canonical domain → re-indexing churn |
| C2 | **82% of products are orphans** — only ~95 of 482 products are linked from any crawlable page; the other **~385 are reachable only via the XML sitemap**. | 3 listing pages render 122 cards/95 links total | Google rarely indexes sitemap-only URLs → most of the catalog ranks for nothing |
| C3 | **8 of 9 subcategory pages don't exist** — `/products/human/injectable/`, `/products/veterinary/injectables/` etc. return 403/404. Only `oral-solids` has an index, and it's a rogue placeholder. | filesystem + nav | No category hubs = no topical-authority landing pages |
| C4 | **`/products/human/` and `/products/veterinary/` don't segment** — both show the same ~122-card grid (mostly human). | identical grids | Clicking "Veterinary" shows human products; near-duplicate content |
| C5 | **Thin content at scale** — 95% of product pages < 80 words; 52% < 40 words; composition is often `Amoxicillin…500mg`; **0 pages** have indications/dosage/side-effects/storage. | whole-portfolio scan | Cannot rank for the high-intent long-tail ("<brand> tablet uses Pakistan") |
| C6 | **385 product images missing everywhere** (local + live), masked by a JS logo-swap that does **not** fix `og:image`/Twitter/JSON-LD `image` → crawlers fetch 404s. | 85 of 481 present | Broken social/AI previews; invalid Product/Drug image |
| C7 | **45+ malformed product URLs** — raw spaces (`Neuro Plus 250mg Injection`), parentheses, uppercase, a bare `%` (`sodium-choloride0.9%`), an embedded `/` (`rasomycin-i/m-injection`). | sitemap, `products-data.php`, llms.txt | Invalid in `<loc>`/canonical; URLs may be dropped |
| C8 | **`related.php` is static + dead** — 7 hardcoded vet products with 14 `href="#"` dead links, on all 482 product pages. | `include/related.php` | No real related-product links; wasted internal-linking surface |

---

## 2. High-priority issues

**Technical SEO**
- `SearchAction` JSON-LD target (`/products/?q=`) is **blocked by `robots.txt: Disallow: /*?*`** → remove it (static site, no search endpoint).
- `og:locale=en_US` contradicts the PK market → `en_PK`.
- hreflang is redundant self-reference; for a single-country English site, **drop hreflang** (modern best practice).
- `<meta name="keywords">` is a dead/cargo-cult tag (spam signal to Bing) → **delete**.
- `.htaccess` chains 3 separate 301s → combine into one.
- No visible HTML breadcrumb on the 482 product pages (JSON-LD breadcrumb exists, but no on-page trail / upward link).

**Structured data / AEO**
- `Drug` schema is nearly empty — add `activeIngredient`, `indication`, `administrationRoute`, `dosageForm`, `prescriptionStatus`; type product pages as **`MedicalWebPage`**.
- Add **`ItemList`** to category/collection pages (catalogue structure for AI + Google).
- Server-side image fallback so meta/JSON-LD never reference a 404 image.
- `llms.txt` is too heavy (full catalogue dump) and contains the malformed URLs → slim to a concise index + fix URLs.
- Phone numbers disagree across `seo.php` vs `llms.txt` → reconcile.

**Performance (Core Web Vitals)**
- Full-screen **preloader hides all content until `window.load`** → remove / gate on `DOMContentLoaded`.
- LCP hero is a **JS-applied CSS background** (undiscoverable) at 763 KB–1.45 MB → render as real `<img fetchpriority="high">` + preload + WebP.
- 12 render-blocking CSS (539 KB) + 22 JS files (375 KB, **zero defer**) → defer JS, bundle/trim CSS.
- **Zero WebP** across ~40 MB of images (~25–32 MB recoverable).
- Google Translate loads on 100% of page loads (~300–500 KB) → lazy-load on click.
- Google Maps loads synchronously on every product page (`end4.php`) → load only on contact, async.
- Font Awesome: 5 families, no `font-display`, 12.7 MB `/fonts` with legacy formats → subset to 2 + `font-display:swap`.
- Dead Google-Fonts preconnects; brand fonts (Rubik/Poppins) referenced but never loaded.

**Accessibility / mobile**
- Mobile hamburger button has **no accessible name** → blocks all mobile nav for screen readers.
- Forms are **placeholder-only, no `<label>`** (contact + ~430 product enquiry forms).
- Product tabs have **mismatched `aria-controls`** IDs (~430 pages).
- Header `width:101–105%` + negative margins → horizontal overflow on mobile; meanmenu tap target 20 px (< 44 px).
- Brand red `#db0000` and `#647589` body text fail WCAG AA at small sizes.
- Homepage has **3 `<h1>`** (one per slide); product pages jump h1→h4.

---

## 3. Competitor & keyword findings (organic growth)

- **Selmore** (selmorepharma.com) sets the **veterinary gold standard**: composition, target species, indications, dosage by body weight, **withdrawal periods**, packaging, storage, downloadable docs, BreadcrumbList schema. Star is the **veterinary market leader** yet has the weakest vet pages — biggest strategic gap.
- **Getz** runs a 100+ article health-education engine + research library — topical authority Star completely lacks.
- **Highnoon** has clean therapeutic-category IA + good schema.
- **Aggregators** (oladoc, marham, dawaai, sehat, healthwire) own the `"<brand> tablet uses/side effects/price in Pakistan"` SERPs — **including Star's own brand names**, with thinner content than Star could publish.
- **The winnable play:** Star is the legal manufacturer, so it can rank **#1 for its own brand terms** with no domain-authority fight — *if* each product has a real uses/composition/dosage page. An **Urdu summary block** captures a large under-served vertical.
- **B2B / export** is high commercial value and unclaimed by Star: `contract manufacturing / third-party / toll manufacturing Pakistan`, `WHO-GMP pharma exporter`, per-region export landing pages (Afghanistan, Africa, Middle East, CIS). Competitors (Macter, Don Valley, Winlet) own these with dedicated service pages.
- **AEO/E-E-A-T (YMYL):** off-site **brand entity authority** (Wikidata, Google Business Profile, LinkedIn, consistent NAP, editorial mentions) predicts AI citation ~3× better than backlinks; a named **medical reviewer** + `reviewedBy`/`lastReviewed` is the key trust signal for pharma; answer-first blocks, strict H2→H3, definition blocks, spec tables, and FAQ schema are what AI engines extract. `llms.txt` is low-impact but harmless.

---

## 4. The plan (phased, deploy-ready)

### Phase A — Technical SEO foundation (`seo.php`, `.htaccess`, `robots.txt`, `sitemap.xml`, `llms.txt`)
Standardize on the chosen canonical host; remove SearchAction; `og:locale=en_PK`; drop hreflang + meta keywords; combine `.htaccess` redirects; server-side image fallback; regenerate sitemap (clean, encoded URLs, accurate `lastmod`) optionally as a sitemap index; slim + fix `llms.txt`/`llms-full.txt`; reconcile phone numbers.

### Phase B — Information architecture & internal linking (fixes the 82% orphan problem)
Data-drive all product grids from `products-data.php`; build **9 real subcategory hub pages**; make human/vet pages actually segment; add a **visible breadcrumb** include to all product pages; replace `related.php` with a **dynamic, real-linked** sibling module; add a footer "Products by category" column; fix broken grid links. Target: every product reachable via real `<a>` in ≤3 clicks.

### Phase C — Product content + structured data (the organic-growth engine)
Enrich `products-data.php` with structured, **DRAP-safe** fields (active ingredient, therapeutic class, indication, dosage-form, route, pack sizes, storage); render a rich per-product body via a centralized include (Composition / Uses / Dosage→"as prescribed" / Storage / Pack Sizes / FAQ / disclaimer + Urdu summary); upgrade JSON-LD to `MedicalWebPage` + populated `Drug` + per-product `FAQPage`; add `ItemList` to category pages; descriptive alt text.

### Phase D — Performance / Core Web Vitals
Remove/gate the preloader; hero as real `<img>` + preload + `fetchpriority`; convert images to WebP (`<picture>` + `.htaccess` negotiation); `defer` + bundle JS, drop Modernizr + one carousel; lazy Google Translate + Google Maps; Font Awesome subset + `font-display`; set `width/height`/`aspect-ratio` to kill CLS.

### Phase E — Accessibility / mobile polish
Hamburger accessible name + state; real form `<label>`s (`.sr-only`); fix tab `aria-controls`; header overflow + 44 px tap targets; contrast tokens; heading order (single homepage H1); reduced-motion JS guard; `lang`/`dir` on translate.

### Phase F — New growth pages (drafted, owner to review copy)
B2B service pages (Contract / Third-Party / Toll / Private-Label Manufacturing) + Certifications/Quality page; therapeutic-category landing pages; export country/region landing pages; a Blog/Knowledge-hub structure (incl. Urdu + veterinary/farmer guides).

### Phase G — Verification
Render every page type on a local PHP server; validate JSON-LD (Rich Results), HTML, sitemap; screenshot key pages at **mobile + desktop**; broken-link/image sweep; before/after report.

### Branded image placeholders
For the 385 missing photos, generate clean **branded placeholder images** (product name + form + Star logo) so pages look intentional and `og:image`/schema resolve — fully replaceable when real photos arrive.

---

## 5. What only you (the owner) can provide

1. **385 product photographs** (I'll supply the exact missing-file manifest and use branded placeholders meanwhile).
2. **A medical reviewer name + credentials** (for the "Medically reviewed by…" E-E-A-T signal).
3. **Confirm certifications/license numbers** to publish (WHO-GMP, ISO, DRAP DML) and the **correct phone number(s)**.
4. **Off-site (post-deploy):** claim Google Business Profile, create a Wikidata entity + LinkedIn, submit the sitemap in Google Search Console + Bing.
5. **Review the drafted B2B/export/blog copy** before it goes live.

---

*Implementation tracked in this folder. Original files are backed up before bulk edits.*
