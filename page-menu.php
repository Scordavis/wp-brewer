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
		<h2 class="seo-page-title"><?php echo get_the_title() ?></h2>
		<p class="seo-page-description"><?php echo get_the_excerpt( ) ?></p>
	</section>
	<!-- start menu responsive tab -->
	<div class="container menu-tabs">
		<ul id="menuTabs" class="nav nav-tabs ul-menu-tabs">
			<li class="active"><a class="menu-tab" href="#kitchen" data-toggle="tab"><?php echo get_cat_name( 7 ) ?></a></li>
			<li><a href="#pub" class="menu-tab" data-toggle="tab"><?php echo get_cat_name( 8 ) ?></a></li>
		</ul>
		<div id="menuContent" class="tab-content menu-tab-wrapper">

			<div class="tab-pane menu-tab-content-wrapper in active" id="kitchen">

				<!-- start row menu-tab-item -->
				<div class="row menu-tab-content">
					<?php

					$kitchenMenu = new WP_Query(
						array('cat' => '7', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '100', )
					);
					while($kitchenMenu->have_posts()) : $kitchenMenu->the_post(); ?>
					<!-- start menu-tab-item -->
					<div class="col-md-6 menu-tab-item">
						<!-- start menu-row-item -->
						<div class="menu-row-item">
							<!-- start-img-wrapper -->
							<?php the_post_thumbnail( 'class=>img-respomsive thumb meal-thumb' ); ?>
							<!-- end-img-wrapper -->
							<h3 class="meal-heading"><?php the_title( ) ?></h3>
							<!-- start meal-table-wrap -->
							<div class="meal-table-wrap">
								<!-- start table row -->
								<div class="meal-table-row">
									<p><?php echo get_field('first-kitchen-pos'); ?></p>
									<p><?php echo get_field('first-kitchen-ans'); ?></p>
								</div>
								<!-- end table row -->
								<!-- start table row -->
								<div class="meal-table-row">
									<p><?php echo get_field('second-kitchen-pos'); ?></p>
									<p><?php echo get_field('second-kitchen-ans'); ?></p>
								</div>
								<!-- end table row -->
								<!-- start table row -->
								<div class="meal-table-row">
									<p><?php echo get_field('third-kitchen-pos'); ?></p>
									<p><?php echo get_field('third-kitchen-ans'); ?></p>
								</div>
								<!-- end table row -->
							</div>
							<!-- end meal-table-wrap -->
							<p class="meal-description"><?php the_content(); ?></p>
						</div>
						<!-- end menu-row-item -->
					</div>
					<?php if ($kitchenMenu->current_post % 2 != 0) { ?>
					<!-- end menu-tab-item -->
				</div>
				<!-- end row menu-tab-item -->
				<!-- start row menu-tab-item -->
				<div class="row menu-tab-content">
					<?php } ?>

				<?php endwhile; ?>

			</div>
			<!-- end row menu-tab-item -->
		</div>

		<!-- start pub content -->
		<div class="tab-pane menu-tab-content-wrapper" id="pub">
			<!-- start row menu-tab-item -->
			<div class="row menu-tab-content">
				<?php

				$pubMenu = new WP_Query(
					array('cat' => '8', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '100', )
				);
				while($pubMenu->have_posts()) : $pubMenu->the_post(); ?>
				<!-- start menu-tab-item -->
				<div class="col-md-6 menu-tab-item">
					<!-- start menu-row-item -->
					<div class="menu-row-item">
						<!-- start-img-wrapper -->
						<?php the_post_thumbnail( 'class=>img-respomsive thumb meal-thumb' ); ?>
						<!-- end-img-wrapper -->
						<h3 class="meal-heading"><?php the_title( ) ?></h3>
						<!-- start meal-table-wrap -->
						<div class="meal-table-wrap">
							<!-- start table row -->
							<div class="meal-table-row">
								<p><?php echo get_field('first-pub-pos'); ?></p>
								<p><?php echo get_field('first-pub-ans'); ?></p>
							</div>
							<!-- end table row -->
							<!-- start table row -->
							<div class="meal-table-row">
								<p><?php echo get_field('second-pub-pos'); ?></p>
								<p><?php echo get_field('second-pub-ans'); ?></p>
							</div>
							<!-- end table row -->
							<!-- start table row -->
							<div class="meal-table-row">
								<p><?php echo get_field('third-pub-pos'); ?></p>
								<p><?php echo get_field('third-pub-ans'); ?></p>
							</div>
							<!-- end table row -->
						</div>
						<!-- end meal-table-wrap -->
						<p class="meal-description"><?php the_content(); ?></p>
					</div>
					<!-- end menu-row-item -->
				</div>
				<?php if ($pubMenu->current_post % 2 != 0) { ?>
				<!-- end menu-tab-item -->
			</div>
			<!-- end row menu-tab-item -->
			<!-- start row menu-tab-item -->
			<div class="row menu-tab-content">
				<?php } ?>

			<?php endwhile; ?>

		</div>
		<!-- end row menu-tab-item -->
	</div>
	<!-- end pub content -->
</div>
</div>
<!-- end menu responsive tab -->
</main>

	<div class="container-fluid menu-preview yellow-divider-block" style="background-image: url(<?php echo get_field('loyalbg', 80); ?>);">
		<img src="<?php echo get_field('darkvensel', 80); ?>" alt="" class="divider">
	</div>
<?php
get_footer(); ?>
