<?php get_header(); ?>
	<main role="search" class="search archive">
		<section class="filter">
			<p>
				Filter / Sort <i class="fa fa-caret-down"></i>
			</p>
		</section>
		<aside>
			<?php get_template_part('content', 'aside'); ?>
			<?php get_template_part('content', 'categories'); ?>
		</aside>
		<section class="search">
		<?php

				   $allposts = new WP_Query( array( 'tag__not_in' => array( 186, 1 ) ) );

				   if($allposts->have_posts()) :
				      while($allposts->have_posts()) :
				         $allposts->the_post();
				?>
			<article>
			<a href="<?php echo esc_url( get_permalink() ); ?>">

				<img src= <?php echo get_post_meta( $post->ID, 'meta-box-text', true );?>>
				<h2>
					<?php the_title(); ?>
				</h2>
				<p>
				<?php echo truncate_search_excerpt(); ?>
				</p>
				<?php the_category(); ?>
			</a>
			</article>
			<?php endwhile; else : ?>
					<p>
						<?php _e( 'Sorry, no posts matched your criteria'); ?>
					</p>
			<?php endif; ?>
			<!-- <a href="#" class="load-story-btn">Load more stories</a> -->
		</section>
	</main>
	</div>

<?php get_footer(); ?>