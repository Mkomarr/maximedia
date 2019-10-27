

        <section class="contact">
		<p>
		Maxi Media<br/>
			ul. Robotnicza 66<br/>
			53-608 Wrocław<br/>
		</p>
		<p>
			pon. - pt.<br/>
			08:00 - 16:00
		</p>
		<p>
			<a href="tel:+48717726969">tel. +48 71 772 69 69</a>
		</p>
		<p>
			<a href="mailto:biuro@maximedia.com.pl">biuro@maximedia.com.pl</a><br/>
			<a href="mailto:druk@maximedia.com.pl">druk@maximedia.com.pl</a><br/>
		</p>
	</section>

	<div class="map">
		<div class="gmaps">
			<iframe src="https://maps.google.com/maps?q=maxi%20media%20robotnicza%2066%20wroc%C5%82aw&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>
	</div>

	<footer>
		<div class="blue-backg">
			<p>© 2019 MAXI MEDIA</p>
			<!-- ----- DYNAMIC MENU ------- -->
			<?php wp_nav_menu( $args = array( 'menu' => 'Footer', 'theme_location' => 'footer', 'container' => 'div', 'container_class' => '', 'menu_id' => '', 'menu_class' => 'priv-policy-link', ) );
			?>
		</div>
	</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
