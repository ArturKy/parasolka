<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package parasolka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="not-found columns small-12">
					<div class="not-found-text columns small-12 large-10 large-centered">
						<h2>błąd 404</h2><br>
						<h4>nie ma takiej strony</h4><br>
						<p>
							niestety strona na którą chcesz wejść<br>
							nie istnieje lub została przeniesiona
						</p>
					</div>
				</div> <!-- .not-found -->
			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
