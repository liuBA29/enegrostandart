<?php
/**
 * Theme bootstrap.
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
	);
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'energostandart-style',
		get_stylesheet_uri(),
		array(),
		'1.5.0'
	);
});

/**
 * Handle contact form submission from the contacts page.
 */
function energostandart_handle_contact_form()
{
	if (!isset($_POST['es_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['es_contact_nonce'])), 'es_contact_form_submit')) {
		wp_safe_redirect(
			add_query_arg(
				array('es_form' => 'error'),
				wp_get_referer() ? wp_get_referer() : home_url('/')
			)
		);
		exit;
	}

	$name = isset($_POST['es_name']) ? sanitize_text_field(wp_unslash($_POST['es_name'])) : '';
	$phone = isset($_POST['es_phone']) ? sanitize_text_field(wp_unslash($_POST['es_phone'])) : '';
	$message = isset($_POST['es_message']) ? sanitize_textarea_field(wp_unslash($_POST['es_message'])) : '';

	if ($name === '' || $phone === '') {
		wp_safe_redirect(
			add_query_arg(
				array('es_form' => 'required'),
				wp_get_referer() ? wp_get_referer() : home_url('/')
			)
		);
		exit;
	}

	$admin_email = get_option('admin_email');
	$subject = sprintf(__('Новая заявка с сайта: %s', 'energostandart'), $name);
	$body = sprintf(
		"Имя: %s\nТелефон: %s\nСообщение:\n%s",
		$name,
		$phone,
		$message !== '' ? $message : '—'
	);
	$headers = array('Content-Type: text/plain; charset=UTF-8');

	$sent = wp_mail($admin_email, $subject, $body, $headers);

	wp_safe_redirect(
		add_query_arg(
			array('es_form' => $sent ? 'success' : 'error'),
			wp_get_referer() ? wp_get_referer() : home_url('/')
		)
	);
	exit;
}
add_action('admin_post_nopriv_es_contact_request', 'energostandart_handle_contact_form');
add_action('admin_post_es_contact_request', 'energostandart_handle_contact_form');
