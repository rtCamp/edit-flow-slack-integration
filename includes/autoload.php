<?php
/**
 * Autoload File
 */

namespace Edit_Flow_Slack_Integration;

/**
 * Autoload function
 *
 * @param array $class_name Name of class file.
 */
function autoloader( $class_name ) {

	$class_name = str_replace( 'Edit_Flow_Slack_Integration\\', '', $class_name );
	$class_name = strtolower( $class_name );
	$class_name = str_replace( '_', '-', $class_name );
	$filename   = plugin_dir_path( __FILE__ ) . sprintf( 'class-%s.php', str_replace('\\', '/', $class_name) );

	if ( file_exists( $filename ) ) {
		require $filename;
	}
}

spl_autoload_register( 'Edit_Flow_Slack_Integration\autoloader' );
