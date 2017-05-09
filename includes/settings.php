<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$settings = array(
	'enabled' => array(
		'title'   => __( 'Habilitar Medio de Pago', 'woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Habilitar iPay', 'woocommerce' ),
		'default' => 'yes',
	),

	'sandbox' => array(
		'title'   => __( 'Modo de pruebas', 'woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Habilitar Modo de pruebas', 'woocommerce' ),
		'default' => 'yes',
	),

	'debug' => array(
		'title'   => __( 'Registro de desarrollo', 'woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Permitir Registro', 'woocommerce' ),
		'default' => 'no',
	),

	'description' => array(
		'title'       => __( 'Descripción', 'woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'Describe el método de pago al usuario al finalizar la compra.', 'woocommerce' ),
		'default'     => __( 'Paga via Tarjeta de Crédito o Débito.', 'woocommerce' ),
	),

	'identity_token' => array(
		'title'       => __( 'Llave de Identificación', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Ingrese su llave de Identificación. ', 'woocommerce' ),
		'default'     => '',
		'desc_tip'    => true,
	),

	'encrypt_key' => array(
		'title'       => __( 'Llave de Encriptación', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Esta se usara para encriptar los parámetros para cargar el formulario.', 'woocommerce' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => '',
	),

	'confirmation_message' => array(
		'title'       => __( 'Mensaje de Confirmación', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Este mensaje será enviado al cliente como confirmación cuando el pago se haya realizado de manera exitosa.', 'woocommerce' ),
		'default'     => 'Mensaje Confirmación',
		'desc_tip'    => true,
	),

	'notify_message' => array(
		'title'       => __( 'Mensaje de Notificación', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Mensaje adicional que se enviara en la notificación cuando se realice el cobro.', 'woocommerce' ),
		'default'     => 'Mensaje Notificacion',
		'desc_tip'    => true,

	)
);

if ( get_woocommerce_currency() != "BOB" ) {
	$settings['rate_convert'] = array(
		'title'       => __( 'Tipo de Cambio (' . get_woocommerce_currency() . ') y (BOB)', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Tipo de cambio entre la moneda del sitio (' . get_woocommerce_currency() . ') y iPay.', 'woocommerce' ),
		'default'     => '1',
		'desc_tip'    => true,
	);
}

return $settings;