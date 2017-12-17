		<!-- start partners -->
		<div class="container partners">

			<?php
			$partnerslink = new WP_Query("cat=2"); 
			while($partnerslink->have_posts()) : $partnerslink->the_post();
				?>
			<a href="<?php echo get_field('partner-link'); ?>" target="_blank">
				<?php 
				$logo = get_field('partner-logo');
				if (!empty($logo)): ?>
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
				<?php endif; ?>
			</a>
			<?php endwhile; ?>	
		</div>
