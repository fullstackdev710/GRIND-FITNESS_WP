<?php
/*
Plugin Name: WPC Grouped Product for WooCommerce
Plugin URI: https://wpclever.net/
Description: WPC Grouped Product helps you made up standalone products that are presented as a group.
Version: 4.1.1
Author: WPClever
Author URI: https://wpclever.net
Text Domain: wpc-grouped-product
Domain Path: /languages/
Requires at least: 4.0
Tested up to: 6.2
WC requires at least: 3.0
WC tested up to: 7.5
*/

defined( 'ABSPATH' ) || exit;

! defined( 'WOOSG_VERSION' ) && define( 'WOOSG_VERSION', '4.1.1' );
! defined( 'WOOSG_FILE' ) && define( 'WOOSG_FILE', __FILE__ );
! defined( 'WOOSG_URI' ) && define( 'WOOSG_URI', plugin_dir_url( __FILE__ ) );
! defined( 'WOOSG_DIR' ) && define( 'WOOSG_DIR', plugin_dir_path( __FILE__ ) );
! defined( 'WOOSG_SUPPORT' ) && define( 'WOOSG_SUPPORT', 'https://wpclever.net/support?utm_source=support&utm_medium=woosg&utm_campaign=wporg' );
! defined( 'WOOSG_REVIEWS' ) && define( 'WOOSG_REVIEWS', 'https://wordpress.org/support/plugin/wpc-grouped-product/reviews/?filter=5' );
! defined( 'WOOSG_CHANGELOG' ) && define( 'WOOSG_CHANGELOG', 'https://wordpress.org/plugins/wpc-grouped-product/#developers' );
! defined( 'WOOSG_DISCUSSION' ) && define( 'WOOSG_DISCUSSION', 'https://wordpress.org/support/plugin/wpc-grouped-product' );
! defined( 'WPC_URI' ) && define( 'WPC_URI', WOOSG_URI );

include 'includes/wpc-dashboard.php';
include 'includes/wpc-menu.php';
include 'includes/wpc-kit.php';

if ( ! function_exists( 'woosg_init' ) ) {
	add_action( 'plugins_loaded', 'woosg_init', 11 );

	function woosg_init() {
		// load text-domain
		load_plugin_textdomain( 'wpc-grouped-product', false, basename( __DIR__ ) . '/languages/' );

		if ( ! function_exists( 'WC' ) || ! version_compare( WC()->version, '3.0', '>=' ) ) {
			add_action( 'admin_notices', 'woosg_notice_wc' );

			return;
		}

		require_once 'includes/class-product.php';
		require_once 'includes/class-woosg.php';
	}
}

if ( ! function_exists( 'woosg_notice_wc' ) ) {
	function woosg_notice_wc() {
		?>
		<div class="error">
			<p><strong>WPC Grouped Product</strong> requires WooCommerce version 3.0 or greater.</p>
		</div>
		<?php
	}
}
