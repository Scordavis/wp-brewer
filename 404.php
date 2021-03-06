<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package czech_brewer_club
 */

get_header(); ?>

<main class="container-fluid main-section dark pattern" id="brewers" style="background-image: url(<?php echo the_field ('patternbg', 80); ?>);">
	<section class="container">
		<img src="<?php echo the_field ('lightvensel', 80); ?>" alt="" class="divider">
		<div class="col-md-12 about policy">
		<?php
		   $id=278; // ID заданной рубрики
		   $galery = new WP_Query("id=$id"); 
		   while($galery->have_posts()) : $galery->the_post();
		   	?>
		   	<p><?php echo the_field ('text-404'); ?></p>

			<?php endwhile; ?>
		</div>
	</section>
</main>

	<div class="container-fluid menu-preview yellow-divider-block" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
	</div>

<?php
get_footer();
