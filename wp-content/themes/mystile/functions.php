<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Define the theme-specific key to be sent to PressTrends.
define( 'WOO_PRESSTRENDS_THEMEKEY', 'zdmv5lp26tfbp7jcwiw51ix9sj389e712' );

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 			// Options panel settings and custom settings
				'includes/theme-functions.php', 		// Custom theme functions
				'includes/theme-actions.php', 			// Theme actions & user defined hooks
				'includes/theme-comments.php', 			// Custom comments/pingback loop
				'includes/theme-js.php', 				// Load JavaScript via wp_enqueue_script
				'includes/sidebar-init.php', 			// Initialize widgetized areas
				'includes/theme-widgets.php',			// Theme widgets
				'includes/theme-install.php',			// Theme installation
				'includes/theme-woocommerce.php',		// WooCommerce options
				'includes/theme-plugin-integrations.php'	// Plugin integrations
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/

 //Will effect both the woocommerce archive page and the wordpress archive page
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);
remove_action('woocommerce_pagination', 'woocommerce_catalog_ordering', 20); 
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10); 
remove_action('woocommerce_pagination', 'woocommerceframework_pagination', 10); 
remove_action('woocommerce_pagination', 'woocommerce_pagination_wrap_open', 5); 
remove_action('woocommerce_pagination', 'woocommerce_pagination_wrap_close', 25);
function woocommerce_pagination() {
        wp_pagenavi();     
}

add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );






/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>
