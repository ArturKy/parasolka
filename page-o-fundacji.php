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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">

            <section id="ofundacji" class="ofundacji">
              <div class="max-width row ">
                <div class="image columns large-7 large-uncentered medium-12 small-centered small-10">
                  <img src="<?php echo get_field( "background_image" ); ?>">
                </div>
                <div class="ofundacji-text page-ofundacji-text columns large-5 medium-12 large-uncentered small-centered small-12">
                  <?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
                  <div class="page-text"> <?php echo get_field( "tekst" ); ?> </div>
                  <a href="<?php bloginfo('template_url'); ?>/kontakt" class="button alert contactus"> skontaktuj się z nami  </a>
                </div>
              </div>
            </section>

        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
