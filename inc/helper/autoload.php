<?php
/**
 * Autoload File
 *
 * @category  Edit-Flow-Slack-Integration
 * @package   Edit-Flow-Slack-Integration
 * @author    rtCamp, Bhumi Patel
 */

/**
 * Autoload function
 *
 * @param array $class_name Name of class file.
 */
function edsi_autoloader( $class_name ) {
	$class_name = strtolower( $class_name );
	$class_name = str_replace( '_', '-', $class_name );
	$filename   = plugin_dir_path( __FILE__ ) . 'autoload.php/' . sprintf( 'classes/class-%s.php', $class_name );

	if ( file_exists( $filename ) ) {
		require $filename;
	}
}

spl_autoload_register( 'edsi_autoloader' );