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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<figure>
	 				<?php the_post_thumbnail(); ?>
	 			</figure>
				<h2>
					<?php the_title(); ?>
				</h2>
				<p>
				<?php echo truncate_search_excerpt(); ?>
				</p>
				<p>
 					<?php the_author(); ?>
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
			<?php kriesi_pagination(); ?>
		</section>
	</main>
	</div>

<?php get_footer(); ?>