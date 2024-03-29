<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Orchid_Store
 */

if ( ! function_exists( 'orchid_store_body_classes' ) ) {
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @since 1.0.0
	 *
	 * @param array $classes Class for the body element.
	 * @return array
	 */
	function orchid_store_body_classes( $classes ) {

		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {

			$classes[] = 'hfeed';
		}

		// Adds a class of no-sidebar when there is no sidebar present.
		if ( 'none' === orchid_store_sidebar_position() ) {

			$classes[] = 'no-sidebar';
		}

		// Adds a class of boxed.
		if ( orchid_store_get_option( 'site_layout' ) === 'boxed' ) {

			$classes[] = 'boxed';
		}

		return $classes;
	}

	add_filter( 'body_class', 'orchid_store_body_classes' );
}


if ( ! function_exists( 'orchid_store_pingback_header' ) ) {
	/**
	 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_pingback_header() {

		if ( is_singular() && pings_open() ) {

			printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}

	add_action( 'wp_head', 'orchid_store_pingback_header' );
}


if ( ! function_exists( 'orchid_store_post_classes' ) ) {
	/**
	 * Adds custom class to the array of post classes.
	 *
	 * @since 1.0.0
	 *
	 * @param array $classes Class for the post article element.
	 * @return array
	 */
	function orchid_store_post_classes( $classes ) {

		$show_featured_image = '';

		if ( is_home() ) {

			$show_featured_image = orchid_store_get_option( 'blog_featured_image' );
		}

		if ( is_archive() ) {

			$show_featured_image = orchid_store_get_option( 'archive_featured_image' );
		}

		if ( is_search() ) {

			$show_featured_image = orchid_store_get_option( 'search_featured_image' );
		}

		if ( ! is_singular() ) {

			if ( ! $show_featured_image ) {

				$class_key = array_search( 'has-post-thumbnail', $classes, true );

				unset( $classes[ $class_key ] );
			}
		}

		return $classes;
	}

	add_filter( 'post_class', 'orchid_store_post_classes' );
}


