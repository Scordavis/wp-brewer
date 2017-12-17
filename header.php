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
				<div class="col-md-2 col-sm-4 col-xs-4 top-logo-wrap"><a href="<?php echo home_url(); ?>"><img src="<?php echo the_field ('mainlogo', 80 ); ?>" class="img-responsive top-logo"></a></div>
				<div class="col-md-5 col-sm-4 col-xs-7 tel-wrap">
					<p class="top-tel"><i class="ib-phone"></i>
						<?php 
						$options = get_option('sample_theme_options');
						echo $options['phonetext'];?>
					</p>
					<button class="callback-button" style="background-image: url(<?php echo the_field ('buttonplank', 80 ); ?>)" data-fancybox="" data-src="#form-callback" data-fmetrika="" data-fhead="" data-finfo="">заказать столик</button>
				</div>
			</div>


		<nav class="navbar navbar-default">
				<div class="container">
						<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-list" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
								<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'container_class' => 'collapse navbar-collapse brewer-top-navigation',
				'container_id'    => 'collapse-list',
				'menu_class'      => 'nav navbar-nav brewer-top-nav',
				'fallback_cb'     => '',
				'menu_id'        => 'primary-menu',
			)
			); ?>



		</div>
	</header>
	<!-- end header site -->
