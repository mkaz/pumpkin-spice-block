<?php
/**
 * Plugin Name:       Pumpkin Spice Block
 * Description:       A block for Fall season
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Marcus Kazmierczak
 * Author URI:		  https://mkaz.blog/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pumpkin-spice-block
 */


add_action( 'init', function() {
	register_block_type( __DIR__ );
} );

function mkaz_pumpkin_spice_block_style() {
	wp_enqueue_style(
		'pumpkin-spice-style',
		plugins_url( 'style.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
	);
}

add_action( 'wp_enqueue_scripts', 'mkaz_pumpkin_spice_block_style' );
add_action( 'admin_enqueue_scripts', 'mkaz_pumpkin_spice_block_style' );