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
								10/12/2015
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
	<section class="ecommerce-story">
		<?php get_template_part('content', 'sub-category-show-left'); ?>
		<aside class="sub-category">
			<?php get_template_part('content', 'sub-category-show'); ?>
		</aside>
	</section>
	<section class="ecommerce-story">
		<?php get_template_part('content', 'sub-category-show-left-2'); ?>
		<aside class="sub-category">
			<?php get_template_part('content', 'sub-category-show-2'); ?>
		</aside>
	</section>
	</div>
<?php get_footer(); ?>