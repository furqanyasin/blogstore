<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogStore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blogstore' ); ?></a>

<header id="site-header" class="site-header">
		<div class="container">
			<div class="row header-desktop align-items-center">
				<div class="col-12 col-md-3 col-lg-2 logo-col">
					<?php the_custom_logo() ?>
				</div>
				<div class="col-12 col-md-3 col-lg-7 nav-col">
					<nav id="main-navigation" class="main-navigation">
						<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'header',
								'menu_id'        => 'menu',
							)
						);
						?>
					</nav>
				</div>
				<div class="col-12 col-md-3 col-lg-3 icons-col">
					<ul class="social-icons">
						<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
					</ul>
				</div>
			</div><!-- .desktop-header -->
			
		</div><!-- .container -->
        

    </header>
