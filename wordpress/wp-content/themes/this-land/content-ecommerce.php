<section class="ecommerce">
	<?php

	   $ecommerce_item = new WP_Query('tag=ecommerce_item_main&showposts=4');

	   if($ecommerce_item->have_posts()) :
	      while($ecommerce_item->have_posts()) :
	         $ecommerce_item->the_post();
	?>
					 <article>
					 	<a href="<?php echo get_the_excerpt(); ?>" target="_blank">
			         <div class='post-content'><?php the_content(); ?></div>
			         <h1><?php the_title() ?></h1>
			      </a>
	         </article>
	<?php endwhile;else: ?>

	      Oops, there are no posts.

	<?php
	   endif;
	?>
</section>