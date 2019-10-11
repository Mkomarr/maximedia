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
					<div id="phone"><i class="icon-phone"></i></div>
					<div class="dropdown-icon" tabindex="0">&#9776;</div>
				</div>
			</div>
<!-- ----- DYNAMIC MENU ------- -->
			<?php wp_nav_menu( $args = array( 'theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'top-nav', 'menu_id' => '', 'menu_class' => 'mob-menu', ) );
			?>
<!-- ------DYNAMIC CONTACT ------ -->
<div class="contact-form">
	<p class="h3"><strong>Zadzwoń do nas:</strong></p>
	<p>pon. ‐ pt. — 08:00 ‐ 16:00</p>
	<p><a href="tel:+48717509062">tel. +48 71 750 90 62</a></p>
	<div class="line"></div>
		<form>
			<legend class="h3"><strong>lub napisz do nas:</strong></legend>
				<textarea name="message" id="of-form-message" placeholder="Tu wpisz treść wiadomości">
				</textarea>
				<input type="tel" id="of-form-tel" name="phone" placeholder="Podaj swój numer telefonu – oddzwonimy!" autocomplete="off">
				<input type="email" id="of-form-email" name="email" placeholder="Podaj swój adres e‐mail – odpiszemy!" autocomplete="off">
		<!-- -->
				<input type="submit" value="Wyślij"></fieldset>
		</form>
		<div class="of-result">
			<div class="success">
					<p class="header">Dziękujemy za wysłanie wiadomości!</p>
					<p>Skontaktujemy się z Tobą najszybciej jak to będzie tylko możliwe.</p>
						<a class="of-result-close btn btn-default" hreff="#close-form">ZAMKNIJ</a>
			</div>
			<div class="failure">
					<p>Formularz nie został wysłany... spróbuj ponownie za chwilę.</p>
					<a class="of-result-close btn btn-default" hreff="#close-form">ZAMKNIJ
					</a>
			</div>
		</div>
	</div>
</div>
</header>