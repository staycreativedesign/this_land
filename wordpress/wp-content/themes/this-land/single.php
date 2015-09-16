<?php get_header(); ?>
<?php
	global $post;
	$author_id=$post->post_author;
?>
	<main role="main" class="story">
			<?php echo get_post_meta( $post->ID, 'large-image-caption', true );?>
			<section>
					<aside>
						<figure>
							<img src= <?php echo get_post_meta( $post->ID, 'small-image-meta', true );?>>

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
							<span class="italics">by </span><?php the_author_meta('display_name', $author_id); ?>
						</p>
						<div class="date-category">
							<p>
								10/12/2015
							</p>
							<?php the_category(); ?>
						</div>
					</header>
					<aside>
						<figure>
							<img src= <?php echo get_post_meta( $post->ID, 'large-meta-box-text', true );?>>
							<figcaption>
								<?php echo get_post_meta( $post->ID, 'large-image-caption', true );?>

							</figcaption>
						</figure>
					</aside>
					<article>
					<?php echo $post->post_content; ?>
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
	<div class="subscribe">
		<p>
			<a href="<?php echo site_url('/subscriptions'); ?>">Subscribe yo!</a>
		</p>
	</div>
<?php get_footer(); ?>