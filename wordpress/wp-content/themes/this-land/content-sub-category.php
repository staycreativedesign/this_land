	<section class="sub-category">
		<?php

		?>
		<?php
			if ( is_front_page() && is_home() ) {
			  $query =  new WP_Query( 'tag=main_bottom&showposts=4' );
			} elseif ( is_front_page() ) {
				$query =  new WP_Query( 'tag=main_bottom&showposts=4' );
			} elseif ( is_home() ) {
				$query =  new WP_Query( 'tag=main_bottom&showposts=4' );
			} else {
			  $query =  new WP_Query( 'tag=main_bottom&showposts=4' );
			}
		?>

		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
			<article>
			<img src= <?php echo get_post_meta( $post->ID, 'meta-box-text', true );?>>
			<h2>
				<?php the_title(); ?>
			</h2>
				<?php echo truncate_excerpt(); ?> ...
				<?php the_category(); ?>
			</article>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>