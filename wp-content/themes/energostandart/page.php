<?php
/**
 * Default page template.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<div class="es-page">
	<div class="es-container">
		<?php
		while (have_posts()) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('es-page__article'); ?>>
				<header class="es-page__header">
					<?php the_title('<h1 class="es-page__title">', '</h1>'); ?>
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
