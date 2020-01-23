<?php
/**	
 * Plugin Name: Custom Plugin
 * Description: This woocommerce plugin customize your child theme
 * Version: 1.0.0
 * Author: Mohit Mishra
 * Author URI: https://makewebbetter.com
 * Requires at least: 3.5
 * Tested up to: 5.2.4
 * WC tested up to: 3.7.1
 * Text Domain: custom-plugin
 * Domain Path: /languages
 * License:  GPL-3.0+
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Exit if accessed directly
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'woocommerce_product_meta_end', 'action_product_meta_end' );


function action_product_meta_end() {

	global $product;

	$term_ids = wp_get_post_terms( $product->get_id(), 'author', array('fields' => 'ids') );

	echo get_the_term_list( $product->get_id(), 'author', '<span class="posted_in">' . _n( 'Author:', 'Authors:', count( $term_ids ), 'woocommerce' ) . '', ',', '</span>' );

	global $product;

	$term_ids = wp_get_post_terms( $product->get_id(), 'narrator', array('fields' => 'ids') );
	echo get_the_term_list( $product->get_id(), 'narrator', '<span class="posted_in">' . _n( 'Narrator:', 'Narrator:', count( $term_ids ), 'woocommerce' ) . '', ',', '</span>' );

	global $product;

	$term_ids = wp_get_post_terms( $product->get_id(), 'series', array('fields' => 'ids') );

	echo get_the_term_list( $product->get_id(), 'series', '<span class="posted_in">' . _n( 'Series:', 'Series:', count( $term_ids ), 'woocommerce' ) . '', ',', '</span>' );

	global $product;

	$term_ids = wp_get_post_terms( $product->get_id(), 'length', array('fields' => 'ids') );

	echo get_the_term_list( $product->get_id(), 'length', '<span class="posted_in">' . _n( 'Length:', 'Length:', count( $term_ids ), 'woocommerce' ) . '', ',', '</span>' );
}
