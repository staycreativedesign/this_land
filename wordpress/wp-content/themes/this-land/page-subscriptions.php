<?php
	/*
		Template Name: 2 Column layout
	*/
?>
	<?php get_header(); ?>
			<main role="main" class="about">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; else : ?>
							<p>
								<?php _e( 'Sorry, no pages available for that search'); ?>
							</p>
					<?php endif; ?>
			</main>
	</div>

<?php get_footer(); ?>