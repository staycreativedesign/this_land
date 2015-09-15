	<section>
		<?php
		$currentID = get_the_ID();
		$exclude_ids = array( $currentID );
		$args = array(
			'showposts' => 2,
			'post__not_in' => $exclude_ids,
			'orderby' => 'rand'			
			);
		$query = new WP_Query( $args );		?>
		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
			<article>
			<img src= <?php echo get_post_meta( $post->ID, 'meta-box-text', true );?>>
			<h2>
				<?php the_title(); ?>
			</h2>
				<?php the_excerpt(); ?>
				<?php the_category(); ?>
			</article>
			</a>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
