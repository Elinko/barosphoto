<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barosphoto-wp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php barosphoto_wp_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'barosphoto-wp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php /*if ( get_edit_post_link() )*/ : ?>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
