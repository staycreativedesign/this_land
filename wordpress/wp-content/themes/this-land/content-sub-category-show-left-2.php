	<?php {
		$currentID = get_the_ID();
		$exclude_ids = array( $currentID );
		$args = array(
			'showposts' => 1,
			'post__not_in' => $exclude_ids,
			'orderby' => 'rand'
			);
		$query = new WP_Query( $args );
	 } ?>
	 <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
		<article class="bottom">
			<h1><?php the_title(); ?></h1>
			<?php the_excerpt(); ?>
			<p>
				<span class="italics">by</span> <?php the_author(); ?>
			</p>
			<?php the_category(); ?>
		</article>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
	<?php endwhile; endif; wp_reset_postdata(); ?>