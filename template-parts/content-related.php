
	


<?php
   $id=5; // ID заданной рубрики
   $n=3;   // количество выводимых записей
   $recent = new WP_Query("cat=$id&showposts=$n"); 
   while($recent->have_posts()) : $recent->the_post();   	?>


   <a href="<?php the_permalink() ?>">
   	<figure class="col-md-4 recommended-article">
   		<img src="<?php the_post_thumbnail_url( ) ?>" class="wrapper-thumb">
   		<figcaption><?php the_title( ) ?></figcaption>
   	</figure>
   </a>	
   


 <?php endwhile; ?>


			

