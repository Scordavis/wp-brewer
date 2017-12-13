<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package czech_brewer_club
 */

get_header(); ?>

	<div class="container-fluid main-section dark pattern" style="background-image: url(<?php echo get_field('patternbg', 80); ?>);">
		<main class="container">

		<?php
		if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h2 class="seo-page-title">', '</h2>' );
					the_archive_description( '<div class="archive-description seo-page-description">', '</div>' );
				?>
			</header>
			<img src="<?php echo get_field('lightvensel', 80); ?>" alt="" class="divider">
			<div class="col-md-12 news news-list">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'news' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</div>
		</main>
	</div>
	<div class="container-fluid menu-preview yellow-divider-block" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
	</div>

<?php
get_footer();
