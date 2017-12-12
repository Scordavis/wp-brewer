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
		<a href=""><img src="<?php echo get_field('whitelogo', 80); ?>" alt="клуб чешских пивоваров" title="На главную"></a>
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
			<p class="footer-text socials">Мы в соцсетях<span><a href="https://vk.com/feed" target="_blank" class="ib-vk white-link"></a></span></p>
			<p class="footer-text copyright">
				<?php 
				$options = get_option('sample_theme_options');
				echo $options['copyright'];?>					
			</p>
		</section>
	</footer>
	<!-- end page-footer -->
	<!-- start form modal -->
	<div class="modal-form-wrapper" style="display: none;" id="form-callback">
		<p class="form-brand-wrapper"><img src="<?php echo get_template_directory_uri() ?>/img/logo-origin.png" alt="Клуб Чешских Пивоваров" class="form-brand"></p>
		<div class="form-thanks">
			<form class="popup-callback">
				<h3>Оставьте заявку на заказ столика!</h3>
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Клуб Чешских Пивоваров">
				<input type="hidden" name="admin_email" value="scordavis@gmail.com">
				<input type="hidden" name="form_subject" value="тема письма не указана">
				<!-- END Hidden Required Fields -->
				<div class="form-wrapper">
					<input type="text" name="Имя" class="form-control" placeholder="Имя">
					<input type="text" name="Phone" class="form-control masked-input" placeholder="Телефон" required>
					<button type="submit" class="btn btn-default form_send_button">Заказать</button>
				</div>
				<p class="form_agree_text">Нажимая на кнопку "Заказать", вы <a onclick="window.open('policy.html','_blank')">даете согласие</a> на обработку своих персональных данных</p>
			</form>
			<!-- thanks_wrapper -->
			<div class="thanks_wrapper">
				<div class="thanks_text">
					<p class="thanks_head">Благодарим за заявку!</p>
					<div class="thanks_message"><p>Мы свяжемся с Вами в ближайшее время</p></div>
					<p class="thanks_close">закрыть</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end form modal -->
	<!-- start form modal -->
	<div class="map-wrapper" style="display: none;" id="map-popup">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1123.3181009404266!2d37.61823008453575!3d55.730074233115026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1511951772671" width="800" height="600" frameborder="0" style="border:0; padding: 0;" allowfullscreen></iframe>
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
