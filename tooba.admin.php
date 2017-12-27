<?php
function tooba_post_type() {
	register_post_type( 'tooba_product',
		array(
			'labels'      => array(
				'name'          => 'Products',
				'singular_name' => 'Product'
			),
			'public'      => true,
			'has_archive' => true
		) );
}

add_action( 'init', 'tooba_post_type' );

function tooba_admin_menu() {
	if ( is_admin() ) {
		add_menu_page( 'Tooba | All Products',
			'Tooba', 'manage_options', 'products',
			'tooba_products', get_theme_file_uri( 'images/furniture.png' ), 4 );
		$tooba_products_page =
			add_submenu_page( 'products', 'Tooba | All Products', 'All Products',
				'manage_options', 'products', 'tooba_products' );

		$tooba_add_page =
			add_submenu_page( 'products', 'Tooba | Add Product', 'Add Product',
				'manage_options', 'products-add', 'tooba_products_add' );
		// add_action( 'load-'. $wptuts_settings_page, 'wptuts_settings_scripts' );
	}
}

function tooba_open() {
	echo '<div class="wrap">';
}

function tooba_close() {
	echo '</div>';
}

function tooba_products() {
	tooba_open();
	echo '<h1 class="wp-heading-inline">All Products</h1>';
	tooba_close();
	// esc_html_e( 'All Products', 'tooba' );
}

function tooba_products_add() {
	tooba_open();
	echo '<h1 class="wp-heading-inline">Add Product</h1>';
	tooba_close();
	// esc_html_e( 'Add Product', 'tooba' );
}

add_action( 'admin_menu', 'tooba_admin_menu' );