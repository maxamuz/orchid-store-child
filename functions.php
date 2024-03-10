<?php
require get_stylesheet_directory() . '/inc/custom-hooks.php';

/* Remove Copyright Footer*/

remove_action('orchid_store_footer_left', 'orchid_store_footer_left_action', 10);

add_action('wp_enqueue_scripts', 'true_no_css', 999);

function true_no_css()
{

	wp_dequeue_style('orchid-store-style');

}

function my_style_load()
{
	wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/style.css', ['orchid-store-main-style']);
	wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'my_style_load');

add_action('orchid_store_product_search', 'email_tel_top', 8);

function email_tel_top()
{
	echo '<div class="header_contact">
			<div class="header_contact_link">
				<div class="header_contact_link_icon fa-stack fa-md">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<a class="mail_a" href="mailto:manager@asobezh-msk.ru">manager@asobezh-msk.ru</a>
			</div>
			<div class="header_contact_link">
				<div class="header_contact_link_icon fa-stack fa-md">
				<i class="fa fa-phone" aria-hidden="true"></i>
				</div>
				<a class="pone_class" href="tel:+74951896705">+7 (495) 189-67-05</a>
				</div>
			</div>';
}

add_action('orchid_store_desktop_site_identity', 'description_title_top', 11);

function description_title_top()
{
	echo '<div class="logo_block_text">
		ООО "ПНЕВМОТЕХ" - торговый представитель Бежецкого завода "АСО".
			</div>';
}



