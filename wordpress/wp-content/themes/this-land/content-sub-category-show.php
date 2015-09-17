	<section>
		<?php
		  $first_story = get_post_meta( get_the_ID(), 'first-story-save', true );
		  if ( $first_story ) {
		  	$args = array(
		  		'post__in' => array( absint( $first_story ) ),
		  	);
		  } else {
		  	$args = array(
		  		'posts_per_page'		=> 1,
		  		'post_not__in' 			=> array( get_the_ID() ),
		  		'post_type'					=> 'post',
		  		'category_not__in'	=> array( 12, 1 ),
		  		'orderby'						=> 'RAND',
		  	);
		  }
			$story = new WP_Query( $args );
		?>
		<?php if( $story->have_posts() ) : while( $story->have_posts() ) : $story->the_post(); ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
			<article>
			<img src= <?php echo get_post_meta( get_the_ID(), 'meta-box-text', true );?>>
			<h2>
				<?php the_title(); ?>
			</h2>
				<?php the_excerpt(); ?>
				<?php the_category(); ?>
			</article>
			</a>
	<?php endwhile; endif; wp_reset_postdata(); ?>

<!-- second story -->
		<?php
		  $second_story = get_post_meta( get_the_ID(), 'second-story-save', true );
		  if ( $second_story ) {
		  	$args = array(
		  		'post__in' => array( absint( $second_story ) ),
		  	);
		  } else {
		  	$args = array(
		  		'posts_per_page'		=> 1,
		  		'post_not__in' 			=> array( get_the_ID() ),
		  		'post_type'					=> 'post',
		  		'category_not__in'	=> array( 12, 1 ),
		  		'orderby'						=> 'RAND',
		  	);
		  }
			$story = new WP_Query( $args );
		?>
		<?php if( $story->have_posts() ) : while( $story->have_posts() ) : $story->the_post(); ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
			<article>
			<img src= <?php echo get_post_meta( get_the_ID(), 'meta-box-text', true );?>>
			<h2>
				<?php the_title(); ?>
			</h2>
				<?php the_excerpt(); ?>
				<?php the_category(); ?>
			</article>
			</a>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
