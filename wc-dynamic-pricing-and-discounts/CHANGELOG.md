# Changelog

## 2.5.6 — 2026-01-02
- Fix — Prevent PHP 8 TypeError when subtracting prices if base/adjusted amounts arrive as strings (e.g., variable products with all variations out of stock). Enforced float casting in reference amount calculation and average price return to ensure robust handling without breaking category pages or variable product rendering.

## 2.5.5 — 2026-01-01
- Tweak — Visual standardization: inputs/selects at 34px; textareas min 46px
- Fix   — Select2 multiple alignment and height consistency (inline search/choice chips)
- Note  — No functional changes; aesthetic adjustments for consistency and legibility

## 2.5 — 2026-01-01
- Tweak — Fully removed non-functional auto-update/licensing mechanism
- Tweak — Removed external URLs (author, update, support) and broken links
- Tweak — Updated plugin metadata (Version 2.5; WP tested 6.9; WC requires 8.0; WC tested 10.4.3)
- Tweak — Maintenance for PHP 8.2+ and HPOS compatibility; no behavior changes
- Tweak — Minimal code cleanup with no functional impact
- Note  — Community maintenance version due to absence of official support since 2023

## 2.5.1 — 2026-01-01
- Tweak — Conservative Select2 update (4.0.13) for settings UI
- Tweak — Updated jQuery UI styles to 1.13.2 while keeping current theme
- Tweak — Raised minimum requirements (PHP 8.0; WP 6.5; WC 9.0)
- Note  — Minimal updates to reduce breakage risk while keeping functionality
