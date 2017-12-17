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
	<!-- start header-slider -->
	<?php get_template_part( 'template-parts/header', 'slider' ); ?>
	<!-- end header-slider -->
<!-- main section -->
	<main class="container-fluid main-section dark pattern" id="about-restaurant" style="background-image: url(<?php echo the_field ('patternbg', 80); ?>);">
		<!-- <div class="green-filter"></div>		 -->
		<div class="container">
			<img src="<?php echo the_field ( 'lightvensel', 80 ); ?>" alt="" class="divider">
			<div class="col-md-12 about read-columns">				
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'about' );

			endwhile; // End of the loop.

			?>
		</div>
	</div>
	<!-- start partners-section -->
	<?php get_template_part( 'template-parts/content', 'partners' ); ?>
	<!-- end partners-section -->
	</main>
	<!-- end main section -->
	<!-- start menu-preview -->

	<section class="container-fluid menu-preview" style="background-image: url(<?php echo the_field ('loyalbg', 80 ); ?>);">
		<img src="<?php echo the_field ('darkvensel', 80); ?>" alt="" class="divider">
		<div class="float-logo" style="background-image: url(<?php echo the_field ('bg_logo'); ?>);">
		</div>
		<div class="container">
			<div class="col-md-12 menu-preview-content loyalty">
				<?php echo the_field ('loyality_terms'); ?>
			</div>
		</div>
	</section>



	<!-- end menu-preview -->
	<?php
	get_footer(); ?>
