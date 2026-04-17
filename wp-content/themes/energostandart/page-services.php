<?php
/**
 * Services page template.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<section class="es-page">
	<div class="es-container">
		<header class="es-page__header">
			<h1 class="es-page__title"><?php esc_html_e('Услуги', 'energostandart'); ?></h1>
			<p class="es-page__lead">
				<?php esc_html_e('Выполняем промышленное строительство под ключ: от идеи и документации до готового объекта.', 'energostandart'); ?>
			</p>
		</header>

		<div class="es-grid es-grid--services">
			<article class="es-card">
				<h3><?php esc_html_e('Проектирование', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Генеральное проектирование, рабочая документация и прохождение экспертизы.', 'energostandart'); ?></p>
			</article>
			<article class="es-card">
				<h3><?php esc_html_e('Строительно-монтажные работы', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Фундаменты, металлоконструкции, ограждающие конструкции и внутренние работы.', 'energostandart'); ?></p>
			</article>
			<article class="es-card">
				<h3><?php esc_html_e('Инженерные системы', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Электроснабжение, вентиляция, отопление, пожарная сигнализация и автоматизация.', 'energostandart'); ?></p>
			</article>
		</div>
	</div>
</section>

<?php
get_footer();
