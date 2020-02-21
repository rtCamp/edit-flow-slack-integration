<?php
/**
 * Send notification on slack when it gets editorial comment.
 *
 * @package edit-flow-slack-integration
 */

namespace Edit_Flow_Slack_Integration\Inc;

use Edit_Flow_Slack_Integration\Inc\Traits\Singleton;

/**
 * Edit-Flow-Slack-Integration
 */
class Slack_Notification {

	use Singleton;

	/**
	 * Constructor to call a send notification method.
	 */
	public function __construct() {
		add_action( 'ef_post_insert_editorial_comment', array( $this, 'send_notification_on_slack' ) );
	}

	/**
	 * Send a notification on slack when user comment on a post.
	 *
	 * @param array $comment Contain detail of an array.
	 */
	public function send_notification_on_slack( $comment ) {

		$url              = get_option( 'edit_flow_slack_webhook' );
		$post_id          = sanitize_text_field( $comment->comment_post_ID );
		$post_type        = sanitize_text_field( get_post_type( $post_id ) );
		$post_type_object = get_post_type_object( $post_type );
		$post_type_label  = sanitize_text_field( isset( $post_type_object->labels->singular_name ) ? $post_type_object->labels->singular_name : '' );
		$post_title       = sanitize_text_field( get_the_title( $post_id ) );
		$comment_author   = sanitize_text_field( $comment->comment_author );
		$comment_content  = sanitize_textarea_field( $comment->comment_content );
		$format           = "*%s* left a comment on *%s #%s - %s*\n\n %s";
		$text             = sprintf( $format, $comment_author, $post_type_label, $post_id, $post_title, $comment_content );

		$headers = [
			'Content-Type' => 'application/json',
			'Accept'       => 'application/json',
		];

		$body = [
			'text' => $text,
		];

		$args = [
			'method'  => 'POST',
			'timeout' => 5, // phpcs:ignore WordPressVIPMinimum.Performance.RemoteRequestTimeout
			'headers' => $headers,
			'body'    => wp_json_encode( $body ),
		];

		wp_remote_post( esc_url( $url ), $args );
	}
}
