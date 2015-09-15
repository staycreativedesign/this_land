<section class="ecommerce">
	<?php

	   $args = array('cat=2');
	   $ecommerce_item = new WP_Query('tag=ecommerce_item_main&showposts=4');

	   if($ecommerce_item->have_posts()) :
	      while($ecommerce_item->have_posts()) :
	         $ecommerce_item->the_post();
	?>
					 <article>
		         <div class='post-content'><?php the_content() ?></div>
		         <h1><?php the_title() ?></h1>
	         </article>
	<?php endwhile;else: ?>

	      Oops, there are no posts.

	<?php
	   endif;
	?>
</section>