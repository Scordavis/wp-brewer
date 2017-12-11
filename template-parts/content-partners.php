		<!-- start partners -->
		<div class="container partners">
			<?php if ( have_posts() ) : query_posts('category_name=partners');
    while (have_posts()) : the_post(); ?>  
<a onclick="window.open('http://www.pivovar-frydlant.com','_blank')"><?php the_post_thumbnail(); ?></a>
<?php endwhile; endif; wp_reset_query(); ?>
		</div>
