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
	<main class="container-fluid main-section dark" id="description" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/bg-main-section.jpg);">
		<div class="green-filter"></div>		
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?>/img/venzel-yellow.png" alt="" class="divider">
			<div class="col-md-5 about">
				<?php $id = 6; // add the ID of the page where the zero is
				$p = get_page($id);
				$t = $p->post_title;
				echo apply_filters('the_excerpt', $p->post_content);
				?>
			</div>
			<div class="col-lg-6 col-lg-offset-1 col-md-offset-1 col-md-6 news">
				<div class="news-preview-wrapper">
					<h3>Субботнее мероприятие</h3>
					<article>Дело было в 1843 году. Господин Якуб Пинкас –  портной, выполняющий, помимо прочего, пошив священнического облачения для францисканского монастыря, – прослышав о новом пиве, которое недавно начали варить на Мещанском пивоваренном заводе в Пльзене...</article>
					<a href="single.html" class="read-more">Читать далее</a>	
				</div>	
				<div class="news-preview-wrapper">
					<h3>Праздничное открытие!</h3>
					<article>Ввиду того, что все они были очарованы в такой же степени, как и Пинкас, и всё больше находилось людей, желавших отведывать его снова и снова, Якуб Пинкас вскоре забросил портняжный промысел и стал трактирщиком...</article>
					<a href="single-1.html" class="read-more">Читать далее</a>	
				</div>	
			</div>
		</div>
		<!-- start partners -->
		<div class="container partners">
			<div class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2"><a onclick="window.open('http://www.pivovarantos.cz','_blank')"><img src="<?php echo get_template_directory_uri() ?>/img/ico-pivovarantos.png" alt="pivovarantos" title="pivovarantos" class="ico-partner"></a></div>
			<div class="col-lg-2 col-md-2 col-sm-2"><a onclick="window.open('http://www.novanaves.cz','_blank')"><img src="<?php echo get_template_directory_uri() ?>/img/ico-novanaves.png" alt="novanaves" title="novanaves" class="ico-partner"></a></div>
			<div class="col-lg-2 col-md-2 col-sm-2"><a onclick="window.open('http://www.pivovarkunratice.cz','_blank')"><img src="<?php echo get_template_directory_uri() ?>/img/ico-pivovarkunratice.png" alt="pivovarkunratice" title="pivovarkunratice" class="ico-partner"></a></div>
			<div class="col-lg-2 col-md-2 col-sm-2"><a onclick="window.open('http://pivochroust.cz','_blank')"><img src="<?php echo get_template_directory_uri() ?>/img/ico-pivochroust.png" alt="pivochroust" title="pivochroust" class="ico-partner"></a></div>
			<div class="col-lg-2 col-md-2 col-sm-2"><a onclick="window.open('http://www.pivovar-frydlant.com','_blank')"><img src="<?php echo get_template_directory_uri() ?>/img/ico-pivovar-frydlant.png" alt="pivovar-frydlant" title="pivovar-frydlant" class="ico-partner"></a></div>
		</div>
		<!-- end partners -->
	</main>
	<!-- end main section -->
	<!-- start menu-preview -->
	<section class="container-fluid menu-preview" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/bg-yellow-noise.jpg);">
		<img src="<?php echo get_template_directory_uri() ?>/img/venzel-dark.png" alt="" class="divider">
		<div class="float-logo" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/logo-float.png);">
		</div>
		<div class="container">
			<div class="col-md-6 menu-preview-content">
				<h3>Меню кухни</h3>
				<img src="<?php echo get_template_directory_uri() ?>/img/thumb-kitchen.jpg" alt="меню кухни Клуба Чешских Пивоваров" class="thumb">
				<p>Мы выполняем любые пожелания наших гостей, и знаем, как организовать свадьбу, юбилей, банкет, фуршет или корпоративную встречу. Наша задача — приятно удивить вас, предложить что-то интересное и сделать так, чтобы Ваш праздник запомнился Вам надолго.Если у вас большой праздник, и вы хотите его отметить, обращайтесь к нам. <br><br>Наш просторный Банкетный зал может вместить всех желающих (220 гостей для фуршета и до 180 гостей для банкета). Мы организуем торжественный ужин, создадим обстановку по вашему желанию. </p>
				<a href="menu.html#kitchen" id="menulink" class="button-link">подробнее</a>
			</div>
			<div class="col-md-6 menu-preview-content">
				<h3>Меню бара</h3>
				<img src="<?php echo get_template_directory_uri() ?>/img/thumb-pub.jpg" alt="меню бара Клуба Чешских Пивоваров" class="thumb">
				<p>Вы любите с друзьями собираться для просмотра футбольных матчей и других спортивных мероприятий? Специально для Вас - наша закрытая терраса, оборудованная большими и качественными телевизионными системами - где бы Вы не сидели, Вы не пропустите ни одного интересного момента! <br><br>У Вас особое событие и Вы хотели бы провести вечер с близким Вам человеком? Нет проблем - к Вашим услугам уютный Малый зал на втором этаже. В этом зале может удобно расположиться и довольно большая компания друзей.</p>
				<a href="menu.html#pub" id="publink" class="button-link">подробнее</a>
			</div>
		</div>
	</section>
	<!-- end menu-preview -->

<?php
get_footer();
