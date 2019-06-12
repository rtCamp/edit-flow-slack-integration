<?php
/**
 * Edit-Flow-Slack-Integration
 */

namespace Edit_Flow_Slack_Integration;

/**
 * Plugin Name: Edit Flow -Slack Integration
 * Plugin URI: https://github.com/rtCamp/edit-flow-slack-integration
 * Descrirption: This plugin gives you a feature of send notification on slack
 * Version: 1.0.0
 * Author: rtCamp, Bhumi Patel
 *
 * @package edit_flow_slack_integration
 */

require_once 'includes/autoload.php';

$edit_flow_slack_integration     = new Notification();
$slack_notification_url_settings = new Settings();
