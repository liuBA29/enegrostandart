<?php
/**
 * Single post template.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<div class="es-page es-page--single">
	<div class="es-container">
		<?php
		while (have_posts()) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('es-page__article'); ?>>
				<header class="es-page__header">
					<h1 class="es-page__title"><?php the_title(); ?></h1>
					<div class="es-post-card__meta">
						<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
					</div>
				</header>
				<div class="es-page__content entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		}
		?>
	</div>
</div>

<?php
get_footer();