if ( ! function_exists( 'orchid_store_sidebar_class' ) ) {
	/**
	 * Function to set sidebar class.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_sidebar_class() {

		$sidebar_class = 'col-desktop-4 sidebar-col col-tab-100 col-mob-100';

		$sidebar_position = orchid_store_sidebar_position();

		$is_sticky = orchid_store_get_option( 'enable_sticky_sidebar' );

		$enable_on_small_devices = orchid_store_get_option( 'enable_sidebar_small_devices' );

		if ( $is_sticky && 'none' !== $sidebar_position ) {
			$sidebar_class .= ' sticky-portion';
		}

		if ( ! $enable_on_small_devices && 'none' !== $sidebar_position ) {
			$sidebar_class .= ' hide-in-small';
		}

		if ( 'left' === $sidebar_position ) {
			$sidebar_class .= ' order-first';
		}

		echo esc_attr( $sidebar_class );
	}
}


if ( ! function_exists( 'orchid_store_content_container_class' ) ) {
	/**
	 * Function to set CSS classes to content container.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_content_container_class() {

		$container_class = '';

		$sidebar_position = orchid_store_sidebar_position();

		if ( 'none' === $sidebar_position ) {

			$container_class = 'col-lg-12';

		} else {

			$container_class = 'col-desktop-8 content-col col-tab-100 col-mob-100';

			$is_sticky = orchid_store_get_option( 'enable_sticky_sidebar' );

			if ( $is_sticky && 'none' !== $sidebar_position ) {

				$container_class .= ' sticky-portion';
			}

			if ( 'left' === $sidebar_position ) {

				$container_class .= ' order-last';
			}
		}

		echo esc_attr( $container_class );
	}
}


if ( ! function_exists( 'orchid_store_content_entry_class' ) ) {
	/**
	 * Sets CSS class to the container of single content.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_content_entry_class() {

		$content_entry_class = '';

		if ( class_exists( 'WooCommerce' ) ) {

			if ( is_cart() || is_checkout() || is_account_page() || ( is_page( 'wishlist' ) && defined( 'YITH_WCWL' ) ) || is_woocommerce() || is_shop() || is_product() ) {

				$content_entry_class = '__os-woo-entry__';

				echo esc_attr( $content_entry_class );

				return;
			}
		}

		if ( is_single() || is_page() ) {

			$content_entry_class = 'editor-entry';

			echo esc_attr( $content_entry_class );

			return;
		}
	}
}


if ( ! function_exists( 'orchid_store_menu_row_class' ) ) {
	/**
	 * Sets CSS class to the row container of special menu.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_menu_row_class() {

		$menu_row_class = '';

		$display_special_menu = orchid_store_get_option( 'display_special_menu' );

		if ( ! $display_special_menu ) {

			$menu_row_class = 'no-special-menu';
		}

		echo esc_attr( $menu_row_class );
	}
}


if ( ! function_exists( 'orchid_store_logo_row_class' ) ) {
	/**
	 * Sets CSS class to the row container of logo.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_logo_row_class() {

		$display_product_search = orchid_store_get_option( 'display_product_search_form' );
		$display_wishlist_icon  = orchid_store_get_option( 'display_wishlist' );
		$display_minicart       = orchid_store_get_option( 'display_mini_cart' );

		$logo_row_class = '';

		if ( class_exists( 'YITH_WCWL' ) || class_exists( 'Addonify_Wishlist' ) ) {

			if ( ! $display_wishlist_icon ) {

				$logo_row_class = 'no-wishlist-icon';
			}
		} else {

			$logo_row_class = 'no-wishlist-icon';
		}

		if ( class_exists( 'WooCommerce' ) ) {

			if ( ! $display_product_search ) {

				$logo_row_class .= ' no-product-search-form';
			}

			if ( ! $display_minicart ) {

				$logo_row_class .= ' no-mini-cart';
			}
		} else {

			$logo_row_class .= ' no-product-search-form no-mini-cart';
		}

		echo esc_attr( $logo_row_class );
	}
}


if ( ! function_exists( 'orchid_store_get_page_title' ) ) {
	/**
	 * Renders page title.
	 *
	 * @since 1.0.0
	 */
	function orchid_store_get_page_title() {
		?>
		<div class="title">
			<?php
			if ( have_posts() ) {

				if ( is_home() ) {
					?>
					<h1 class="entry-title page-title"><?php single_post_title(); ?></h1>
					<?php
				}

				if ( is_archive() ) {

					the_archive_title( '<h1 class="entry-title page-title">', '</h1>' );
				}

				if ( is_search() ) {
					?>
					<h1 class="entry-title page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'orchid-store' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1><!-- .entry-title -->
					<?php
				}

				if ( is_page() ) {

					while ( have_posts() ) {

						the_post();
						?>
						<h1 class="entry-title page-title"><?php the_title(); ?></h1>
						<?php
					}
				}

				if ( is_single() ) {

					while ( have_posts() ) {

						the_post();
						?>
						<h1 class="entry-title page-title"><?php the_title(); ?></h1>
						<?php
					}
				}

				if ( class_exists( 'WooCommerce' ) ) {

					if ( is_shop() ) {
						?>
						<h1 class="entry-title page-title"><?php woocommerce_page_title(); ?></h1>
						<?php
					}
				}
			}
			?>
		</div><!-- .title -->
		<?php
	}
}


if ( ! function_exists( 'orchid_store_escape_svg' ) ) {
	/**
	 * Sanitizes SVG when rendering in the frontend.
	 *
	 * @since 1.5.0
	 * @param string $svg SVG code.
	 * @return string $svg Sanitized SVG code.
	 */
	function orchid_store_escape_svg( $svg ) {

		$allowed_html = array(
			'svg'   => array(
				'class'           => true,
				'aria-hidden'     => true,
				'aria-labelledby' => true,
				'role'            => true,
				'xmlns'           => true,
				'width'           => true,
				'height'          => true,
				'viewbox'         => true, // <= Must be lower case!
			),
			'g'     => array( 'fill' => true ),
			'title' => array( 'title' => true ),
			'path'  => array(
				'd'    => true,
				'fill' => true,
			),
		);

		return wp_kses( $svg, $allowed_html );
	}
}

