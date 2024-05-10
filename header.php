<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orchid_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>
	<div id="page" class="site __os-page-wrap__">

		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e('Skip to content', 'orchid-store'); ?>
		</a>

		<?php
		/**
		 * Hook - orchid_store_header.
		 *
		 * @hooked orchid_store_header_action - 10
		 */
		do_action('orchid_store_header');
		?>

		<div id="content" class="site-content">
			<div class="slider-top">
				<?php
				echo do_shortcode('[smartslider3 slider="2"]');
				?>
			</div>
			<section class="container-fluid container-background">
				<div class="__os-container__">
					<div class="aso-content">
						<div class="aso-content-header">
							<h2>Каталог бежецких компрессоров</h2>
						</div>
						<div class="row group_items">
							<div class="col-md-6">
								<a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
									<div class="group_item_name">
										Поршневые компрессоры
										<p>Удобный, доступный и простой источник сжатого воздуха для циклических работ
										</p>
									</div>
									<div class="group_item_short-desc"></div>
									<div class="group_item_image">
										<img src="/wp-content/themes/aco-child/src/img/cats-on-main/porsh2.png">
									</div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
									<div class="group_item_name">
										Винтовые компрессоры
										<p>Надежные установки для производства воздуха в промышленных масштабах</p>
									</div>
									<div class="group_item_short-desc"></div>
									<div class="group_item_image">
										<img src="/wp-content/themes/aco-child/src/img/cats-on-main/vint2.png">
									</div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
									<div class="group_item_name">
										Подготовка воздуха
										<p>Проверенные и эффективные системы осушки, очистки и хранения сжатого воздуха
										</p>
									</div>
									<div class="group_item_short-desc"></div>
									<div class="group_item_image">
										<img src="/wp-content/themes/aco-child/src/img/cats-on-main/resiver2.png">
									</div>
								</a>
							</div>
							<div class="col-md-6"><a href="/product-category/porshnevye-kompressory/"
									class="group_item group_anime">
									<div class="group_item_name">
										Пескоструйное оборудование
										<p>Оптимальные и выгодные решения для очистки поверхностей любой площади</p>
									</div>
									<div class="group_item_short-desc"></div>
									<div class="group_item_image">
										<img src="/wp-content/themes/aco-child/src/img/cats-on-main/peskostruika2.png">
									</div>
								</a></div>
						</div>
					</div>
				</div>
			</section>
			<section class="container-fluid container-advantages">
				<div class="__os-container__">
					<div class="aso-content-header">
						<h2>Бежецкий завод АСО и его преимущества</h2>
					</div>
					<div class="row">
						<div class="col-md-4 advantage-right">
							<div class="advantage_headline">НАШЕ ГЛАВНОЕ ПРЕИМУЩЕСТВО - ВЕКОВЫЕ ТРАДИЦИИ КАЧЕСТВА!
							</div>
						</div>

						<div class="col-md-2 advantage advantage--1">
							<div class="advantage_image">
								<img src="/wp-content/themes/aco-child/src/img/icon-budgetary.png">
							</div>
							<p class="advantage_heading">Бюджетное</p>
							<p class="advantage_text"> ценообразование</p>
						</div>
						<div class="col-md-2 advantage advantage--2">
							<div class="advantage_image">
								<img src="/wp-content/themes/aco-child/src/img/icon-budgetary.png">
							</div>
							<p class="advantage_heading">Бюджетное</p>
							<p class="advantage_text"> ценообразование</p>
						</div>
						<div class="col-md-2 advantage advantage--3">
							<div class="advantage_image">
								<img src="/wp-content/themes/aco-child/src/img/icon-budgetary.png">
							</div>
							<p class="advantage_heading">Бюджетное</p>
							<p class="advantage_text"> ценообразование</p>
						</div>
						<div class="col-md-2 advantage advantage--4">
							<div class="advantage_image">
								<img src="/wp-content/themes/aco-child/src/img/icon-budgetary.png">
							</div>
							<p class="advantage_heading">Бюджетное</p>
							<p class="advantage_text"> ценообразование</p>
						</div>
					</div>
					<div class="row">
						<div class="benefits_text">
							<p>
								История Бежецкого завода "АСО" берет свое начало с сентября 1917 года. В 2017 году
								заводчане отметили юбилей завода — 100-летие со дня основания. А свой первый компрессор
								завод выпустил более 85 лет назад в 1932 году. Все это время мы ведем постоянную работу
								над улучшением нашей продукции, внедряем новые технологические процессы, модернизируем
								станочный парк, разрабатываем новые энергоэффективные модели компрессоров.</p>
							<p>
								Мы понимаем важность качества и стабильности работы оборудования, поэтому ни один
								компрессор не уходит с завода без индивидуальной проверки. Репутация нашего завода
								основана на надежности и качестве продукции, работающей в различных областях
								промышленности. Успех, в первую очередь, обусловлен собственной инженерно-проектной
								базой и безукоризненными стандартами контроля производства. А словосочетание “Бежецкий
								компрессор”, является синонимом качества и надежности.
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="container-fluid container-recommend">
				<div class="__os-container__">
					<div class="aso-content-header">
						<h2>Рекомендуем</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 featured_left recommend_background">

						</div>
						<div class="col-lg-9">
							<div id="carousel_blok" class="recommend_blok owl-carousel owl-theme">
								<?php
								$params = array(
									'posts_per_page' => 3,
									'post_type' => 'product',
									'product_cat' => 'vintovye-kompressory'
								); // (1)
								$wc_query = new WP_Query($params); // (2)
								?>
								<?php if ($wc_query->have_posts()): // (3) ?>
									<?php while ($wc_query->have_posts()): // (4)
												$wc_query->the_post(); // (4.1) ?>
										<div class="recommend_blok_product">
											<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); // (4.2) ?></a>
											<a href="<?php the_permalink() ?>">
												<h5><?php the_title(); // (4.2) ?></h5>
											</a>
											<?php the_excerpt(); // (4.2) ?>
										</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); // (5) ?>
								<?php else: ?>
									<p>
										<?php _e('No Products'); // (6) ?>
									</p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	</section>

	<section class="container-fluid container-news">
		<div class="__os-container__">
			<div class="aso-content-header">
				<h2>Новости компании</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 featured_left new_background">

				</div>
				<div class="col-lg-9">
					<div class="row">
						<?php
						// параметры по умолчанию
						$my_posts = get_posts(
							array(
								'numberposts' => 3,
								'order' => 'DESC',
								'post_type' => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							)
						);

						global $post;

						foreach ($my_posts as $post) {
							setup_postdata($post); ?>

							<div class="col-4">
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<a href="<?php echo get_permalink(); ?>">
									<h5>
										<?php the_title(); ?>
									</h5>
								</a>
								<p>
									<?php the_excerpt(); ?>
								</p>
							</div>
							<?php
						}

						wp_reset_postdata(); // сброс
						?>
					</div>
				</div>
			</div>
		</div>
	</section>