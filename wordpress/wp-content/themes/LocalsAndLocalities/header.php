<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header <?php if ( is_home() && is_front_page() ): ?>homapage<?php endif;?>" role="banner">
			<div class="site-header-main">

				<div id="site-header-menu" class="site-header-menu main-navigation">
					<?php if ( is_home() && is_front_page() ) : ?>
						<nav id="site-navigation" class="main-navigation" role="navigation" >
							<table>
								<tbody>
									<tr>
										<td class="half-menu">
											<?php
											wp_nav_menu( array(
												'name' => 'menu_left',
												'menu_class' => 'primary-menu f_right',
												'theme_location' => 'menu_left'
											 ) );
											?>
										</td>
										<td id="mid-logo-td">
											<div class="header-image">
												<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
													<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
												</a>
											</div><!-- .header-image -->
										</td>
										<td class="half-menu">
											<?php
											wp_nav_menu( array(
												'name' => 'menu_right',
												'menu_class' => 'primary-menu f_left',
												'theme_location' => 'menu_right'
											 ) );
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</nav>
					<?php else : ?>
						<nav id="site-navigation" class="main-navigation" role="navigation" >
							<table>
								<tbody>
									<tr>
										<td id="left-logo-td">
											<div class="header-image">
												<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
													<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
												</a>
											</div><!-- .header-image -->
										</td>
										<td class="full-menu">
											<?php
											wp_nav_menu( array(
												'name' => 'menu_full',
												'menu_class' => 'primary-menu f_left',
												'theme_location' => 'menu_full'
											 ) );
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</nav>
					<?php endif; ?>
				</div><!-- .site-header-menu -->

			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
		<?php
			if ( is_home() && is_front_page() ) :
				do_action('slideshow_deploy', '37');
				?><br /><br /><?php
			endif;
		?>
		