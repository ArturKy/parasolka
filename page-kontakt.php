<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package parasolka
 */

get_header(); ?>
<?php $src = get_template_directory_uri(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row" id="kontakt">
				<div class="img-bg-medium columns medium-12">
						<img src="<?php echo $src; ?>/img/kontakt-bg.png" alt="" />
				</div>
				<div class="columns large-6 small-12">
					<div class="row pt-5">
						<div class="columns large-6 medium-6 small-6">
							<span class="footer-brush adres">kontakt</span><br>
							<span class='footer-text'>
								t: <a href="tel:<?php echo get_field( "telefon" ); ?>"><?php echo get_field( "telefon" ); ?> </a><br>
								e: <a href="mailto:<?php echo get_field( "mail" ); ?>"><?php echo get_field( "mail" ); ?> </a> <br><br>
								a: <?php echo get_field( "adres" ); ?>
							</span>
						</div>
						<div class="columns large-6 medium-6 small-6">
							<span class="footer-brush contact">dane rejestrowe</span><br>
							<span class='footer-text'>
								REGON: <?php echo get_field( "regon" ); ?><br>
								NIP: <?php echo get_field( "nip" ); ?> <br>
								KRS: <?php echo get_field( "krs" ); ?><br>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns row collapse pt-3">
							<?php echo get_field( "contact-form" ); ?>
						</div>
					</div>
				</div>
				<div class="img-bg-large columns large-6">
					<div class="image">
						<img src="<?php echo $src; ?>/img/kontakt-bg.png" alt="" />
					</div>
				</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="credits">
		<div class="row">
			<div class="credit credit-kontakt columns large-centered-10 medium-centered-10">
				<span>Copyrights by: <a href="http://fundacjaparasolka.pl" >fundacjaparasolka.pl</a></span>
				<span><a href="http://kreatik.pl" target="_blank">Projekt i realizacja: <img src="<?php bloginfo('template_url'); ?>/img/svg/kreatik-logo.svg" alt="Kreatik.pl"/></a></span>
			</div>
		</div>
	</section>

	<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/foundation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
	<?php wp_footer(); ?>
	</body>
	</html>
