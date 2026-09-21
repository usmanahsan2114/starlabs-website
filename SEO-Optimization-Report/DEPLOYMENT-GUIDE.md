# Star Laboratories — Deployment Guide & Post-Launch Checklist

**Date:** 4 June 2026 · Read this before copying files to the live server.

---

## 1. What changed (summary)

This pass took the **already-built-but-undeployed** SEO files and hardened them to best-in-class, then fixed the deeper problems the audit found. Headline changes:

- **Canonical domain → non-www** (`https://starlabs.com.pk`) everywhere — matches your live host, so **no migration redirects** and no re-indexing churn.
- **Internal linking fixed:** all **482 products are now server-rendered, crawlable links** (was ~95; 82% were orphaned). Built **9 real subcategory hub pages**, made Human/Veterinary pages actually segment, added **visible breadcrumbs** and a **dynamic Related Products** block to every product page.
- **Product content engine:** every product now has **composition, active ingredient, therapeutic class, DRAP-safe uses, dosage note, storage, pack sizes and an FAQ** — driven from `include/products-data.php`. Was ~30 words/page.
- **Structured data:** `MedicalWebPage` + populated `Drug` (activeIngredient, drugClass, route, prescriptionStatus, indication) + per-product `FAQPage` + `ItemList` on category pages + `MedicalOrganization`.
- **Clean URLs:** 92 product folders with spaces/parentheses/uppercase/`%` renamed to clean slugs; a slug-recovery 301 in `404.php` catches old URLs.
- **Performance:** preloader no longer blocks paint; JS deferred; Google Translate & Maps no longer load on every page; **all images converted to WebP (50 MB → 14 MB, –72%)** served automatically; hero LCP preloaded.
- **Accessibility:** single H1 per page, accessible mobile menu, labelled forms, 44px tap targets, no horizontal overflow.
- **New growth pages:** `/contract-manufacturing/`, `/quality/`, `/blog/` + 2 cornerstone articles (B2B keywords competitors own).

---

## 2. ⚠️ Deploying the `img/` folder safely

Your local `img/product/` is a **strict superset** of the live product images, so copying it up **cannot delete any working product photo**. However:

- **Use additive upload (never mirror-delete).** With FTP/rsync, upload **without** a "delete remote files not present locally" option. This protects any live-only banner/theme assets.
- The new `img/placeholder/` (397 files) and `img/seo/og-default.jpg` and all `*.webp` files **must** be uploaded.
- Recommended (rsync): `rsync -avh --ignore-existing img/ user@host:/path/img/`

## 3. Server requirements

The `.htaccess` uses **mod_rewrite + mod_headers + mod_mime** (HTTPS/non-www canonicalisation, WebP content-negotiation, caching, security headers). Your host runs **LiteSpeed**, which supports all of this — no action needed. If WebP isn't served, confirm `mod_rewrite` is on (it serves the original JPG/PNG as fallback regardless, so nothing breaks).

PHP 8.x is required (you already run ea-php81).

## 4. Files NOT to make public

- `/include/` — already `Disallow`-ed in robots.txt and not directly servable.
- `/SEO-Optimization-Report/` — internal (audit, plan, screenshots, maintenance tools). It now has its own `.htaccess` (`Require all denied`) and is in robots.txt. You may simply **not upload it** if you prefer.

## 5. Immediately after go-live

1. **Verify canonical:** visit `http://starlabs.com.pk`, `https://www.starlabs.com.pk`, `https://starlabs.com.pk/products/index.php` — all should 301 to the clean `https://starlabs.com.pk/...` form.
2. **Google Search Console:** add/confirm the `https://starlabs.com.pk` property and **submit `https://starlabs.com.pk/sitemap.xml`** (511 URLs). Do the same in **Bing Webmaster Tools**.
3. **Rich Results Test** (search.google.com/test/rich-results) on 3–4 product URLs — confirm `Drug` / `FAQPage` / `Breadcrumb` are detected with no errors.
4. **Spot-check** a few renamed product URLs and confirm old ones 301 (e.g. `/products/human/oral-solids/VERTEX-16mG-tablet/` → `…/vertex-16mg-tablet/`).
5. Run **PageSpeed Insights** on the homepage and a product page to confirm Core Web Vitals.

---

## 6. Owner action items (to unlock the remaining upside)

| Priority | Action | Why |
|---|---|---|
| High | **Supply the 397 product photos** in `PRODUCT-PHOTOS-NEEDED.txt` (named exactly as listed). | Replaces branded placeholders with real images → image search, trust, social previews. |
| High | **Claim & optimise Google Business Profile**; create a **Wikidata** entity and **LinkedIn** company page; keep name/address/phone identical everywhere. | Off-site brand authority is the #1 driver of AI-answer citations and local SEO. |
| High | **Confirm certifications & licence numbers** (WHO-GMP, DRAP DML, ISO) to publish on `/quality/`; reconcile the **3 phone numbers**. | E-E-A-T trust signals for a YMYL pharma site. |
| Medium | Add a **named medical reviewer** ("Medically reviewed by Dr …") — tell us the name/credentials and we wire `reviewedBy` into the schema. | Key YMYL trust signal Google's guidelines call for. |
| Medium | Review/approve the **drafted copy** on `/contract-manufacturing/`, `/quality/`, and the 2 blog articles; customise specifics (capabilities, MOQ). | They're solid drafts; your business detail makes them authoritative. |
| Medium | Publish more **blog articles** and (later) **export country/region landing pages** (Afghanistan, Africa, Middle East). | Topical authority + commercial-intent keywords competitors own. |

## 7. Regenerating data later (maintenance tools)

When you add/remove products, edit `include/products-data.php`, then run from the site root:
- `php SEO-Optimization-Report/tool_gen_sitemap_llms.php` → rebuilds `sitemap.xml`, `llms.txt`, `llms-full.txt`
- `php SEO-Optimization-Report/tool_gen_placeholders.php` → placeholder for any new photo-less product
- `php SEO-Optimization-Report/tool_gen_webp.php` → WebP for any new images

---

*Full audit & rationale: `AUDIT-AND-ACTION-PLAN-2026.md`. Before/after screenshots: `screenshots/`.*
