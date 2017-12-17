<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package czech_brewer_club
 */

?>



<!-- start page-footer -->
<footer class="container-fluid page-footer" style="background-image: url(<?php echo get_field('footerbg', 80); ?>);">
	
	<div class="green-filter"></div>
	<section class="container footer-content">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_field('whitelogo', 80); ?>" alt="клуб чешских пивоваров"></a>
		<p class="footer-text site-title"><?php echo get_bloginfo() ?></p>
		<p class="footer-text tel">Тел:
			<?php 
			$options = get_option('sample_theme_options');
			echo $options['phonetext'];?>
		</p>
		<p class="footer-text adress">
			<?php 
			$options = get_option('sample_theme_options');
			echo $options['adress'];?>

		</p>
		<p class="footer-text schedule">
			<?php 
			$options = get_option('sample_theme_options');
			echo $options['weekdays'];?>
			<span>
				<?php 
				$options = get_option('sample_theme_options');
				echo $options['weekends'];?></span>
			</p>
			<button class="footer-text read-more scheme-popup" data-fancybox="" data-src="#map-popup" >схема проезда</button>
			<button class="callback-button footer-callback-button" style="background-image: url(<?php echo get_field('buttonplank', 80); ?>)" data-fancybox="" data-src="#form-callback" data-fmetrika="" data-fhead="" data-finfo="">заказать столик</button>
			<p class="footer-text socials"><?php 
				$options = get_option('sample_theme_options');
				echo $options['soctext'];?>
				
				
<?php
		   $id=16; // ID заданной рубрики
		   $socials = new WP_Query("cat='$id'"); 
		   while($socials->have_posts()) : $socials->the_post();
		   	?>
				<span><a href="<?php echo get_field('soc-link'); ?>" target="_blank" class="white-link"><img src="<?php echo get_field('soc-icon'); ?>" ></a></span>

			
<?php endwhile; ?>
			</p>
			<p class="footer-text copyright">
				<?php 
				$options = get_option('sample_theme_options');
				echo $options['copyright'];?>					
			</p>
		</section>
	</footer>
	<!-- end page-footer -->
	<!-- start form modal -->
	<div class="modal-form-wrapper" style="display: none; background-color: <?php echo the_field ('form-bgc', 257); ?>; background-image: url(<?php echo the_field ('form-bgi', 257); ?>);" id="form-callback">
		<p class="form-brand-wrapper"><img src="<?php echo the_field ('form-logo', 257); ?>" alt="Клуб Чешских Пивоваров" class="form-brand"></p>
		<div class="form-thanks">
			<form class="popup-callback">
				<h3><?php echo the_field ('form-heading', 257); ?></h3>
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="<?php echo the_field ('body-heading', 257); ?>">
				<input type="hidden" name="admin_email" value="<?php echo the_field ('body-adress', 257); ?>">
				<input type="hidden" name="form_subject" value="<?php echo the_field ('body-title', 257); ?>">
				<!-- END Hidden Required Fields -->
				<div class="form-wrapper">
					<input type="text" name="Имя" class="form-control" placeholder="<?php echo the_field ('mail-name', 257); ?>">
					<input type="text" name="Phone" class="form-control masked-input" placeholder="<?php echo the_field ('mail-phone', 257); ?>" required>
					<button type="submit" class="btn btn-default form_send_button"><?php echo the_field ('form-button', 257); ?></button>
				</div>
				<?php echo get_field ('form-privacy', 257); ?>
			</form>
			<!-- thanks_wrapper -->
			<div class="thanks_wrapper">
				<div class="thanks_text">
					<p class="thanks_head"><?php echo the_field ('done-heading', 257); ?></p>
					<div class="thanks_message"><p><?php echo the_field ('done-text', 257); ?></p></div>
					<p class="thanks_close">закрыть</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end form modal -->
	<!-- start form modal -->
	<div class="map-wrapper" style="display: none;" id="map-popup">
			<?php 
				$options = get_option('sample_theme_options');
				echo $options['map'];?>		
	</div>
	<!-- button scrolling to top page -->
	<a data-scroll data-aos="fade-up" data-aos-duration="300" data-aos-offset="300" href="#topper" class="to-top"><p><i class="ib-up"></i>наверх</p></a>
	<!-- end form modal -->

		<!-- Bootstrap -->
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

	<?php wp_footer(); ?>
</body>

</html>
