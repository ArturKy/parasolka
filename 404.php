<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package parasolka
 */

get_header(); ?>
<?php $src = get_template_directory_uri(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row with-elements">
				<div class="not-found columns small-12">
					<div class="not-found-text columns small-12 large-8 large-centered">
						<h2>błąd 404</h2><br>
						<h4>nie ma takiej strony</h4><br>
						<p>
							niestety strona na którą chcesz wejść<br>
							nie istnieje lub została przeniesiona
						</p>
					</div>
				</div> <!-- .not-found -->
				<div class="element e18" data-depth="0.5"><img src="<?php echo $src; ?>/img/e2.png" /></div>
				<div class="element e19" data-depth="3"><img src="<?php echo $src; ?>/img/e1.png" /></div>
				<div class="element e20" data-depth="1"><img src="<?php echo $src; ?>/img/e1.png" /></div>
				<div class="element e21" data-depth="5"><img src="<?php echo $src; ?>/img/e3.png" /></div>

			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
