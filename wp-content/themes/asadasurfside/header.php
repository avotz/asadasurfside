<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asadasurfside
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div class="header-top">
		<div class="inner">
			<div class="text">
				<a href="mailto::info@asadasurfside.com">info@asadasurfside.com</a> 
			</div>
			<div class="social">
				<span>Siguenos</span>
				<a href="https://www.facebook.com/ASADA.Surfside" target="_blank" class="social-item"><i class="fab fa-facebook"></i></a>
				<a href="https://wa.me/50686026019" target="_blank" class="social-item"><i class="fab fa-whatsapp"></i></a>
				<!-- <a href="#" class="social-item"><i class="icon-google-plus"></i></a> -->
				
			</div>
		</div>
	</div>
	<div class="header-middle">
		<div class="inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo"></a>
			<div class="header-contact">
				Llamenos <span>(506) 8602-6019</span>  <br> <!--<a href="mailto::info@asadasurfside.com"><i class="fas fa-envelope"></i></a>-->
				<a href="mailto::info@asadasurfside.com">info@asadasurfside.com</a>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="inner">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'menu_id'        => 'header-menu',
				'container' => 'nav',
				'container_class' => 'header-menu',
				'container_id' => '',
				'menu_class' => 'header-menu-ul',
			) );
			?>
				
				<button id="btn-menu" class="header-btn-menu">
					<i class="icon-menu"></i>
				</button>
		</div>
	</div>
</header>

