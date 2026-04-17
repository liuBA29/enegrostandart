<?php
if (!defined('ABSPATH')) {
	exit;
}

$es_home = home_url('/');
$es_nav_link = static function ($slug, $anchor) use ($es_home) {
	$page = get_page_by_path($slug);
	if ($page instanceof WP_Post) {
		return get_permalink($page);
	}

	return $es_home . $anchor;
};
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="es-header">
	<div class="es-container es-header__inner">
		<a class="es-logo" href="<?php echo esc_url($es_home); ?>">
			<?php bloginfo('name'); ?>
		</a>

		<nav class="es-nav es-nav--desktop" aria-label="<?php esc_attr_e('Основное меню', 'energostandart'); ?>">
			<a href="<?php echo esc_url($es_home . '#home'); ?>"><?php esc_html_e('Главная', 'energostandart'); ?></a>
			<a href="<?php echo esc_url($es_nav_link('services', '#services')); ?>"><?php esc_html_e('Услуги', 'energostandart'); ?></a>
			<a href="<?php echo esc_url($es_nav_link('projects', '#projects')); ?>"><?php esc_html_e('Проекты', 'energostandart'); ?></a>
			<a href="<?php echo esc_url($es_nav_link('contacts', '#contacts')); ?>"><?php esc_html_e('Контакты', 'energostandart'); ?></a>
		</nav>

		<div class="es-header__tail">
			<details class="es-nav-drawer">
				<summary class="es-nav-drawer__btn" aria-label="<?php esc_attr_e('Открыть меню', 'energostandart'); ?>">
					<span class="es-nav-drawer__icon" aria-hidden="true"></span>
					<span class="es-nav-drawer__label"><?php esc_html_e('Меню', 'energostandart'); ?></span>
				</summary>
				<div class="es-nav-drawer__panel">
					<nav class="es-nav es-nav--mobile" aria-label="<?php esc_attr_e('Мобильное меню', 'energostandart'); ?>">
						<a href="<?php echo esc_url($es_home . '#home'); ?>"><?php esc_html_e('Главная', 'energostandart'); ?></a>
						<a href="<?php echo esc_url($es_nav_link('services', '#services')); ?>"><?php esc_html_e('Услуги', 'energostandart'); ?></a>
						<a href="<?php echo esc_url($es_nav_link('projects', '#projects')); ?>"><?php esc_html_e('Проекты', 'energostandart'); ?></a>
						<a href="<?php echo esc_url($es_nav_link('contacts', '#contacts')); ?>"><?php esc_html_e('Контакты', 'energostandart'); ?></a>
					</nav>
				</div>
			</details>

			<a class="es-btn es-btn--primary es-header__cta" href="<?php echo esc_url($es_home); ?>#contacts"><?php esc_html_e('Оставить заявку', 'energostandart'); ?></a>
		</div>
	</div>
</header>

<main id="primary" class="site-main">
