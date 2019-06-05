<?php
/**
 * Edit-Flow-Slack-Integration
 *
 * @category Edit-Flow-Slack-Integration
 * @package  Edit-Flow-Slack-Integration
 * @author   Bhumi Patel
 */

/**
 * Plugin Name: Edit-Flow-Slack-Integration Plugin
 * Plugin URI: This plugin gives you a feature of send notification on slack
 * Descrirption: this
 * Version: 1.0.0
 * Author: Bhumi Patel
 *
 * @package WordPress
 */


define( 'WP_EDIT_FLOW_SLACK_INTEGRATION_VERSION', '1.0.0' );

require 'autoload.php';

$edit_flow_slack_integration     = new Edit_Flow_Slack_Integration();
$slack_notification_url_settings = new Slack_Notification_Url_Settings();
