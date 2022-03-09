<?php
/**
 *
 * Plugin Name : Zesto Elemento
 * Description : Card component
 * Author      : iceweasel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function register_oembed_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/oembed-widget.php' );

	$widgets_manager->register( new \Elementor_oEmbed_Widget() );

}
add_action( 'elementor/widgets/register', 'register_oembed_widget' );