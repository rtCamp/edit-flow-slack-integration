<?php
/**
 * Edit-Flow-Slack-Integration
 *
 * @category
 * @package
 * @author  Bhumi Patel
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

$new = new Edit_Flow_Slack_Integration();

$url = 'https://hooks.slack.com/services/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';
$headers = array(
	'Content-Type' => 'application/json',
	'Accept'       => 'application/json',
);

$body = array(
			'text' => 'hello world',
		);

$args = array(
	'method'  => 'POST',
	'timeout' => 90,
	'headers' => $headers,
	'body'    => json_encode( $body ),
);

//$response = wp_remote_post( $url, $args );

//error_log( var_export( $response, true) );

//
//function hello_123( $comment ) {
//	error_log( var_export( $comment, true ) );
//}
add_action( 'ef_post_insert_editorial_comment', 'hello_123');