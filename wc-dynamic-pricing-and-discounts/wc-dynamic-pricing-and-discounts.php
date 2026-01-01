<?php

/**
 * Plugin Name: WooCommerce Dynamic Pricing & Discounts
 * Plugin URI:
 * Description: All-purpose product pricing, cart discount and checkout fee tool for WooCommerce
 * Author: RightPress
 * Author URI:
 *
 * Text Domain: rp_wcdpd
 * Domain Path: /languages
 *
 * Version: 2.5.5
 *
 * Requires at least: 6.5
 * Tested up to: 6.9
 *
 * WC requires at least: 9.0
 * WC tested up to: 10.4.3
 *
 * @package WooCommerce Dynamic Pricing & Discounts
 * @category Core
 * @author RightPress
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define Constants
define('RP_WCDPD_PLUGIN_KEY', 'wc-dynamic-pricing-and-discounts');
define('RP_WCDPD_PLUGIN_PUBLIC_PREFIX', 'rp_wcdpd_');
define('RP_WCDPD_PLUGIN_PRIVATE_PREFIX', 'rp_wcdpd_');
define('RP_WCDPD_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('RP_WCDPD_PLUGIN_URL', plugins_url(basename(plugin_dir_path(__FILE__)), basename(__FILE__)));
define('RP_WCDPD_ADMIN_CAPABILITY', 'manage_rp_wcdpd');
define('RP_WCDPD_SUPPORT_PHP', '8.0');
define('RP_WCDPD_SUPPORT_WP', '6.5');
define('RP_WCDPD_SUPPORT_WC', '9.0');
define('RP_WCDPD_VERSION', '2.5.5');

// Load main plugin class
require_once 'rp_wcdpd.class.php';

 
// Declare compatibility with WooCommerce HPOS
add_action('before_woocommerce_init', function() {
    if (class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class)) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility('custom_order_tables', __FILE__, true);
    }
});
