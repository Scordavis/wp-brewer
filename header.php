<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package czech_brewer_club
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<style>
	.slider .slide .slide__content .slide__content-wrap .slide__text .slide__text-link{
		color: <?php echo get_field('buton-color'); ?>;
	}
	.slider .slide .slide__content .slide__content-wrap .slide__text .slide__text-link:before {
		background-color: <?php echo get_field('button-border'); ?>;
	}
	.slider .slide .slide__content .slide__content-wrap .slide__text .slide__text-link:after {
		background-color: <?php echo get_field('button-border'); ?>;
	}
</style>
	<?php wp_head(); ?>
</head>

	<body>
	<!-- header site -->
	<header class="page-header">
		<div class="container-fluid page-header" id="topper"><!-- top color border -->
			<div class="container top-info-section">
				<div class="col-md-5 col-sm-4 hidden-xs site-descript">
					<p><?php echo get_bloginfo( 'description' ); ?></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-4 top-logo-wrap"><a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/img/logo-origin.png" title="На главную" alt="Клуб Чешских Пивоваров" class="img-responsive top-logo"></a></div>
				<div class="col-md-5 col-sm-4 col-xs-7 tel-wrap">
					<p class="top-tel"><i class="ib-phone"></i>
						<?php 
						$options = get_option('sample_theme_options');
						echo $options['phonetext'];?>
					</p>
					<button class="callback-button" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/btn-plank.png)" data-fancybox="" data-src="#form-callback" data-fmetrika="" data-fhead="" data-finfo="">заказать столик</button>
				</div>
			</div>
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-list" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand visible-xs" href="#">Вкус вековых традиций</a> -->
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse brewer-top-navigation" id="collapse-list">
						<ul class="nav navbar-nav brewer-top-nav">
							<li class="active col-md-2"><a href="index.html#description">главная</li>
							<li class="col-md-2"><a href="about.html#about-restaurant">о нас</a></li>
							<li class="col-md-2"><a href="catalog.html#brewers">пиво</a></li>
							<li class="col-md-2"><a href="menu.html#brewers">меню</a></li>
							<li class="col-md-2"><a href="page.html">новости</a></li>
							<li class="col-md-2"><a href="gallery.html#gallery">галерея</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- end header site -->
