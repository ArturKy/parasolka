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
			<div class="row">
				<div class="statut columns small-11 medium-10 large-9 small-centered with-elements">
					<h2><?php echo get_field( "tytul" ); ?></h2>
					<div class="statut-text"><?php echo get_field( "statut" ); ?></div>
					<div class="element e5" data-depth="2"><img src="<?php echo $src; ?>/img/e1.png" /></div>
					<div class="element e6" data-depth="1.5"><img src="<?php echo $src; ?>/img/e2.png" /></div>
					<div class="element e7" data-depth="3.5"><img src="<?php echo $src; ?>/img/e1.png" /></div>
					<div class="element e8" data-depth="3"><img src="<?php echo $src; ?>/img/e3.png" /></div>
				</div>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
