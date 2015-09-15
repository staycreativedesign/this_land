<?php get_header(); ?>
	<main role="search" class="search">
		<section class="filter">
			<p>
				Filter / Sort <i class="fa fa-caret-down"></i>
			</p>
		</section>
		<aside>
			<?php get_template_part('content', 'aside'); ?>
			<?php get_template_part('content', 'categories'); ?>
		</aside>
		<form method="get" id="searchformtwo" action="<?php bloginfo('home'); ?>/">
			<div class="content-searchbox">
			  <button type"submit"  class="button-submit" style="border: none;background-color: white;"><i class="fa fa-search"></i></button>
		    <input type="text" class="form-control" placeholder="Search Archives" />
			</div>
		</form>
		<section class="search">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
			<a href="<?php echo esc_url( get_permalink() ); ?>">

				<img src= <?php echo get_post_meta( $post->ID, 'meta-box-text', true );?>>
				<h2>
					<?php the_title(); ?>
				</h2>
				<?php the_excerpt(); ?>
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