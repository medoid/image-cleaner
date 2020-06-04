<?php
/**
 * Plugin Name: Medoid Image Cleaner
 * Plugin URI: https://github.com/medoid/medoid
 * Author: Medoid Cloud Media
 * Author URI: https://store.puleeno.com
 * Description: Cleanup the Medoid and WordPress images aren't attached to WordPress post or the image are deleted on the Cloud Storages
 * Version: 1.0.0
 */

define( 'MEDOID_IMAGE_CLEANER_FILE', __FILE__ );

if ( ! class_exists( 'Medoid_Image_Cleaner' ) ) {
	require_once dirname( __FILE__ ) . '/includes/class-medoid-image-cleaner.php';
}

if ( ! function_exists( 'medoid_image_cleaner' ) ) {
	function medoid_image_cleaner() {
		return Medoid_Image_Cleaner::get_instance();
	}
}

add_action( 'plugins_loaded', 'medoid_image_cleaner' );
