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
 * @package czech_brewer_club
 */

get_header(); ?>

	<!-- start header-slider -->
	<?php get_template_part( 'template-parts/header', 'slider' ); ?>
	<!-- end header-slider -->
	<!-- main section -->
	<main class="container-fluid main-section dark" id="description" style="background-image: url(<?php echo get_field('mainbg', 80); ?>);">
		<div class="green-filter"></div>		
		<div class="container">
			<img src="<?php echo get_field('lightvensel', 80); ?>" alt="" class="divider">
			<div class="col-md-5 about">
				<?php $id = 6; // add the ID of the page where the zero is
				$p = get_page($id);
				$t = $p->post_title;
				echo apply_filters('the_excerpt', $p->post_excerpt);
				?>
				<a href="<?php the_permalink($id); ?>" class="read-more"><?php echo get_field('readmorebtn', 80); ?></a>	
			</div>
			<div class="col-lg-6 col-lg-offset-1 col-md-offset-1 col-md-6 news">
				
				<?php
   $id=5; // ID заданной рубрики
   $n=2;   // количество выводимых записей
   $recent = new WP_Query("cat=$id&showposts=$n"); 
   while($recent->have_posts()) : $recent->the_post();
   	?>

   	<div class="news-preview-wrapper">


   		<h2><?php the_title( ) ?></h2>
   		<article><?php the_excerpt() ?></article> 
   		<a href="<?php the_permalink() ?>" class="read-more"><?php echo get_field('readmorebtn', 80); ?></a>	
   </div>	
   	<?php endwhile; ?>
			</div>
		</div>
		<!-- start partners -->
		<?php get_template_part( 'template-parts/content', 'partners' ); ?>
		<!-- end partners -->
	</main>
	<!-- end main section -->
	<!-- start menu-preview -->
	<section class="container-fluid menu-preview" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
		<div class="float-logo" style="background-image: url(<?php echo get_field('bglogo', 80); ?>);">
		</div>
		<div class="container">
			<div class="col-md-6 menu-preview-content">
				<h2><?php echo get_cat_name( 7 ) ?></h2>
				<img src="<?php echo get_field('main-kitchen-thumb', 151); ?>" class="thumb">
				<?php echo category_description( 7 ); ?> 
				<a href="/menu#kitchen" id="menulink" class="button-link"><?php echo get_field('text-kitchen-btn', 151); ?></a>
			</div>
			<div class="col-md-6 menu-preview-content">
				<h2><?php echo get_cat_name( 8 ) ?></h2>
				<img src="<?php echo get_field('main-pub-thumb', 151); ?>" class="thumb">
				<?php echo category_description( 8 ); ?>
				<a href="/menu#pub" id="publink" class="button-link"><?php echo get_field('text-pub-btn', 151); ?></a>
			</div>
		</div>
	</section>
	<!-- end menu-preview -->

<?php
get_footer();
