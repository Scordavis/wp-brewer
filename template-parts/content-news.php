<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package czech_brewer_club
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('news-preview-wrapper'); ?> >
	
				<?php
				if ( is_singular() ) :
					the_title( '<h3>', '</h3>' );
				else :
					the_title( '<h3>', '</h3>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				
				<?php
				endif; ?>

			<article class="entry-content">
				<?php
				the_post_thumbnail( $size = 'full', $attr = '' );
				the_excerpt();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'czech-brewer-club' ),
					'after'  => '</div>',
				) );
				?>
			<a href="<?php the_permalink(); ?>" class="read-more">Читать далее</a>	
			</article><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->
