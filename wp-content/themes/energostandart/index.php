<?php
/**
 * Blog / archive index.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<div class="es-page es-page--archive">
	<div class="es-container">
		<header class="es-page__header">
			<h1 class="es-page__title"><?php esc_html_e('Новости', 'energostandart'); ?></h1>
			<p class="es-page__lead"><?php esc_html_e('Анонсы проектов, публикации и обновления компании.', 'energostandart'); ?></p>
		</header>

		<?php if (have_posts()) : ?>
			<div class="es-post-list">
				<?php
				while (have_posts()) {
					the_post();
					?>
					<article <?php post_class('es-post-card'); ?>>
						<h2 class="es-post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="es-post-card__meta">
							<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
						</div>
						<div class="es-post-card__excerpt entry-content">
							<?php the_excerpt(); ?>
						</div>
						<p class="es-post-card__more">
							<a class="es-btn es-btn--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e('Читать далее', 'energostandart'); ?></a>
						</p>
					</article>
					<?php
				}
				?>
			</div>

			<nav class="es-pagination" aria-label="<?php esc_attr_e('Навигация по страницам', 'energostandart'); ?>">
				<?php
				the_posts_pagination(
					array(
						'mid_size'  => 1,
						'prev_text' => __('Назад', 'energostandart'),
						'next_text' => __('Вперёд', 'energostandart'),
					)
				);
				?>
			</nav>
		<?php else : ?>
			<p><?php esc_html_e('Записей пока нет.', 'energostandart'); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
