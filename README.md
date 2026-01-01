# WooCommerce Dynamic Pricing & Discounts — Community Maintenance

This repository contains a community-maintained version of the plugin.

## Download & Install (No CLI)
- Go to GitHub Releases and download `wc-dynamic-pricing-and-discounts.zip`.
- In WordPress admin, go to Plugins → Add New → Upload Plugin.
- Choose the ZIP and install; confirm replacement if prompted; activate.
- Do not use GitHub’s “Source code (zip)”, it won’t have the correct plugin folder.

## Publishing a Release (Manual, Simple)
- Create a new release in GitHub with the tag (e.g. `v2.5.5`).
- Manually upload the plugin ZIPs as release assets:
  - `wc-dynamic-pricing-and-discounts.zip` (root folder inside ZIP must be `wc-dynamic-pricing-and-discounts`).
  - `wc-dynamic-pricing-and-discounts-<version>.zip` (optional, versioned).
- Do not rely on “Source code (zip)”; it is not a valid plugin package.

## Plugin Folder
- The plugin code lives in `wc-dynamic-pricing-and-discounts/`.
- Detailed documentation: [wc-dynamic-pricing-and-discounts/README.md](wc-dynamic-pricing-and-discounts/README.md)
- Changelog: [wc-dynamic-pricing-and-discounts/CHANGELOG.md](wc-dynamic-pricing-and-discounts/CHANGELOG.md)
