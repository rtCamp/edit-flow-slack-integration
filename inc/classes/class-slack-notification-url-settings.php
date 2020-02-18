<?php
/**
 * Change URL of webhook from general setting.
 *
 * @package rt-edit-flow-slack-integration
 */

namespace Edit_Flow_Slack_Integration\Inc\Classes;

use Edit_Flow_Slack_Integration\Inc\Traits\Singleton;

/**
 * Slack notification admin setting
 */
class Admin_Settings {

	use Singleton;
	
	/**
	 * Slack_Notification_Url_Settings constructor is used to call slack_notification_url_settings.
	 */
	public function __construct() {
		add_action( 'admin_init', array( $this, 'slack_notification_url_settings' ) );
	}

	/**
	 * Register setting in general and call a slack_notification_url_settings_html().
	 */
	public function slack_notification_url_settings() {
		register_setting( 'general', 'slack_notification_url_settings' );
		add_settings_field( 'slack_notification_url_settings', '<label for="slack_notification_url_settings">' . __( 'Slack Notification url Settings', 'slack_notification_url_settings' ) . '</label>', array( $this, 'slack_notification_url_settings_html' ), 'general' );
	}

	/**
	 * Contains input box to set slack url setting.
	 */
	public function slack_notification_url_settings_html() {
		$value = get_option( 'slack_notification_url_settings', '' );
		$value = empty( $value ) ? '' : $value;
		echo '<input type="text" id="slack_notification_url_settings" name="slack_notification_url_settings" class="regular-text ltr" value="' . esc_url( $value ) . '"/>';
		echo '<p class="description"> Webhook URL of slack </p>';
	}

}