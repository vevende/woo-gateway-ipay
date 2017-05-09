<?php
/**
 * Plugin Name: Woo Gateway Payme
 * Description: Payment Gateway for Payme in Woocommerce
 * Version: 1.0.0
 * Author: Vevende SRL
 * Author URI: https://www.vevende.com/
 *
 * @package WC_Gateway_Payme
 * @version 1.0.0
 * @category Gateway
 * @author Vevende SRL
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'plugins_loaded', 'woo_gateway_payme' );

function woo_gateway_payme() {
    spl_autoload_register('spl_autoload_register');
	PaymePlugin::initialize();
}

function spl_autoload_register( $class_name ) {
    $class_path = dirname( dirname( __FILE__ ) ) . '/classes/' . $class_name . '.php';
    if ( file_exists( $class_path ) ) {
        require_once $class_path;
    }
}