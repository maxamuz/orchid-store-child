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
										<p>Удобный, доступный и простой источник сжатого воздуха для циклических работ</p>
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
										Поршневые компрессоры
										<p>Удобный, доступный и простой источник сжатого воздуха для циклических работ</p>
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
										Поршневые компрессоры
										<p>Удобный, доступный и простой источник сжатого воздуха для циклических работ</p>
									</div>
									<div class="group_item_short-desc"></div>
									<div class="group_item_image">
										<img src="/wp-content/themes/aco-child/src/img/cats-on-main/porsh2.png">
									</div>
								</a>
							</div>
							<div class="col-md-6"><a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
									<div class="group_item_name">
										Поршневые компрессоры
										<p>Удобный, доступный и простой источник сжатого воздуха для циклических работ</p>
									</div>
									<div class="group_item_short-desc"></div>
									<div class="group_item_image">
										<img src="/wp-content/themes/aco-child/src/img/cats-on-main/porsh2.png">
									</div>
								</a></div>
						</div>
					</div>
				</div>
			</section>