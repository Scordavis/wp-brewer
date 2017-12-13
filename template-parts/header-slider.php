<!-- start slider -->
<div class="slider-container">
	<div class="slider-control left inactive"></div>
	<div class="slider-control right"></div>
	<ul class="slider-pagi"></ul>
	<div class="slider">
		<?php
			$id=4; // ID заданной рубрики
			$n=5;   // количество выводимых записей
			$recent = new WP_Query("cat=$id&showposts=$n"); 
			while($recent->have_posts()) : $recent->the_post();
		?>
		<div class="slide active">
			<div class="slide__bg" style="background-image: url(<?php echo get_field('slide-bg'); ?>);"></div>
			<div class="slide__content">
				<div class="container slide__content-wrap">
					<section class="slide__text">
						<h2 class="slide__text-heading" style="color: <?php echo get_field('text-color'); ?>"><?php echo get_field('slide-text'); ?></h2>
						<p class="slide__text-desc" style="color: <?php echo get_field('text-color'); ?>"></p> <a href="" class="slide__text-link" style="color: <?php echo get_field('buton-color'); ?>"><i class="top-border-btn" style="background-color: <?php echo get_field('buton-color'); ?>"></i><?php echo get_field('slide-btn'); ?><i class="bottom-border-btn" style="background-color: <?php echo get_field('buton-color'); ?>"></i></a> 
					</section>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
</div>
</div>
	<!-- end slider -->
