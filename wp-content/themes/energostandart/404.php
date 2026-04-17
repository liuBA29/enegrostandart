<?php
/**
 * 404 template.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();

$es_home = home_url('/');
?>

<div class="es-page es-page--404">
	<div class="es-container">
		<h1 class="es-page__title"><?php esc_html_e('Страница не найдена', 'energostandart'); ?></h1>
		<p class="es-page__lead"><?php esc_html_e('Проверьте адрес или вернитесь на главную.', 'energostandart'); ?></p>
		<p>
			<a class="es-btn es-btn--primary" href="<?php echo esc_url($es_home); ?>"><?php esc_html_e('На главную', 'energostandart'); ?></a>
		</p>
	</div>
</div>

<?php
get_footer();
