<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barosphoto-wp
 */

?>

<article id="post-<?php the_ID(); ?>" class="container post-page" <?php post_class(); ?>>
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
		<div class="col-xs-12">
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


				?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
