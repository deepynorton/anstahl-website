# Anstahl Engineering V4

Production-ready custom WordPress theme for PT Anstahl Engineering Asia.

## Installation

1. Copy `anstahl-engineering-v4` to `wp-content/themes/`
2. Activate in **Appearance → Themes**
3. Create pages and assign templates:

| Page Slug | Template |
|---|---|
| products | Products |
| competence | Competence |
| projects | Projects |
| innovation | Innovation |
| approach | Approach |
| company | Company |
| contact | Contact |

4. **Settings → Reading** → set a static front page (or leave default — `front-page.php` is used automatically)
5. **Appearance → Menus** → assign menu to Primary Navigation (optional — fallback menu included)

## Features

- No Elementor dependency
- No jQuery dependency
- Semantic HTML5
- Lazy-loaded images
- WCAG-compliant focus states and skip link
- Responsive: desktop, tablet, mobile
- Sticky transparent header with scroll state

## Replace Placeholder Images

Replace SVG placeholders in `assets/images/` with production photography:

- `hero-turbine.svg` → industrial turbine hero (1920×1080)
- `project-*.svg` → project card images (720×405)

## Color Palette (V4)

| Token | Value |
|---|---|
| Background | `#050B14` |
| Surface | `#0C1524` |
| Accent | `#36A3FF` |
| White | `#FFFFFF` |

## Typography

- Headings: Rajdhani 600–700
- Body: Inter 400–500
