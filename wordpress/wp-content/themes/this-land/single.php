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
						<?php check_for_excerpt($post)?>
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
					<?php check_for_soundcloud($post); ?>
					<!-- /4053978/DoWhat_OKC_120x240_1 -->


					<!-- /4053978/DoWhat_Tulsa_336x550_L -->
	<!-- 				<div id='div-gpt-ad-1443629402046-15' style='height:550px; width:336px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443629402046-15'); });
					</script>
					</div> -->

					<!-- /4053978/DoWhat_Tulsa_336x550_R -->
					<!-- <div id='div-gpt-ad-1443629402046-16' style='height:550px; width:336px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443629402046-16'); });
					</script>
					</div> -->


					<!-- /4053978/ThisLand_Sidebar_336x550 -->
<!-- 					<div id='div-gpt-ad-1443629402046-36' style='height:550px; width:336px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443629402046-36'); });
					</script>
					</div>
 -->
					<!-- /4053978/ThisLand_Sidebar_336x550_L -->
<!-- 					<div id='div-gpt-ad-1443629402046-37' style='height:550px; width:336px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443629402046-37'); });
					</script>
					</div>
 -->
					<!-- /4053978/ThisLand_Sidebar_336x550_R -->
					<!-- <div id='div-gpt-ad-1443629402046-38' style='height:550px; width:336px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443629402046-38'); });
					</script>
					</div> -->

					<!-- /4053978/ThisLand_Sidebar_Bottom_336x280 -->
					<!-- <div id='div-gpt-ad-1443629402046-39' style='height:280px; width:336px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443629402046-39'); });
					</script>
					</div> -->
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