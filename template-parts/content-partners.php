		<!-- start partners -->
		<div class="container partners">

			<?php
			$recent = new WP_Query("cat=2"); 
			while($recent->have_posts()) : $recent->the_post();
				?>
				<a href="<?php echo get_post_meta($post->ID, 'ssylka', true); ?>" target="_blank"><?php the_post_thumbnail(); ?></a>
			<?php endwhile; ?>	
		</div>
