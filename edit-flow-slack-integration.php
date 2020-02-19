<?php
/**
 * Plugin Name: Edit Flow - Slack Integration Plugin
 * Description: Send notification on slack with the help of web hook.
 * Plugin URI: https://github.com/rtCamp/edit-flow-slack-integration
 * Author: rtCamp
 * Author URI:  https://rtcamp.com
 * Contributors: Bhumi Patel, Sagar Nasit
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 0.1
 * Text Domain: edit-flow-slack-integration
 *
 * @package edit-flow-slack-integration
 */

use Edit_Flow_Slack_Integration\Inc\Slack_Notification;
use Edit_Flow_Slack_Integration\Inc\Admin_Settings;

define( 'WP_EDIT_FLOW_SLACK_INTEGRATION_VERSION', '0.1' );
define( 'WP_EDIT_FLOW_SLACK_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

require_once WP_EDIT_FLOW_SLACK_PLUGIN_PATH . 'inc/helpers/autoload.php'; // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant

// Initiate classes.
Slack_Notification::get_instance();
Admin_Settings::get_instance();
