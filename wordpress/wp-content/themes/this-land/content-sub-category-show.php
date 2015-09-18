	<?php $second_story  = get_post_meta( get_the_ID(), 'second-story-save', true ); ?>
	<?php $first_story	 = get_post_meta( get_the_ID(), 'first-story-save', true ); ?>
	<?php $first_ecommerce	 = get_post_meta( get_the_ID(), 'first-ecommerce-item-save', true ); ?>
	<?php $second_ecommerce	 = get_post_meta( get_the_ID(), 'second-ecommerce-item-save', true ); ?>

<section class="ecommerce-story">
		<?php {
		 		$currentID = get_the_ID();
		 		$exclude_ids = array( $currentID, $second_story, $first_story, 1 );
		 		$args = array(
		 			'showposts' => 1,
		 			'post__not_in' => $exclude_ids,
		 			'tag' => 'main_top',
		 			'orderby' => 'rand'
		 			);
		 		$large_story = new WP_Query( $args );
		 	 } ?>
		 <?php if( $large_story->have_posts() ) : while( $large_story->have_posts() ) : $large_story->the_post(); ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<article class="bottom">
					<h1><?php the_title(); ?></h1>
					<?php the_excerpt(); ?>
					<p>
						<span class="italics">by</span> <?php the_author(); ?>
					<?php the_category(); ?>
					</p>
				</article>
			</a>
			<?php endwhile; endif; wp_reset_postdata(); ?>
	<aside class="sub-category">
		<section>
			<?php
			  if ( $first_story ) {
			  	$args = array(
			  		'post__in' => array( absint( $first_story ) ),
			  	);
			  } else {
			  	$args = array(
			  		'posts_per_page'		=> 1,
			  		'post_not__in' 			=> array( get_the_ID(), $second_story,  ),
			  		'post_type'					=> 'post',
			  		'category_not__in'	=> array( 10, 1 ),
			  		'orderby'						=> 'rand',
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

			  if ( $second_story ) {
			  	$args = array(
			  		'post__in' => array( absint( $second_story ) ),
			  	);
			  } else {
			  	$args = array(
			  		'posts_per_page'		=> 1,
			  		'post_not__in' 			=> array( get_the_ID(), $first_story ),
			  		'post_type'					=> 'post',
			  		'category_not__in'	=> array( 10, 1 ),
			  		'orderby'						=> 'rand',
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
	</aside>
</section>
<section class="ecommerce-story">
	<?php {
		$currentID = get_the_ID();
		$exclude_these_ids = array( $currentID, $first_story, $second_story );
		$args = array(
			'showposts' => 1,
			'post__not_in' => $exclude_these_ids,
			'category_not__in'	=> array( 10, 1 ),
			'orderby' => 'rand'
			);
		$left_second = new WP_Query( $args );
	 } ?>
	 <?php if( $left_second->have_posts() ) : while( $left_second->have_posts() ) : $left_second->the_post(); ?>
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
	<aside class="sub-category">

			<?php
			  if ( $first_ecommerce ) {
			  	$args = array(
			  		'post__in' => array( absint( $first_ecommerce ) ),
			  	);
			  } else {
			  	$args = array(
			  		'posts_per_page'		=> 1,
			  		'category__in' 					=> array( 12 ),
			  		'post_type'					=> 'post',
			  		'orderby'						=> 'rand',
			  	);
			  }
				$first_ecommerce = new WP_Query( $args );
			?>
			<?php if( $first_ecommerce->have_posts() ) : while( $first_ecommerce->have_posts() ) : $first_ecommerce->the_post(); ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>">
				<article class="border-fix">
				<img src= <?php echo get_post_meta( get_the_ID(), 'meta-box-text', true );?>>
					<?php the_content(); ?>
					<h2 class="text-center">
						<?php the_title(); ?>
					</h2>
				</article>
				</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>

			<?php
						  if ( $second_ecommerce ) {
						  	$args = array(
						  		'post__in' => array( absint( $second_ecommerce ) ),
						  	);
						  } else {
						  	$args = array(
						  		'posts_per_page'		=> 1,
						  		'category__in' 					=> array( 12 ),
						  		'post_type'					=> 'post',
						  		'orderby'						=> 'rand',
						  	);
						  }
							$second_ecommerce = new WP_Query( $args );
						?>
						<?php if( $second_ecommerce->have_posts() ) : while( $second_ecommerce->have_posts() ) : $second_ecommerce->the_post(); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">
							<article class="border-fix">
							<img src= <?php echo get_post_meta( get_the_ID(), 'meta-box-text', true );?>>
								<?php the_content(); ?>
								<h2 class="text-center">
									<?php the_title(); ?>
								</h2>
							</article>
							</a>
					<?php endwhile; endif; wp_reset_postdata(); ?>
	</aside>
</section>
