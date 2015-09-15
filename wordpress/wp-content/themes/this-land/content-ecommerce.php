<section class="ecommerce">
	<?php

	   $args = array('tag=ecommerce_item');
	   $category_posts = new WP_Query($args);

	   if($category_posts->have_posts()) :
	      while($category_posts->have_posts()) :
	         $category_posts->the_post();
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