<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package czech_brewer_club
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid main-section dark pattern'); ?> style="background-image: url(<?php echo get_field('patternbg', 80); ?>);">
	<div class="container">
		<main class="col-md-12 about post">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					 <?php //czech_brewer_club_posted_on();// ?> 
				</div><!-- .entry-meta -->
				<?php
				endif; ?>

			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'czech-brewer-club' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'czech-brewer-club' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

		</main>
	<a href="../category/news/" class="read-more">Вернуться в раздел "Новости"</a>
	</div>
</section><!-- #post-<?php the_ID(); ?> -->
	<div class="container-fluid menu-preview recommended-wrapper" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">	
		<div class="container recommended">
			<h3>Другие новости</h3>
			<?php get_template_part( 'template-parts/content', 'related' ); ?>
		</div>
	</div>

