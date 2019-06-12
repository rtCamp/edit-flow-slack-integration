<?php
/**
 * Edit-Flow-Slack-Integration
 */

/**
 * Plugin Name: Edit Flow -Slack Integration
 * Plugin URI: https://github.com/rtCamp/edit-flow-slack-integration
 * Descrirption: This plugin gives you a feature of send notification on slack
 * Version: 1.0.0
 * Author: rtCamp, Bhumi Patel
 *
 * @package Edit_Flow_Slack_Integration
 */

namespace Edit_Flow_Slack_Integration;

require_once 'includes/autoload.php';

function edit_flow_slack_integration_loader() {

	require_once __DIR__ . '/includes/autoload.php';

	$edit_flow_slack_integration     = new Notification();
	$slack_notification_url_settings = new Settings();

}

edit_flow_slack_integration_loader();
