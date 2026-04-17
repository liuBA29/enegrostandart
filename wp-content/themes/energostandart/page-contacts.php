<?php
/**
 * Contacts page template.
 */
if (!defined('ABSPATH')) {
	exit;
}

get_header();

$status = isset($_GET['es_form']) ? sanitize_key(wp_unslash($_GET['es_form'])) : '';
?>

<section class="es-page">
	<div class="es-container">
		<header class="es-page__header">
			<h1 class="es-page__title"><?php esc_html_e('Контакты', 'energostandart'); ?></h1>
			<p class="es-page__lead">
				<?php esc_html_e('Оставьте заявку через форму, и менеджер свяжется с вами в рабочее время.', 'energostandart'); ?>
			</p>
		</header>

		<div class="es-contact">
			<div class="es-contact__info">
				<p><strong><?php esc_html_e('Телефон:', 'energostandart'); ?></strong> <a href="tel:+70000000000">+7 (000) 000-00-00</a></p>
				<p><strong><?php esc_html_e('Email:', 'energostandart'); ?></strong> <a href="mailto:info@energostandart.ru">info@energostandart.ru</a></p>
				<p><strong><?php esc_html_e('Адрес:', 'energostandart'); ?></strong> <?php esc_html_e('г. Москва, ул. Примерная, 1', 'energostandart'); ?></p>
			</div>

			<div class="es-contact__cta">
				<?php if ($status === 'success') : ?>
					<p class="es-form__notice es-form__notice--success"><?php esc_html_e('Спасибо! Заявка отправлена.', 'energostandart'); ?></p>
				<?php elseif ($status === 'required') : ?>
					<p class="es-form__notice es-form__notice--error"><?php esc_html_e('Заполните имя и телефон.', 'energostandart'); ?></p>
				<?php elseif ($status === 'error') : ?>
					<p class="es-form__notice es-form__notice--error"><?php esc_html_e('Не удалось отправить заявку. Попробуйте еще раз.', 'energostandart'); ?></p>
				<?php endif; ?>

				<form class="es-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
					<input type="hidden" name="action" value="es_contact_request">
					<?php wp_nonce_field('es_contact_form_submit', 'es_contact_nonce'); ?>

					<label class="es-form__field">
						<span><?php esc_html_e('Ваше имя', 'energostandart'); ?></span>
						<input type="text" name="es_name" required>
					</label>

					<label class="es-form__field">
						<span><?php esc_html_e('Телефон', 'energostandart'); ?></span>
						<input type="text" name="es_phone" required>
					</label>

					<label class="es-form__field">
						<span><?php esc_html_e('Комментарий', 'energostandart'); ?></span>
						<textarea name="es_message" rows="4"></textarea>
					</label>

					<button class="es-btn es-btn--primary" type="submit"><?php esc_html_e('Отправить заявку', 'energostandart'); ?></button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
