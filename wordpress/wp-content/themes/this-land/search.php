<?php get_header(); ?>
<h1>get</h1>
<main role="search" class="search searchphp" >
				<section class="filter">
					<p>
						Filter / Sort <i class="fa fa-caret-down"></i>
					</p>
				</section>
				<aside>
					<?php get_template_part('content', 'aside'); ?>
					<?php get_template_part('content', 'categories'); ?>
				</aside>
				<div class="content-searchbox">
					<?php
						 search_form(array(
						 	'placeholder'	=> 'Search Archives',
						 ));
					?>
				</div>
				<section class="search">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
				?>
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
					<?php
							}
						} else {
					?>
							<p>
								<?php _e( 'Sorry, no posts matched your criteria'); ?>
							</p>
					<?php } ?>
					<!-- <a href="#" class="load-story-btn">Load more stories</a> -->
					<!-- <?php
						// USERS
						$users = new WP_User_Query(array(
							'search' => '*' . strtolower( get_search_query() ) . '*',
						));
						// Loop through advertisers
						if ( ! empty( $users->results ) ) {
							foreach ( $users->results as $user ) {
								// Display user information
								echo '<article><a href="' . get_author_posts_url( $user->ID ) . '">' . $user->display_name . '</a></article>';
							}
						}
					?> -->
				</section>

			</main>
		</div>

<?php get_footer(); ?>