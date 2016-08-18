<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package parasolka
 */

get_header();?>
<?php $src = get_template_directory_uri(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="jumbotron">
        <div class="max-width row relative">
          <div class="jumbo-brush columns large-12 medium-12 small-12 with-elemnts">
            <h1><?php echo get_field("jumbo-tytul") ?></h1>
            <div id="jumbo-text" class="head2 columns large-10 small-centered medium-8 small-10"><h2><?php echo get_field("jumbo-podtytul") ?></h2></div>
          </div>
          <div class="row ">
            <div class="arrow-down columns large-8 small-centered medium-10 small-10"><a href="#ofundacji"><img src="<?php bloginfo('template_url'); ?>/img/svg/arrowdown.svg"/></a></div>
          </div>
					<div class="element e1" data-depth="5"><img src="<?php echo $src; ?>/img/e1.png" /></div>
					<div class="element e2" data-depth="1.5"><img src="<?php echo $src; ?>/img/e2.png" /></div>
					<div class="element e3" data-depth="1.5"><img src="<?php echo $src; ?>/img/e3.png" /></div>
					<div class="element e4" data-depth="3"><img src="<?php echo $src; ?>/img/e3.png" /></div>

				</div>

      </section>

      <section id="ofundacji" class="ofundacji">
        <div class="max-width row">
          <div class="image columns large-7 medium-uncentered medium-6 small-centered small-10">
            <img src="<?php bloginfo('template_url'); ?>/img/ofundacji.png">
          </div>
          <div class="ofundacji-text columns large-5 medium-6 medium-uncentered small-centered small-12">
            <h3 class="page-title">o fundacji</h3>
            <p> <?php echo get_field("ofundacji-lead") ?> </p>
            <a href="<?php bloginfo('template_url'); ?>/o-fundacji" class="button alert get-to-know">  dowiedz się więcej  </a>
          </div>
        </div>
      </section>

      <section id="akcje" class="akcje">
        <div class="max-width row">
          <div class="akcje-text columns large-5 medium-7 medium-uncentered small-centered small-12">
            <h3 class="page-title">zrealizowane akcje</h3>
            <p> <?php echo get_field("akcje-lead") ?> </p>
            <a href="<?php bloginfo('template_url'); ?>/akcje" class="button alert get-to-know"> dowiedz się więcej </a>
          </div>
          <div class="image columns large-7 medium-uncentered medium-5 small-centered small-10">
            <img src="<?php bloginfo('template_url'); ?>/img/akcje.png">
          </div>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
