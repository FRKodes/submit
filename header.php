<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> </title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header id="masthead" class="site-header">
	<div class="container">
		<!-- <nav class="site-navigation main-navigation">
			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav> -->

		<nav class="navbar">
			<a class="logo-submit" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icono_submit.svg" alt="logo submit header">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png" alt="menu submit">
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
					<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
				</ul>
			</div>
		</nav>

	</div>
		
</header><!-- #masthead .site-header -->

<div class="container-fluid">
	<div class="row">
		<div class="banner-main">
			<h1>SOMOS SUBMIT COMMUNICATION</h1>
			<h2><span class="bold">Comunicar es conectar,</span> & conectar es trascender</h2>
			<div class="btn-container">
				<a href="#" class="btn-servicios">NUESTROS SERVICIOS</a>
			</div>
		</div>
	</div>
</div>

<main class="container_"><!-- start the page containter -->
