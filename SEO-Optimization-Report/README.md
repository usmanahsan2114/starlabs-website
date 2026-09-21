# Star Laboratories — Technical SEO & AEO Optimization Report

**Site:** https://www.starlabs.com.pk (dev preview: apexitsolutions.co/websites/starlabs)
**Date:** 14 May 2026
**Scope:** Full technical SEO + AEO overhaul, structured data, performance, accessibility and UX hardening across all 528 pages.

---

## Executive summary

The website had severe technical SEO problems that would have made high Google rankings effectively impossible. Every fixable issue found in the audit has been resolved through a centralised, maintainable system — one SEO engine file now powers correct metadata for all 500 page templates, so future products inherit best-practice SEO automatically.

---

## Baseline problems found (audit)

| Issue | Severity | Pages affected |
|---|---|---|
| `lang="zxx"` (tells Google "no language") | Critical | 499 |
| Identical `<title>Star Labs Website</title>` on every page | Critical | 499 |
| Empty `<meta name="description">` | Critical | 499 |
| No canonical URLs | Critical | All |
| No structured data (JSON-LD) | Critical | All |
| No `robots.txt` | High | Site |
| Sitemap incomplete (108 of 528 URLs) & wrong format | High | Site |
| 1,057 of 1,119 images with empty `alt` text | High | All |
| No Open Graph / Twitter Card tags | High | All |
| No browser caching, compression or security headers | High | Site |
| Font Awesome loaded twice; render-blocking scripts | Medium | Multiple |
| No lazy loading; layout-shift risk | Medium | All |
| Broken footer map link (`href=""`); static copyright year | Low | All |
| No accessibility features (skip link, focus states, ARIA) | Medium | All |

---

## What was implemented

### 1. Centralised SEO engine — `include/seo.php`
A single PHP file, included in the `<head>` of all 500 page templates, that auto-detects each page from its filesystem path and outputs:
- Unique, keyword-rich `<title>` and meta description (curated for the 15 main pages, auto-generated for all 483 product pages from a structured product database)
- `<meta name="keywords">`, robots directives (`max-image-preview:large`), author, geo tags (Lahore/Pakistan)
- Canonical URL + `hreflang` (en, en-pk, x-default) for the dual Pakistan/global target
- Open Graph + Twitter Card tags (with product images where relevant)
- Favicon, theme-color, web manifest links
- Performance resource hints (`preconnect`, `dns-prefetch`)

### 2. Structured data (JSON-LD) — SEO + AEO
Every page emits a schema.org `@graph` with:
- **Organization + LocalBusiness** — pharmaceutical manufacturer entity (address, geo, contacts, founding date, social profiles, areas served)
- **WebSite** with SearchAction (sitelinks search box eligibility)
- **BreadcrumbList** — full trail on every page
- **WebPage / AboutPage / ContactPage / CollectionPage** as appropriate
- **Product + Drug** schema on all 483 product pages
- **FAQPage** on the homepage and contact page (rich-result + AI-answer eligible)

### 3. Product catalogue database — `include/products-data.php`
483 products extracted into a clean structured PHP array (name, segment, dosage form, image, description) — powers per-product SEO and JSON-LD.

### 4. Crawler & AI files
- **`robots.txt`** — full crawl access, explicit allow-listing for AI answer engines (GPTBot, ClaudeBot, PerplexityBot, Google-Extended, Applebot, etc.), sitemap reference
- **`sitemap.xml`** — regenerated with all 499 indexable URLs, priorities, change frequency, hreflang
- **`llms.txt`** + **`llms-full.txt`** — AEO files (llmstxt.org convention) giving ChatGPT, Perplexity, Claude and Google AI Overviews a clean machine-readable map of the company and full product catalogue

### 5. Performance
- `loading="lazy"` + `decoding="async"` added to 1,104 images
- `fetchpriority="high"` + dimensions on the header logo (LCP optimization)
- GSAP scripts deferred (removed render-blocking)
- Duplicate Font Awesome CDN reference removed
- `.htaccess`: gzip/brotli compression, 1-year static-asset caching, HTTPS + www canonicalization (production-only, dev-safe), index.php-stripping for clean URLs

### 6. Security (`.htaccess`)
`X-Content-Type-Options`, `X-Frame-Options`, `Referrer-Policy`, `Permissions-Policy`, `Strict-Transport-Security`, directory-listing disabled, sensitive files blocked, server signature removed.

### 7. Accessibility & UX
- Image `alt` text: 1,057 empty attributes filled with descriptive text (product names on product images, contextual text elsewhere; genuinely decorative images correctly left empty)
- Skip-to-content link + `id="main-content"` on all 500 pages
- Visible keyboard focus states, `prefers-reduced-motion` support, print stylesheet, larger mobile tap targets — via new `css/sl-enhancements.css`
- ARIA labels on navigation, logo, language selector, social links
- `rel="noopener"` on all external links
- Fixed broken footer map link → Google Maps; dynamic copyright year
- Trailing slashes on all nav links (eliminates redirect chains)
- Custom branded `404.php` error page

---

## Files added

| File | Purpose |
|---|---|
| `include/seo.php` | Centralised SEO + AEO engine |
| `include/products-data.php` | Structured 483-product database |
| `css/sl-enhancements.css` | Accessibility & UX polish |
| `robots.txt` | Crawler directives + AI bot allow-list |
| `sitemap.xml` | Regenerated, all 499 URLs |
| `llms.txt`, `llms-full.txt` | AEO machine-readable site map |
| `site.webmanifest` | PWA manifest |
| `404.php` | Branded error page |

## Files modified

- 499 page templates — `lang` fixed, SEO engine wired in, old empty title/description removed, images optimized, `main` landmark added
- `include/head.php` … `head4.php` — enhancement stylesheet linked
- `include/header.php` … `header4.php` — skip link, ARIA, trailing-slash nav
- `include/footer.php` … `footer4.php` — map link, social ARIA, dynamic year
- `.htaccess` — performance + security configuration

---

## Verification performed

- All new/modified PHP files pass syntax validation (php-parser + token parse)
- `sitemap.xml` validated as well-formed XML (499 URLs)
- 0 pages remain with `lang="zxx"`, empty titles or empty descriptions
- 500 pages confirmed wired to the SEO engine, no duplicate includes
- A full backup of all 529 original PHP files was taken before any changes

---

## Recommended next steps (require site owner / external action)

1. **Submit `sitemap.xml`** in Google Search Console and Bing Webmaster Tools.
2. **Verify the canonical domain** — `seo.php` is configured for `https://www.starlabs.com.pk`. Confirm this is correct before go-live; it is the single place to change it.
3. **Add real Open Graph images** — a dedicated 1200×630 share image per major section would improve social/SERP presentation (currently uses the hero banner / product image).
4. **Google Business Profile** — claim/optimise it for local SEO in Pakistan; it compounds with the LocalBusiness schema now in place.
5. **Page speed** — consider converting large JP/PNG images to WebP and self-hosting fonts; the caching/compression groundwork is already in `.htaccess`.
6. **Content** — unique 300+ word descriptions on category pages and richer product copy will further strengthen rankings; the SEO framework will pick them up automatically.
7. **Screenshots / visual UI audit** — could not be captured this session (the browser tool was unavailable and the sandbox cannot reach the live host). Re-run once the Chrome extension is connected for a pixel-level UI/UX review.

---

## Note on temporary files

Two scratch files were created during validation and can be safely deleted:
`include/seo-validate-tmp.php` and `include/_synctest.txt`.
