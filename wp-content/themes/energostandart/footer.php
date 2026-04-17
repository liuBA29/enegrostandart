<?php
if (!defined('ABSPATH')) {
	exit;
}
?>

</main>

<footer class="es-footer">
	<div class="es-container">
		<div class="es-footer__grid">
			<div>
				<div class="es-footer__logo"><?php esc_html_e('энергостандарт', 'energostandart'); ?></div>
				<nav class="es-footer__menu">
					<a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Услуги', 'energostandart'); ?></a>
					<a href="<?php echo esc_url(home_url('/projects/')); ?>"><?php esc_html_e('Портфолио', 'energostandart'); ?></a>
					<a href="<?php echo esc_url(home_url('/contacts/')); ?>"><?php esc_html_e('Контакты', 'energostandart'); ?></a>
				</nav>
			</div>
			<div>
				<h2 class="es-footer__title"><?php esc_html_e('Адреса', 'energostandart'); ?></h2>
				<div class="es-footer__contacts">
					<span><?php esc_html_e('Центральный офис: г. Москва, ул. Советская, 15, офис 159', 'energostandart'); ?></span>
					<span><?php esc_html_e('Юридический адрес: РТ, г. Набережные Челны, Хлебный проезд, д.30, оф. 305Б', 'energostandart'); ?></span>
				</div>
			</div>
			<div>
				<h2 class="es-footer__title"><?php esc_html_e('Связь', 'energostandart'); ?></h2>
				<div class="es-footer__contacts">
					<span><?php esc_html_e('Пн-пт: 8:00 до 17:00', 'energostandart'); ?></span>
					<a href="mailto:centre@16es.ru">centre@16es.ru</a>
					<a href="tel:+79270480056">+7 927 048-00-56</a>
					<a href="tel:+78552780056">+7 8552 78-00-56</a>
				</div>
			</div>
		</div>
		<div class="es-footer__copy">
			<?php
			echo esc_html(
				sprintf(
					/* translators: year */
					__('© %s Энергостандарт', 'energostandart'),
					gmdate('Y')
				)
			);
			?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
