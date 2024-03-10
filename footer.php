<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orchid_Store
 */

?>
</div><!-- #content.site-title -->

<footer class="footer secondary-widget-area">
	<div class="footer-inner">
		<div class="footer-mask">
			<div class="footer-contact-form">
				<div class="container">
					<div class="row">
						<div class="col-24">
							<!-- <header class="contact-form_header">
								<div class="contact-form_headline">Быстрый заказ</div>
								<div class="contact-form_sub-headline">мы поможем подобрать нужное оборудование
								</div>
							</header> -->
							<?php echo do_shortcode('[contact-form-7 id="9f89b76" title="Главная модальная форма"]'); ?>
							<!-- <form class="form">
								<div class="form-column">
									<input type="text" class="form-control" placeholder="Ваше имя *" required>
									<input type="text" class="form-control" placeholder="E-mail*" required>
									<input type="text" class="form-control" placeholder="Телефон *" required>
								</div>
								<div class="form-column">
									<textarea class="form-control form-control--two-inputs" placeholder="Текст заявки"
										rows="3"></textarea>
									<button type="submit" class="contact-form_button">
										<span class="button-body">Отправить</span>
										<span class="button-icon">
											<span class="fa-stack fa-sm">
												<i class="far fa-circle fa-stack-2x"></i>
												<i class="fas fa-angle-right fa-stack-1x"></i>
											</span>
										</span>
									</button>
								</div>
							</form> -->
						</div>
					</div>
				</div>
			</div>
			<div class="__os-container__">

				<div class="footer-entry">
					<div class="row row-footer">
						<div class="col-4"><a href="https://aso.loc/" class="custom-logo-link" rel="home"
								aria-current="page"><img
									src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/aco-logo.jpg"
									class="custom-logo" alt="asobezh-msk.ru" decoding="async"></a></div>
						<div class="col-5 footer_menu_center">
							<div class="col-6">
								<div class="footer_main">

									<div class="footer_list">
										<div class="footer_list_item">
											<p class="tel"><a href="https://asobezh-msk.ru/o-kompanii/">О
													компании</a></p>
										</div>
										<div class="footer_list_item">
											<p class="tel"><a
													href="https://asobezh-msk.ru/product-category/vintovye-kompressory/">Винтовые
													компрессоры</a></p>
										</div>
										<div class="footer_list_item">
											<p class="tel"><a
													href="https://asobezh-msk.ru/product-category/porshnevye-kompressory/">Поршневые
													компрессоры</a></p>
										</div>
										<div class="footer_list_item">
											<p class="tel"><a
													href="https://asobezh-msk.ru/product-category/podgotovka-vozdukha/">Подготовка
													воздуха</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="footer_main footer_center">
									<div class="footer_list">

										<div class="footer_list_item">
											<p class="tel"><a
													href="https://asobezh-msk.ru/product-category/peskostruynoe-oborudovanie/">Пескоструйка</a>
											</p>
										</div>
										<div class="footer_list_item">
											<p class="tel"><a
													href="https://asobezh-msk.ru/product-category/zapchasty/">Запчасти</a>
											</p>
										</div>
										<div class="footer_list_item">
											<p class="tel"><a href="https://asobezh-msk.ru/servis/">Сервис</a></p>
										</div>
										<div class="footer_list_item">
											<p class="tel"><a href="https://asobezh-msk.ru/kontakty/">Контакты</a>
											</p>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-3">
							<div class="footer_contact">
								<div class="footer_contact_link">
									<div class="header_contact_link_icon fa-stack fa-md">
										<i class="fa fa-envelope fa-footer"></i>
									</div>
									<a class="mail_a" onclick="yaCounter49417606.reachGoal('email_clicked');"
										href="mailto:aso@asobezh-msk.ru">aso@asobezh-msk.ru</a>
								</div>
								<div class="footer_contact_link">
									<div class="header_contact_link_icon fa-stack fa-md fa-stack-pone">
										<i class="fa fa-phone fa-footer"></i>
									</div>
									<a onclick="yaCounter49417606.reachGoal('phone_clicked');"
										href="tel:+74951524499">+7 (495) 152-44-99</a>
								</div>
							</div>
						</div> <!-- .row -->
						<?php
						if (orchid_store_get_option('display_footer_widget_area')) {

							$orchid_store_footer_widget_area_no = orchid_store_get_option('footer_widgets_area_columns');
							?>
							<div class="footer-top columns-<?php echo esc_attr($orchid_store_footer_widget_area_no); ?>">
								<div class="row">
									<?php
									if (!empty($orchid_store_footer_widget_area_no)) {

										for ($orchid_store_count = 1; $orchid_store_count <= $orchid_store_footer_widget_area_no; $orchid_store_count++) {
											$orchid_store_sidebar_id = 'footer-' . $orchid_store_count;
											?>
											<div class="os-col column">
												<?php
												if (is_active_sidebar($orchid_store_sidebar_id)) {
													dynamic_sidebar($orchid_store_sidebar_id);
												}
												?>
											</div><!-- .col -->
											<?php
										}
									}
									?>
								</div><!-- .row -->
							</div><!-- .footer-top -->
							<?php
						}
						?>
						<div class="footer-bottom">
							<div class="os-row">
								<div class="os-col copyrights-col">
									<div class="col-24 footer_copyright text-center">
										<p>© 2015-2024. Все права сохранены. Копирование материалов с сайта без
											разрешения
											запрещено!</p>
									</div>
									<?php
									/**
									 * Hook - orchid_store_footer_left.
									 *
									 * @hooked orchid_store_footer_left_action - 10
									 */
									do_action('orchid_store_footer_left');
									?>
								</div><!-- .os-col -->
								<div class="os-col">
									<?php
									/**
									 * Hook - orchid_store_footer_right.
									 *
									 * @hooked orchid_store_footer_right_action - 10
									 */
									do_action('orchid_store_footer_right');
									?>
								</div><!-- .os-col -->
							</div><!-- .os-row -->
						</div><!-- .footer-bottom -->
					</div><!-- .footer-entry -->
				</div><!-- .__os-container__ -->

			</div><!-- .footer-mask -->
		</div><!-- .footer-inner -->
</footer><!-- .footer -->

<?php
if (orchid_store_get_option('display_scroll_top_button')) {
	?>
	<div class="orchid-backtotop">
		<span>
			<i class="bx bx-chevron-up"></i>
		</span>
	</div>
	<?php
}
?>

</div><!-- .__os-page-wrap__ -->

<?php wp_footer(); ?>

</body>

</html>