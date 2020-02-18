<?php
/**
 * Change URL of webhook from general setting.
 *
 * @package rt-edit-flow-slack-integration
 */

namespace Edit_Flow_Slack_Integration\Inc;

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
		add_action( 'admin_init', array( $this, 'slack_notification_webhook_settings' ) );
	}

	/**
	 * Register setting in general and call a slack_notification_webhook_settings_html().
	 */
	public function slack_notification_webhook_settings() {
		register_setting( 'general', 'edit_flow_slack_webhook' );
		add_settings_field( 'edit_flow_slack_webhook', __( 'Edit Flow Slack Webhook', 'slack_notification_url_settings' ), array( $this, 'slack_notification_webhook_settings_html' ), 'general' );
	}

	/**
	 * Contains input box to set slack url setting.
	 */
	public function slack_notification_webhook_settings_html() {
		$value = get_option( 'edit_flow_slack_webhook' );
		$value = empty( $value ) ? '' : $value;
		printf( '<input type="text" id="edit_flow_slack_webhook" name="edit_flow_slack_webhook" class="regular-text ltr" value="%1$s"/>', esc_url( $value ) );
	}

}
