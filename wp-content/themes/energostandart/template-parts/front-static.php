<?php
/**
 * Fallback landing markup when the front page is not built in Elementor / empty.
 */
if (!defined('ABSPATH')) {
	exit;
}
?>

<section id="home" class="es-hero">
	<div class="es-container">
		<div class="es-hero__stack">
			<div class="es-hero__intro">
				<h1 class="es-hero__title">
					<?php esc_html_e('Строительство промышленных зданий и сооружений «под ключ»', 'energostandart'); ?>
				</h1>
				<p class="es-hero__lead">
					<?php esc_html_e('Выполняем полный цикл работ: проектирование, строительно-монтажные работы, инженерные сети и сдача объекта в эксплуатацию.', 'energostandart'); ?>
				</p>
				<a class="es-btn es-btn--primary" href="#contacts"><?php esc_html_e('Оставить заявку', 'energostandart'); ?></a>
			</div>

			<div class="es-hero__media">
				<img
					src="<?php echo esc_url(get_template_directory_uri() . '/assets/hero-main.png'); ?>"
					alt="<?php esc_attr_e('Промышленное строительство', 'energostandart'); ?>"
					loading="eager"
					decoding="async"
				>
			</div>
		</div>
	</div>
</section>

<section id="services" class="es-section">
	<div class="es-container">
		<h2 class="es-section__title"><?php esc_html_e('Организовываем строительство объектов под ваш проект', 'energostandart'); ?></h2>
		<p class="es-section__lead">
			<?php esc_html_e('Берем на себя проектирование, монтаж, пусконаладку, сервис и дальнейшее сопровождение объекта.', 'energostandart'); ?>
		</p>
		<div class="es-services-grid">
			<article class="es-service-card es-service-card--dark">
				<h3><?php esc_html_e('Монтаж энергосистем', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Для промышленных предприятий и складов.', 'energostandart'); ?></p>
				<a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Все услуги', 'energostandart'); ?></a>
			</article>
			<article class="es-service-card">
				<h3><?php esc_html_e('Пусконаладочные работы', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Промышленное оборудование и инженерные сети.', 'energostandart'); ?></p>
				<a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Все услуги', 'energostandart'); ?></a>
			</article>
			<article class="es-service-card">
				<h3><?php esc_html_e('Обслуживание и ремонт', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Сервис промышленного оборудования.', 'energostandart'); ?></p>
				<a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Все услуги', 'energostandart'); ?></a>
			</article>
			<article class="es-service-card">
				<h3><?php esc_html_e('Проектирование', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Техническая документация и согласования.', 'energostandart'); ?></p>
				<a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Все услуги', 'energostandart'); ?></a>
			</article>
			<article class="es-service-card">
				<h3><?php esc_html_e('Строительство', 'energostandart'); ?></h3>
				<p><?php esc_html_e('Строительство промышленных сооружений под ключ.', 'energostandart'); ?></p>
				<a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Все услуги', 'energostandart'); ?></a>
			</article>
		</div>
	</div>
</section>

<section class="es-section es-section--alt es-geo">
	<div class="es-container">
		<h2 class="es-section__title"><?php esc_html_e('Работаем по всей России', 'energostandart'); ?></h2>
		<p class="es-section__lead"><?php esc_html_e('География возможных объектов — любой субъект РФ.', 'energostandart'); ?></p>
		<div class="es-geo-kpis">
			<article class="es-kpi-card">
				<strong>> 11 лет</strong>
				<span><?php esc_html_e('на рынке строительства', 'energostandart'); ?></span>
			</article>
			<article class="es-kpi-card">
				<strong>> 21 шт</strong>
				<span><?php esc_html_e('собственный парк техники', 'energostandart'); ?></span>
			</article>
			<article class="es-kpi-card">
				<strong>> 2000</strong>
				<span><?php esc_html_e('единиц ручного инструмента', 'energostandart'); ?></span>
			</article>
			<article class="es-kpi-card">
				<strong>700 м²</strong>
				<span><?php esc_html_e('площадь производственной базы', 'energostandart'); ?></span>
			</article>
		</div>
		<div class="es-map-mock" role="img" aria-label="<?php esc_attr_e('Карта присутствия по регионам России', 'energostandart'); ?>"></div>
	</div>
</section>

<section id="projects" class="es-section">
	<div class="es-container">
		<h2 class="es-section__title"><?php esc_html_e('Портфолио', 'energostandart'); ?></h2>
		<p class="es-section__lead"><?php esc_html_e('Часть реализованных объектов. На отдельной странице покажем полный список работ.', 'energostandart'); ?></p>
		<div class="es-portfolio-grid">
			<article class="es-portfolio-card">
				<div class="es-portfolio-card__media"></div>
				<p class="es-portfolio-card__city"><?php esc_html_e('г. Ульяновск', 'energostandart'); ?></p>
				<h3><?php esc_html_e('Монтаж и подключение энергосистем цеха сварки', 'energostandart'); ?></h3>
			</article>
			<article class="es-portfolio-card">
				<div class="es-portfolio-card__media"></div>
				<p class="es-portfolio-card__city"><?php esc_html_e('д. Коледино', 'energostandart'); ?></p>
				<h3><?php esc_html_e('Монтаж 3х уровневой сортировочной системы', 'energostandart'); ?></h3>
			</article>
			<article class="es-portfolio-card">
				<div class="es-portfolio-card__media"></div>
				<p class="es-portfolio-card__city"><?php esc_html_e('ОЭЗ Алабуга', 'energostandart'); ?></p>
				<h3><?php esc_html_e('Комплекс работ на действующем заводе', 'energostandart'); ?></h3>
			</article>
		</div>
		<p class="es-section__more"><a href="<?php echo esc_url(home_url('/projects/')); ?>"><?php esc_html_e('Смотреть все проекты', 'energostandart'); ?></a></p>
	</div>
</section>

<section class="es-section es-section--alt">
	<div class="es-container">
		<h2 class="es-section__title"><?php esc_html_e('Наши преимущества', 'energostandart'); ?></h2>
		<div class="es-adv-grid">
			<div class="es-adv-card"><?php esc_html_e('Работаем в любом регионе России', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Гибкость процессов и сроков', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Собственный парк техники', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Полный комплект разрешительной документации', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Надежный штат специалистов', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Аттестованный персонал', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Заинтересованность в результате', 'energostandart'); ?></div>
			<div class="es-adv-card"><?php esc_html_e('Реализация проектов под ключ', 'energostandart'); ?></div>
		</div>
	</div>
</section>

<section class="es-section">
	<div class="es-container">
		<h2 class="es-section__title"><?php esc_html_e('Нам доверяют', 'energostandart'); ?></h2>
		<div class="es-logos">
			<span>Sollers</span>
			<span>LADA</span>
			<span>Rockwool</span>
			<span>Почта России</span>
			<span>UAZ</span>
			<span>Wildberries</span>
			<span>Ozon</span>
			<span>СИБУР</span>
		</div>
	</div>
</section>

<section class="es-section">
	<div class="es-container">
		<div class="es-cta-banner">
			<div>
				<h2><?php esc_html_e('Хотите получить расчет полной стоимости услуги?', 'energostandart'); ?></h2>
				<p><?php esc_html_e('Оставьте заявку, и мы свяжемся с вами для обсуждения деталей.', 'energostandart'); ?></p>
				<a class="es-btn es-btn--primary" href="<?php echo esc_url(home_url('/contacts/')); ?>"><?php esc_html_e('Заказать расчет', 'energostandart'); ?></a>
			</div>
			<div class="es-cta-banner__shape" aria-hidden="true"></div>
		</div>
	</div>
</section>

<section id="contacts" class="es-section es-section--alt">
	<div class="es-container">
		<h2 class="es-section__title"><?php esc_html_e('Контакты', 'energostandart'); ?></h2>
		<div class="es-contact-cards">
			<div class="es-mini-card"><?php esc_html_e('Пн-пт: 8:00 до 17:00', 'energostandart'); ?></div>
			<div class="es-mini-card es-mini-card--dark"><a href="mailto:centre@16es.ru">centre@16es.ru</a></div>
			<div class="es-mini-card"><a href="tel:+79270480056">+7 927 048-00-56</a></div>
			<div class="es-mini-card"><a href="tel:+78552780056">+7 8552 78-00-56</a></div>
		</div>
		<div class="es-contact-layout">
			<div class="es-contact-list">
				<div class="es-contact-item">
					<h3><?php esc_html_e('Центральный офис', 'energostandart'); ?></h3>
					<p><?php esc_html_e('423800, Россия, г. Москва, ул. Советская, 15, офис 159', 'energostandart'); ?></p>
				</div>
				<div class="es-contact-item">
					<h3><?php esc_html_e('Юридический адрес', 'energostandart'); ?></h3>
					<p><?php esc_html_e('423800, Россия, Республика Татарстан, г. Набережные Челны, Хлебный проезд, д.30, оф. 305Б', 'energostandart'); ?></p>
				</div>
				<div class="es-contact-item">
					<h3><?php esc_html_e('Производство / Склад', 'energostandart'); ?></h3>
					<p><?php esc_html_e('423800, Россия, Республика Татарстан, г. Набережные Челны, Хлебный проезд, д.30, оф. 305Б', 'energostandart'); ?></p>
				</div>
				<a class="es-btn es-btn--primary" href="<?php echo esc_url(home_url('/contacts/')); ?>"><?php esc_html_e('Скачать реквизиты', 'energostandart'); ?></a>
			</div>
			<div class="es-map-city" role="img" aria-label="<?php esc_attr_e('Схема проезда', 'energostandart'); ?>"></div>
		</div>
	</div>
</section>
