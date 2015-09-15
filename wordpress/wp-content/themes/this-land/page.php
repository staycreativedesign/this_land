	<?php get_header(); ?>
			<main role="main" class="story">
				<section>
				<a href="<?php echo esc_url( get_permalink() ); ?>">
				<article>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; else : ?>
							<p>
								<?php _e( 'Sorry, no pages available for that search'); ?>
							</p>
					<?php endif; ?>
				</article>
				</a>
			</section>
		</main>
	</div>

<?php get_footer(); ?>