<?php get_header(); ?>
<?php $hasloGlowne = get_field('haslo_glowne'); ?>
<?php $hasloDrugie = get_field('haslo_dodatkowe'); ?>
<?php $ofertaTytul = get_field('oferta_tytul'); ?>
<?php $ofertaTekst = get_field('oferta_tekst'); ?>
<?php $drukSolwentowyTytul = get_field('druk_solwentowy'); ?>
<?php $drukSolwentowyGrupa = get_field('druk_solwentowy_grupa'); ?>
<?php $drukUvTytul = get_field('druk_uv_tytul'); ?>
<?php $drukUvGrupa = get_field('druk_uv_grupa'); ?>
<?php $uslugiTytul = get_field('uslugi_tytul'); ?>
<?php $uslugiGrupa = get_field('uslugi_grupa'); ?>
<?php $wyroznikiHaslo = get_field('co_nas_wyroznia'); ?>
<?php $terminowoscTytul = get_field('terminowosc'); ?>
<?php $terminowoscOpis = get_field('terminowosc-opis'); ?>
<?php $jakoscUslugTytul = get_field('jakosc_uslug'); ?>
<?php $jakoscUslugOpis = get_field('jakosc_uslug_opis'); ?>
<?php $parkmaszynowyTytul = get_field('park_maszynowy_tytul'); ?>
<?php $parkmaszynowyOpis = get_field('park_maszynowy_opis'); ?>
<?php $elastycznoscTytul = get_field('elastycznosc_tytul'); ?>
<?php $elastycznoscOpis = get_field('elastycznosc_opis'); ?>
<?php $oNasTytul = get_field('o_nas_tytul'); ?>
<?php $oNasTekst = get_field('o_nas_tekst'); ?>
<?php $skontaktujOpis = get_field('skontaktuj_sie_z_nami_opis'); ?>

<!-- --------------- MAIN BANNER ------------ -->

<section class="headline">
	<h1><?php echo $hasloGlowne ?></h1>
	<h2><?php echo $hasloDrugie ?></h2>
</section>

<main>
	<section class="o-nas" id="oferta">
		<h3><?php echo $ofertaTytul ?></h3>
		<p><?php echo $ofertaTekst ?></p>
		<div class="print">
			<h4><?php echo $drukSolwentowyTytul ?></h4>
			<hr>
			<ul>
				<li><?php echo $drukSolwentowyGrupa['1']; ?></li>
				<li><?php echo $drukSolwentowyGrupa['2']; ?></li>
				<li><?php echo $drukSolwentowyGrupa['3']; ?></li>
				<li><?php echo $drukSolwentowyGrupa['4']; ?></li>
				<li><?php echo $drukSolwentowyGrupa['5']; ?></li>
			</ul>
		</div>
		<div class="print">
			<h4><?php echo $drukUvTytul ?></h4>
			<hr>
			<ul>
				<li><?php echo $drukUvGrupa['1']; ?></li>
				<li><?php echo $drukUvGrupa['2']; ?></li>
				<li><?php echo $drukUvGrupa['3']; ?></li>
				<li><?php echo $drukUvGrupa['4']; ?></li>
				<li><?php echo $drukUvGrupa['5']; ?></li>
			</ul>
		</div>
		<div class="print">
			<h4><?php echo $uslugiTytul ?></h4>
			<hr>
			<ul>
				<li><?php echo $uslugiGrupa['1']; ?></li>
				<li><?php echo $uslugiGrupa['2']; ?></li>
				<li><?php echo $uslugiGrupa['3']; ?></li>
				<li><?php echo $uslugiGrupa['4']; ?></li>
				<li><?php echo $uslugiGrupa['5']; ?></li>
			</ul>
		</div>
	</section>
	<section class="why-us">
		<h4><?php echo $wyroznikiHaslo ?></h4>
		<hr>
		<div class="why-us-container">
			<article class="why-us-arg">
				<p class="number">01</p>
				<p class="adv"><?php echo $terminowoscTytul ?></p>
				<p class="txt"><?php echo $terminowoscOpis ?></p>
			</article>
			<article class="why-us-arg">
				<p class="number">02</p>
				<p class="adv"><?php echo $jakoscUslugTytul ?></p>
				<p class="txt"><?php echo $jakoscUslugOpis ?></p>
			</article>
			<article class="why-us-arg">
				<p class="number">03</p>
				<p class="adv"><?php echo $parkmaszynowyTytul ?></p>
				<p class="txt"><?php echo $parkmaszynowyOpis ?></p>
			</article>
			<article class="why-us-arg">
				<p class="number">04</p>
				<p class="adv"><?php echo $elastycznoscTytul ?></p>
				<p class="txt"><?php echo $elastycznoscOpis ?></p>
			</article>
		</div>
		</section>
		<section class="about-us" id="about-us">
			<h3><?php echo $oNasTytul ?></h3>
			<p><?php echo $oNasTekst ?></p>
		</section>
	<section class="offer">
		<div class="offer-box">
			<p><?php echo $skontaktujOpis ?></p>
			<button><?php wp_nav_menu( $args = array( 'menu' => 'Contact', 'theme_location' => 'front-page' ) );
			?></button>
		</div>
	</section>
</main>
<?php get_footer(); ?>
