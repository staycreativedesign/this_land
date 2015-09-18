<?php get_header(); ?>
	<main role="main" class="story">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php endwhile; else: ?>
		<p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
		<?php endif; ?>
			<section>
					<aside>
						<figure>
						<?php check_small_image($post); ?>
						</figure>

					</aside>
					<header>
						<h4>
							<?php the_excerpt(); ?>
						</h4>
						<h1>
							<?php the_title(); ?>
						</h1>
						<p>
							<span class="italics">by </span><?php the_author(); ?>
						</p>
						<div class="date-category">
							<p>
							<?php the_date( 'm/d/Y' ); ?>
							</p>
							<?php the_category(); ?>
						</div>
					</header>
					<?php large_image_set($post);	?>
					<article>
					<?php
						the_content();
					?>
					</article>
		</section>
	</main>
	<hr>
		<?php get_template_part('content', 'sub-category-show'); ?>

	</div>
<?php get_footer(); ?>