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

		<?php 
		$categories = get_categories(['parent' => 9,]);
		foreach ( $categories as $category ) {
			$args = array(
				'cat' => $category->term_id,
				'post_type' => 'post',
				'posts_per_page' => '120',
				'orderby' => 'modified'
			);	
			$query = new WP_Query( $args );
			?>

		<!-- start catalog-wrapper partners -->
		<div class="container catalog-wrapper-description">
		
			<!-- start partner-avatar -->
			<div class="col-md-2 col-sm-2 col-xs-12 partner-avatar">
				<a onclick="window.open('<?php echo get_field ('partner-link', $category); ?>','_blank')"><img src="<?php echo get_field ('brand-logo', $category); ?>" class="avatar-partner img-responsive">
					<p><?php echo get_field ('link-text', $category); ?></p>
				</a>
			</div>
			<!-- end partner-avatar -->

			<!-- start partner-description -->
			<div class="col-md-10 col-sm-10 col-xs-12 partner-description">
				<h2><?php echo $category->name; ?></h2>
				<p><?php echo category_description($category->term_id); ?></p>
			</div>
			<!-- end partner-description -->
			<!-- start accordeon -->
			<div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-12 col-xs-12 panel-group" id="partner-<?php echo get_the_ID(); ?>" role="tablist" aria-multiselectable="true">
				<!-- start collapse area -->
			<?php if ($query->have_posts()) : ?>   
			<?php while ($query->have_posts()) : $query->the_post(); ?>   
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="collapse-heading-<?php echo get_the_ID(); ?>">
						<h3 class="panel-title">
							<a role="button" data-toggle="collapse" class="collapse-button collapsed" data-parent="#pivovar-antos" href="#identy<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="<?php echo get_the_ID(); ?>"><?php the_title(); ?><i class="rollover-icon">подробнее<span class="ib-chevron"></span></i></a>
						</h3>
					</div>
					<div id="identy<?php echo get_the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-<?php echo get_the_ID(); ?>">
						<div class="panel-body">
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
				<!-- end collapse area -->
				<?php endwhile;?>
			</div>
			<!-- end accordeon -->

		</div>
		<!-- end catalog-wrapper partners  -->	

		<?php endif; ?>
		<?php wp_reset_postdata(); } ?>

</main>

	<div class="container-fluid menu-preview yellow-divider-block" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
	</div>
<?php
get_footer(); ?>
