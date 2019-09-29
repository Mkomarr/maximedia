<!DOCTYPE html>
<html lang="pl" prefix="op: http://media.facebook.com/op#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta property="og:url" content="<?php bloginfo( 'wpurl' ) ?>">
    <meta name="keywords" content="druk wielkoformatowy Wrocław, banery reklamowe Wrocław, fototapety na zamówienie Wrocław, druk na banerze ">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta property="op:markup_version" content="v1.0">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php bloginfo('name') ?>">
    <meta property="og:description" content="<?php bloginfo('description') ?>">
    <meta property="og:image" content="https://www.maximedia.com.pl/static/b24/2017/06/maxi-druk2-8f87010.jpg">
    <meta property="og:image" content="https://www.maximedia.com.pl/static/b24/2017/06/pion2-a9b426e.jpg">
    <meta property="og:image" content="https://www.maximedia.com.pl/static/b24/2016/03/b48ebdedab515f73bf31328f22372b3e.png">
    <meta property="og:image" content="https://www.maximedia.com.pl/static/b24/2016/03/b48ebdedab515f73bf31328f22372b3e.png">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/fontello.css' ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
	<title><?php bloginfo('name') ?></title>
</head>

<html <?php language_attributes(); ?>>
<body>
	<div class="container">
		<header>
<!-- ----- LOGO & ICONS ------- -->
			<div class="top-menu">
				<a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri()  . '/img/maximedia-logo.png' ?>" alt="MaxiMedia Druk wielkoformatowy" class="logo-top"></a>
				<div class="right-side">
					<div class="phone"><i class="icon-phone"></i></a></div>
					<div class="dropdown-icon">&#9776;</div>
				</div>
			</div>
<!-- ----- DYNAMIC MENU ------- -->
			<?php wp_nav_menu( $args = array( 'theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'top-nav', 'menu_id' => '', 'menu_class' => 'mob-menu', ) );
			?>
		</header>