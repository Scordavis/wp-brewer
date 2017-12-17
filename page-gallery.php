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
<main class="container-fluid main-section dark pattern" id="brewers" style="background-image: url(<?php echo the_field ('patternbg', 80); ?>);">
	<section class="container">
		<img src="<?php echo the_field ('lightvensel', 80); ?>" alt="" class="divider">
		<h1 class="seo-page-title"><?php echo get_the_title() ?></h1>
		<p class="seo-page-description"><?php echo get_the_excerpt( ) ?></p>
	</section>
		<!-- start gallery-wrapper -->
		<div class="container gallery-wrapper">
			<?php
		   $id=15; // ID заданной рубрики
		   $galery = new WP_Query("cat=$id"); 
		   while($galery->have_posts()) : $galery->the_post();
		   	?>
			<!-- start gallery-item -->
			<div class="col-md-3 col-sm-6 gallery-item">
				<a href="<?php echo the_field ('gallery-full'); ?><?php echo the_field ('gallery-video'); ?>" data-fancybox data-caption="<?php echo get_the_title(); ?>">
					<img src="<?php the_post_thumbnail_url( ); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo the_post_thumbnail_caption( ); ?>"> 
					<p class="gallery-item-description"><?php echo get_the_title(); ?></p>
					<p class="gallery-item-zoom"><i class="ib-zoom"></i></p>
				</a>
			</div>
			<!-- end gallery-item -->
			<?php endwhile; ?>
		</div>
		<!-- end gallery-wrapper -->



</main>

	<div class="container-fluid menu-preview yellow-divider-block" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
	</div>
<?php
get_footer(); ?>
