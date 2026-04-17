<?php
/**
 * Projects page template.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<section class="es-page">
	<div class="es-container">
		<header class="es-page__header">
			<h1 class="es-page__title"><?php esc_html_e('Проекты', 'energostandart'); ?></h1>
			<p class="es-page__lead">
				<?php esc_html_e('Примеры объектов, реализованных командой Энергостандарт для промышленного и коммерческого сектора.', 'energostandart'); ?>
			</p>
		</header>

		<div class="es-grid es-grid--projects">
			<article class="es-card">
				<h3><?php esc_html_e('Производственный корпус', 'energostandart'); ?></h3>
				<p><?php esc_html_e('4 800 м², полный цикл работ, срок реализации 11 месяцев.', 'energostandart'); ?></p>
			</article>
			<article class="es-card">
				<h3><?php esc_html_e('Логистический центр', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Комплекс складов с офисной частью и инженерной инфраструктурой.', 'energostandart'); ?></p>
			</article>
			<article class="es-card">
				<h3><?php esc_html_e('Модернизация энергоблока', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Реконструкция действующего объекта без длительной остановки производства.', 'energostandart'); ?></p>
			</article>
		</div>
	</div>
</section>

<?php
get_footer();
