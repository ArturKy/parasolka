<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parasolka
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="row">
			<a href="#header" class="float-right columns small-3 medium-2 large-1"><img src="<?php bloginfo('template_url'); ?>/img/svg/arrowup.svg" alt="wróć do poczatku strony" /></a>
			<div class="medium-9 large-5 columns flex">
				<span class="footer-brush adres">adres</span>
				<span class='footer-text'>Siedziba kancelarii (Poznań)<br>ul. Marcelińska 62 lok. 7 (Dwór Marcelin)<br>60-354 Poznań</span>
			</div>
			<div class="medium-9 large-5 columns flex">
				<span class="footer-brush contact">kontakt</span>
				<span class='footer-text'>
					<a href="tel:48612223997">t: +48 61 22 23 997</a> <br>
					<script type="text/javascript">
						user = "poznan";
						site = "sp-legal.pl";
						document.write('<a href=\"mailto:'+user+'@'+site+'\">');
						document.write(user+'@<span class="antispam">gińSpamerze<\/span>'+site+'<\/a>');
					</script>
				</span>
		</div><!-- .site-info -->
	</footer>

	<section class="credits">
		<div class="row">
			<div class="credit columns large-centered-10 medium-centered-10">
				<span>Copyrights by: <a href="http://fundacjaparasolka.pl" >fundacjaparasolka.pl</a></span>
				<span><a href="http://kreatik.pl">Projekt i realizacja: <img src="<?php bloginfo('template_url'); ?>/img/svg/kreatik-logo.svg" alt="Kreatik.pl"/></a></span>
			</div>
		</div>
	</section>

</div><!-- #page -->
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/foundation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

<?php wp_footer(); ?>

</body>
</html>
