<?php
  /*
    Template Name: Main Page
  */
?>
  <?php get_header(); ?>
    <main role="main" class="index">
      <?php {
           $rotator = new WP_Query( 'tag=main_rotating' );
         } ?>
        <div class="slider-wrapper theme-default main-image">
          <div id="slider" class="nivoSlider">
            <?php if( $rotator->have_posts() ) : while( $rotator->have_posts() ) : $rotator->the_post(); ?>
              <a href="<?php echo esc_url( get_permalink() ); ?>">
              <img src="<?php echo get_post_meta( get_the_ID(), 'large-meta-box-text', true ); ?>">
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
      </div>
      <?php if(is_home() || is_front_page()) {
        $query = new WP_Query( 'tag=main_top&showposts=4' );
       } ?>

        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="article-wrapper">
                      <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <article class="main">
                          <h1><?php the_title(); ?></h1>
                            <?php echo get_the_popular_excerpt(); ?>
                          <p>
                            <span class="italics">by </span><?php the_author(); ?>
                          </p>
                            <?php the_category(); ?>
                        </article>
                      </a>
                      </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </main>
      <?php get_template_part('content', 'sub-category'); ?>
      <?php get_template_part('content', 'ecommerce'); ?>
    </div>
  </div>

  <?php get_footer(); ?>