<?php
	/*
		Template Name: Main Page
	*/
?>
	<?php get_header(); ?>
		<main role="main" class="index">
			<div class="main-image">
					<img src="http://devthisland.wpengine.com/wp-content/uploads/2015/09/main-image1.jpg" alt="">
				</div>
			<?php if(is_home() || is_front_page()) {
	     	query_posts('tag=main_bottom&showposts=4');
	     } ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="article-wrapper">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<article class="main">
						<h1><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
						<p>
							<span class="italics">by </span><?php the_author(); ?>
						</p>
							<?php the_category(); ?>
					</article>
				</a>
				</div>
		<?php endwhile; else : ?>
				<p>
					<?php _e( 'Sorry, no posts matched your criteria'); ?>
				</p>
		<?php endif; ?>
			</main>
			<?php get_template_part('content', 'sub-category'); ?>
			<?php get_template_part('content', 'ecommerce'); ?>
		</div>
		<div class="subscribe">
			<p>
				<a href="<?php echo site_url('/subscriptions'); ?>">Subscribe yo!</a>
			</p>
		</div>
	</div>

	<?php get_footer(); ?>