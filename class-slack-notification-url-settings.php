<?php
/**
 * Change URL of webhook from general setting.
 *
 * @category  Edit-Flow-Slack-Integration
 * @package   Edit-Flow-Slack-Integration
 * @author    Bhumi Patel
 */

/**
 * Slack notification URL setting
 *
 * @category
 */
class Slack_Notification_Url_Settings {

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
		register_setting( 'general', 'slack_notification_url_settings', 'esc_attr' );
		add_settings_field( 'slack_notification_url_settings', '<label for="slack_notification_url_settings">' . __( 'Slack Notification url Settings', 'slack_notification_url_settings' ) . '</label>', array( $this, 'slack_notification_url_settings_html' ), 'general' );
	}

	/**
	 * Contains input box to set slack url setting.
	 */
	public function slack_notification_url_settings_html() {
		$value = esc_url( get_option( 'slack_notification_url_settings' ) );
		$value = empty( $value ) ? '' : $value;
		echo '<input type="text" id="slack_notification_url_settings" name="slack_notification_url_settings" class="regular-text ltr" value="' . esc_attr( $value ) . '"/>';
		echo '<p class="description"> Webhook URL of slack </p>';
	}

}
