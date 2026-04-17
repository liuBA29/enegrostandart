<?php
/**
 * Front page: Elementor / редактор страницы, иначе статический лендинг из template-parts/front-static.php.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();

$show_on_front = get_option('show_on_front');
$page_on_front = (int) get_option('page_on_front');
$use_page_content = false;

if ('page' === $show_on_front && $page_on_front > 0) {
	$page = get_post($page_on_front);
	if ($page instanceof WP_Post) {
		$is_elementor = (get_post_meta($page_on_front, '_elementor_edit_mode', true) === 'builder');
		$plain = trim(wp_strip_all_tags((string) $page->post_content));
		$use_page_content = $is_elementor || $plain !== '';
	}
}

if ($use_page_content) {
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>
			<div class="es-front-page-content entry-content">
				<?php the_content(); ?>
			</div>
			<?php
		}
	}
} else {
	get_template_part('template-parts/front', 'static');
}

get_footer();
