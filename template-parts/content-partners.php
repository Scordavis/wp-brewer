		<!-- start partners -->
		<div class="container partners">
			<?php if ( have_posts() ) : query_posts('category_name=partners');
    while (have_posts()) : the_post(); ?>  
<?php endwhile; endif; wp_reset_query(); ?>
		</div>
