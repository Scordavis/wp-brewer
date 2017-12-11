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
	<main class="container-fluid main-section dark pattern" id="about-restaurant" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/pattern-bg-article-light-green.jpg);">
		<!-- <div class="green-filter"></div>		 -->
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?>/img/venzel-yellow.png" alt="" class="divider">
			<div class="col-md-12 about read-columns">				
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );


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
	<section class="container-fluid menu-preview" style="background-image: url(img/bg-yellow-noise.jpg);">
		<img src="img/venzel-dark.png" alt="" class="divider">
		<div class="float-logo" style="background-image: url(img/logo-float.png);">
		</div>
		<div class="container">
			<div class="col-md-12 menu-preview-content loyalty">
				<h3>Программа лояльности</h3>
				<p>Это наиболее распространенная модель с очень простой механикой - постоянные покупатели накапливают баллы для последующего обмена их на материальные выгоды (дисконт, бесплатный товар, специальное предложение и т.д.)</p>
				<p>Несмотря на кажущуюся простоту данного метода, многие компании умудряются настолько усложнить программу, что сами начинают в ней путаться.</p>
				<p>«14 баллов можно обменять на 1 доллар, а двадцать долларов накопленных - это 50% дисконт со следующей покупки в апреле» - это не программа лояльности, а головная боль.</p>
				<p>При внедрении накопительной системы, помните, что она должна быть простой и понятной. Данную модель можно интегрировать практически в любой B2C бизнес, но лучше всего ее использовать там, где есть высокая частота покупок.</p>
			</div>
		</div>
	</section>
	<!-- end menu-preview -->
	<?php
	get_footer();