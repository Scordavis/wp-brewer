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
		<h2 class="seo-page-title">Вводный текст с СЕО-содержанием, для индексации поисковиками</h2>
		<p class="seo-page-description">После 1989 года наследники последнего владельца ресторана Франтишека Брабеца предъявили свои реституционные требования, вновь открыли ресторан U Pinkasu после перестройки в конце 1991 года и содержали его вплоть до середины 2001 года, когда всё здание было выкуплено компанией Adria-Neptun spol. s r.o. Её бизнес-планом является продолжение знаменитой истории разлива пльзеньского пива в ресторане U Pinkasu и создание здесь приятной атмосферы для всех, кто любит хорошее пиво и традиционную чешскую гастрономию. Таки образом, Pilsner Urquell здесь будет разливаться уже третье столетие, и вне всякого сомнения его объёмы достигнут показателей, полученных до реконструкции. В источниках упоминается, что за год здесь посетители выпивали около шести тысяч гектолитров – столько же, сколько и в известной пивоварне U Fleků, имеющей в пять раз больше мест для посетителей. Причина такого сбыта проста – кое-кто приходил к Пинкасам на один-два бокала, однако рекордсмены подсчитывали свои ежедневные порции в десятках. </p>
	</section>
	<!-- start menu responsive tab -->
	<div class="container menu-tabs">
		<ul id="menuTabs" class="nav nav-tabs ul-menu-tabs">
			<li class="active"><a class="menu-tab" href="#kitchen" data-toggle="tab">Меню кухни</a></li>
			<li><a href="#pub" class="menu-tab" data-toggle="tab">Меню бара</a></li>
		</ul>
		<div id="menuContent" class="tab-content menu-tab-wrapper">





			<div class="tab-pane menu-tab-content-wrapper in active" id="kitchen">
				
				<!-- start row menu-tab-item -->
				<div class="row menu-tab-content">
					<?php
					   $id=7; // ID заданной рубрики
					   $recent = new WP_Query("cat=$id"); 
					   while($recent->have_posts()) : $recent->the_post(); ?> 
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
					<?php if ($wp_query->current_post % 2 == 0) { ?>
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
					<!-- start row menu-tab-content -->
					<div class="row menu-tab-content">
						<!-- start menu-tab-item -->
						<div class="col-md-6 menu-tab-item">
							<!-- start menu-row-item -->
							<div class="menu-row-item">
								<!-- start-img-wrapper -->
								<img src="img/menu-pub-1.jpg" alt="" class="img-respomsive thumb meal-thumb">
								<!-- end-img-wrapper -->
								<h3 class="meal-heading">Пиво номер 1</h3>
								<!-- start meal-table-wrap -->
								<div class="meal-table-wrap">
									<!-- start table row -->
									<div class="meal-table-row">
										<p>сорт</p>
										<p>450 гр.</p>
									</div>
									<!-- end table row -->
									<!-- start table row -->
									<div class="meal-table-row">
										<p>стиль</p>
										<p>200 ККал.</p>
									</div>
									<!-- end table row -->
									<!-- start table row -->
									<div class="meal-table-row">
										<p>Цена</p>
										<p>500 руб.</p>
									</div>
									<!-- end table row -->
								</div>
								<!-- end meal-table-wrap -->
								<p class="meal-description">Это что-то!!! Полнейший восторг!!! Предлагаю вашему вниманию нежнейшее мясо свинины, которое готовится безумно просто, и вам понадобится минимум посуды, ведь все за вас сделает духовка! Мясо в 100 % будет нежнейшим! </p>
							</div>
							<!-- end menu-row-item -->
						</div>
						<!-- end menu-tab-item -->
						<!-- start menu-tab-item -->
						<div class="col-md-6 menu-tab-item">
							<!-- start menu-row-item -->
							<div class="menu-row-item">
								<!-- start-img-wrapper -->
								<img src="img/menu-pub-2.jpg" alt="" class="img-respomsive thumb meal-thumb">
								<!-- end-img-wrapper -->
								<h3 class="meal-heading">Пиво номер 2</h3>
								<!-- start meal-table-wrap -->
								<div class="meal-table-wrap">
									<!-- start table row -->
									<div class="meal-table-row">
										<p>Вес</p>
										<p>150 гр.</p>
									</div>
									<!-- end table row -->
									<!-- start table row -->
									<div class="meal-table-row">
										<p>Каллорийность</p>
										<p>100 ККал.</p>
									</div>
									<!-- end table row -->
									<!-- start table row -->
									<div class="meal-table-row">
										<p>Цена</p>
										<p>700 руб.</p>
									</div>
									<!-- end table row -->
								</div>
								<!-- end meal-table-wrap -->
								<p class="meal-description">Нежный своеобразный насыщенный вкус отбивных с молочной ноткой. Ничего особенного в приготовлении, но какой результат! Попробуйте, не пожалеете. Это рецепт разработан нашими поварами, специально для наших гостей!</p>
							</div>
							<!-- end menu-row-item -->
						</div>
						<!-- end menu-tab-item -->
					</div>
					<!-- end row menu-tab-content -->
				</div>
				<!-- end pub content -->
			</div>
		</div>
		<!-- end menu responsive tab -->
	</main>

	<?php
	get_footer(); ?>
