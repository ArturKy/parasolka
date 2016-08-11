<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package parasolka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
	<div class="side-menu columns large-3">
		<?php get_sidebar() ?>
	</div>

	<div class="side-content columns large-9">
		<div class="akcje-content-header">
			//tutaj dodać dwa pola z nagłówkiem i  zdjęciem bg

		</div>
			<header class="entry-header">
				<?php
					the_title( '<h1 class="entry-title">', '</h1>' );

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php parasolka_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'parasolka' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'parasolka' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div> <!-- side-content -->
	</div><!-- row -->
</article><!-- #post-## -->
