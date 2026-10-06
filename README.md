# Noura — WordPress Block Theme

An elegant, modern **Full Site Editing** block theme by [Nour El Houda Bouajila](https://nour-el-houda-bouajila.rf.gd/).

> **WordPress:** 6.4+ · **PHP:** 7.4+ · **License:** GPL-2.0-or-later · **Version:** 1.1.0 · **FSE:** Yes · **Style variations:** 2

Noura pairs a deep-ink palette with a warm amber accent, editorial serif typography, and generous whitespace — designed for portfolios, agencies, freelancers, and blogs that want to look sharp out of the box.

## Design philosophy

Noura is built on three convictions:

1. **Restraint is a feature.** Generous whitespace, one display serif (Fraunces), one workhorse sans (Inter), and a single accent color do more than a dozen decorative flourishes.
2. **The editor is the truth.** Everything you see on the front end is a core block. No shortcodes, no page-builder lock-in, no surprises when you switch themes.
3. **Motion with manners.** Micro-interactions — button shines, card lifts, count-up stats — are delightful by default and disappear gracefully for anyone who prefers reduced motion.

## ✨ Features

- **Full Site Editing** — edit headers, footers, and every template visually in the Site Editor (Appearance → Editor)
- **Complete design system** in `theme.json`: 10-color palette, 3 gradients, 3 duotone presets, fluid type scale, 8-step spacing scale, custom shadows, and named border radii
- **2 style variations** — *Midnight* (full dark mode) and *Sahara* (warm light with terracotta accent); switch instantly under Appearance → Editor → Styles
- **11 custom block patterns** (Noura category): split hero, animated stats band, 3-column features grid, portfolio showcase, client logo marquee, testimonials, team grid, latest-posts grid, FAQ accordion, 3-tier pricing table, CTA banner
- **9 templates**: front page, blog index, single post, page, archive, search, styled 404 — plus 2 custom page templates (no-title, wide)
- **Custom block styles**: Shadow button, Outline-amber button, Large quote, Card group, Framed image
- **Micro-interactions**: animated stat counters, infinite logo marquee, FAQ disclosures, back-to-top button, button shine sweep, hero entrance animation
- **Typography**: Fraunces (display serif) + Inter (body sans) loaded from Google Fonts, with system fallbacks — fluid sizing from `x-small` to `hero`
- **Accessibility**: skip-to-content link, `:focus-visible` rings, screen-reader-text utility, semantic landmarks, aria-labeled navigation, native `<details>` FAQs, `prefers-reduced-motion` support, translation-ready (`noura` text domain)
- **Responsive** throughout, with a print stylesheet for clean hard copies

### Color contrast

Body text pairs are chosen to meet WCAG AA (4.5:1) for normal text:

| Pair | Ratio |
|---|---|
| Ink `#0b1426` on Paper `#faf7f1` | ~15.5:1 |
| Amber `#d9a441` on Ink `#0b1426` | ~7:1 |
| Slate `#3c4a63` on Paper `#faf7f1` | ~7.5:1 |
| Terracotta `#a8562f` links on Paper `#fdf9f0` (Sahara) | ~5.8:1 |
| Cream `#f4efe3` on Ink `#050a16` (Midnight) | ~14:1 |

Decorative elements (marquee wordmarks, dividers) may fall below AA and carry no essential information.

## 📦 Installation

1. Download or clone this repository:
   ```bash
   git clone https://github.com/Nourhb/noura-wp-theme.git
   ```
2. Copy the `noura-wp-theme` folder into your WordPress `wp-content/themes/` directory.
3. In wp-admin, go to **Appearance → Themes** and activate **Noura**.
4. (Optional) Set a static front page under **Settings → Reading**, then compose it in the **Site Editor** using the Noura patterns.

**Requirements:** WordPress 6.4+, PHP 7.4+.

## 🎨 Customization

Everything visual lives in `theme.json` — change the palette, fonts, spacing, or layout widths there and the whole theme follows:

- **Colors** → `settings.color.palette`
- **Style variations** → `styles/midnight.json`, `styles/sahara.json` (appear under Appearance → Editor → Styles)
- **Fonts** → `settings.typography.fontFamilies` (swap the Google Fonts URLs or replace with system stacks)
- **Content width** → `settings.layout.contentSize` (720px) / `wideSize` (1200px)
- **Buttons, headings, links, tables, lists** → `styles.elements` / `styles.blocks`

Extra polish (hovers, transitions, focus states, marquee, print) is in `style.css`; editor-only tweaks live in `assets/css/editor.css`; front-end interactions (back-to-top, stat counters) live in `assets/js/theme.js`.

### Templates & parts

| File | Purpose |
|---|---|
| `templates/front-page.html` | Landing page assembled from 10 Noura patterns |
| `templates/index.html` | Blog index (3-col card grid) |
| `templates/single.html` | Single post with author meta + comments |
| `templates/page.html` | Default page |
| `templates/page-no-title.html` | Custom page template without a title |
| `templates/page-wide.html` | Custom wide page template |
| `templates/archive.html` | Category/tag/date archives |
| `templates/search.html` | Search results |
| `templates/404.html` | Styled "page not found" |
| `parts/header.html` | Sticky header: skip link, logo, nav, CTA button |
| `parts/footer.html` | 4-column footer: about, links, newsletter, back-to-top |

### Block pattern catalog

All patterns are registered under the **Noura** category in the inserter:

| Pattern | Slug | What it is |
|---|---|---|
| Split hero | `noura/hero-split` | Eyebrow, display headline, CTAs, framed image, staggered entrance |
| Stats band | `noura/stats-band` | 4 animated count-up stats on dark ink |
| Features grid | `noura/features-grid` | Three service cards on cream |
| Portfolio showcase | `noura/portfolio-showcase` | Alternating project rows |
| Logo strip | `noura/logo-strip` | Infinite client-wordmark marquee (pauses on hover) |
| Testimonials | `noura/testimonials` | Three client quote cards |
| Team grid | `noura/team-grid` | Four members with photos, roles, bios |
| Latest posts | `noura/latest-posts-grid` | Latest articles, 3-column grid |
| FAQ | `noura/faq` | Accessible `<details>` accordion, 5 questions |
| Pricing table | `noura/pricing-table` | Three tiers with a highlighted plan |
| CTA banner | `noura/cta-banner` | Dark gradient call-to-action |

### Style variations

| Variation | File | Mood |
|---|---|---|
| Midnight | `styles/midnight.json` | Full dark mode — deep ink surfaces, cream text, amber accents |
| Sahara | `styles/sahara.json` | Warm light — sand backgrounds, bark-brown text, terracotta accent |

Switch under **Appearance → Editor → Styles → Browse styles**. Each variation redefines the palette, gradients, duotone presets, and element styles (links, buttons, headings, quotes, code, tables).

### PHP helpers (`functions.php`)

- `noura_setup()` — theme supports (block styles, responsive embeds, editor styles, custom logo with flexible sizing, HTML5, title tag, thumbnails)
- `noura_register_menus()` — Primary / Footer / Social menu locations
- `noura_enqueue_assets()` — stylesheet + `assets/js/theme.js` (back-to-top, stat counters)
- `noura_register_block_styles()` — 5 custom block styles
- `noura_register_pattern_category()` — the "Noura" pattern category
- `noura_skip_link_target()` — adds the skip-link target ID to the `<main>` landmark
- `noura_excerpt_length()` / `noura_excerpt_more()` / `noura_excerpt_read_more()` — tidy 28-word excerpts with "Continue reading"
- `noura_icon()` — small inline SVG icon helper
- `noura_copyright()` — dynamic copyright line

## 🖼️ Screenshots

- `screenshot.png` — 1200×900 preview shown in Appearance → Themes
- Front page, single post, and mobile views recommended for theme directories

## ❓ FAQ

**Does Noura require any plugins?**
No. It is a pure block theme built on core WordPress blocks.

**Can I use Noura with WooCommerce?**
WooCommerce works with any well-coded theme; Noura follows standard theme APIs. Dedicated shop templates are not included.

**How do I add my logo?**
Appearance → Editor → Header → select the logo area → Site Logo block → upload. Flexible sizing is enabled.

**Where do I change the footer columns?**
Appearance → Editor → Template Parts → Footer. Everything is blocks — edit text, links, and the newsletter area directly.

**Is Noura translation-ready?**
Yes. All strings use the `noura` text domain, there is a `languages/` folder, and layouts support RTL languages.

## 📝 Changelog

### 1.1.0 — 2026-10-06
- Added **Midnight** and **Sahara** style variations (`styles/` directory)
- Added 4 patterns: stats band (animated counters), FAQ accordion, team grid, logo marquee
- Added `assets/js/theme.js`: back-to-top button + IntersectionObserver stat count-ups
- Micro-polish in `style.css`: smooth scroll, selection color, button shine, hero entrance animation, FAQ/marquee/back-to-top styles, list markers, table zebra striping, print stylesheet, `prefers-reduced-motion` support, screen-reader-text utility
- Accessibility: skip-to-content link, skip-link target on `<main>`, aria-labeled navigation
- `theme.json`: table/list/separator block style refinements

### 1.0.0 — 2026-10-06
- Initial release: full block theme with 9 templates, 7 patterns, design system in `theme.json`, custom block styles, editor styles, and translation-ready code.

## 👩‍💻 Author

**Nour El Houda Bouajila** — Full-Stack Web Developer (React, Node.js, WordPress, AWS, Docker), based in Hamilton, Ontario, Canada.

- Portfolio: https://nour-el-houda-bouajila.rf.gd/
- GitHub: https://github.com/Nourhb
- LinkedIn: https://www.linkedin.com/in/nour-el-houda-bouajila/

## 📄 License

Noura is licensed under the **GNU General Public License v2 or later** — see [LICENSE](LICENSE) for the full text.
