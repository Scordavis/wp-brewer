	<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package czech_brewer_club
 */

get_header(); ?>
<main class="container-fluid main-section dark pattern" id="brewers" style="background-image: url(<?php echo the_field ('patternbg', 80); ?>);">
	<section class="container">
		<img src="<?php echo the_field ('lightvensel', 80); ?>" alt="" class="divider">
		<div class="col-md-12 about policy">
		<h2 class="seo-page-title"><?php echo get_the_title() ?></h2>
			<article>
				<?php 
				while(have_posts()) : the_post();
					?> 
					<?php the_content(  ) ?>
				<?php endwhile; ?>
			</article>
		</div>
	</section>
</main>

	<div class="container-fluid menu-preview yellow-divider-block" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
	</div>
<?php
get_footer(); ?>
