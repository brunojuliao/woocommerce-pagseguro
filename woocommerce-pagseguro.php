<?php
/**
 * Plugin Name:          PagSeguro for WooCommerce
 * Plugin URI:           https://github.com/brunojuliao/woocommerce-pagseguro
 * Description:          Includes PagSeguro as a payment gateway to WooCommerce. Accepts negative or 0 fees.
 * Author:               Bruno Julião
 * Version:              2.14.0
 * License:              GPLv3 or later
 * Text Domain:          woocommerce-pagseguro
 * Domain Path:          /languages
 * WC requires at least: 3.0.0
 * WC tested up to:      3.4.0
 *
 * PagSeguro for WooCommerce is free software: you can
 * redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or any later version.
 *
 * PagSeguro for WooCommerce is distributed in the hope that
 * it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PagSeguro for WooCommerce. If not, see
 * <https://www.gnu.org/licenses/gpl-3.0.txt>.
 *
 * @package WooCommerce_PagSeguro
 */

defined( 'ABSPATH' ) || exit;

// Plugin constants.
define( 'WC_PAGSEGURO_VERSION', '2.14.0' );
define( 'WC_PAGSEGURO_PLUGIN_FILE', __FILE__ );

if ( ! class_exists( 'WC_PagSeguro' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-wc-pagseguro.php';
	add_action( 'plugins_loaded', array( 'WC_PagSeguro', 'init' ) );
}
