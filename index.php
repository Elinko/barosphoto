<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barosphoto-wp
 */

get_header(); ?>
<div class="flower-box" style="margin-top: 20px;">
			<img src="http://barosphoto.sk/wp-content/themes/barosphoto-wp/img/kvet.png" alt="kvet">
			<h2>BLOG</h2>
			<div class="flower-border"></div>
		</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
			<article id="post-<?php the_ID(); ?>" class="container post" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
			 	?>
				<div class="post-date">
					Publikované:
				<?php the_date('Y-m-d'); ?>
				</div>
				</header><!-- .entry-header -->
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<?php barosphoto_wp_post_thumbnail(); ?>
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="entry-content">
							<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'barosphoto-wp' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'barosphoto-wp' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					</div>
				</div>

			</article><!-- #post-<?php the_ID(); ?> -->

			<?php endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
