<?php get_header(); ?>
<main role="search" class="search datephp">
				<section class="filter">
					<p>
						Filter / Sort <i class="fa fa-caret-down"></i>
					</p>
				</section>
				<aside>
					<ul>
						<li>
							<h2>Order</h2>
						</li>
						<li>
							Date Published <i class="fa fa-caret-down"></i>
						</li>
						<li>
							Author Name
						</li>
						<li>
							Title
						</li>
					</ul>
					<?php get_template_part('content', 'categories'); ?>
				</aside>
				<section class="search">
				<div class="sub-category-search inner-addon left-addon">
			    <i class="fa fa-search"></i>
			    <input type="text" class="form-control" placeholder="Search Archives" />
				</div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article>
						<img src= <?php echo get_post_meta( $post->ID, 'meta-box-text', true );?>>
						<h2>
							<?php the_title(); ?>
						</h2>
						<?php the_excerpt(); ?>
						<?php the_category(); ?>
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