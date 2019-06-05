<?php
/**
 * Autoload File
 *
 * @category  Edit-Flow-Slack-Integration
 * @package   Edit-Flow-Slack-Integration
 * @author    Bhumi Patel
 */

/**
 * Autoload function
 *
 * @param array $class_name Name of class file.
 */
function wp_custom_autoload( $class_name ) {
	$class_name = strtolower( $class_name );
	$class_name = str_replace( '_', '-', $class_name );
	$filename   = __DIR__ . '/' . sprintf( 'class-%s.php', $class_name );

	if ( file_exists( $filename ) ) {
		require $filename;
	}
}

spl_autoload_register( 'wp_custom_autoload' );
