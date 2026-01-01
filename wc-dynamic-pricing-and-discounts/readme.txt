WooCommerce Dynamic Pricing & Discounts — Community Maintenance

Version: 2.5.5
Date: 1 Jan 2026

Summary
- Maintained plugin without altering original functionality.
- Removed non-functional update/licensing mechanisms and broken external links.
- Strengthened compatibility: PHP 8.2+, WooCommerce HPOS.
- Updated metadata: WP tested 6.9; WC requires 9.0; WC tested 10.4.3.
- Assets update: Select2 updated to 4.1.0-rc.0 via CDN; jQuery UI CSS remains 1.13.2.
- UX: removed “Loading user interface” preloader on settings pages to prevent flickering.
- PHP 8.2 compatibility: adjustments to avoid deprecation notices (string cast in htmlspecialchars), translations loading moved to the “init” hook, settings initialization also moved to “init”.
- Visual tweak: inputs and selects on settings pages standardized to 34px height for visual consistency.

Motivation
- No official support and updates since 2023.
- Goal: ensure stable operation in existing stores without logic changes.

Notes
- Select2 is now loaded via CDN (jsDelivr), ensuring newer versions without bundling large files.
- Preserved custom grouped-select2 integration and fallback to selectWoo when necessary.
- If future WP/WC/PHP versions introduce incompatibilities, targeted fixes will be made while preserving behavior.

License/Credits
- Original author rights preserved; this package is community maintenance.
