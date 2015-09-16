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
        $query = new WP_Query( 'tag=main_top&showposts=4' );
       } ?>

        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </main>
      <?php get_template_part('content', 'sub-category'); ?>
      <?php get_template_part('content', 'ecommerce'); ?>
    </div>
  </div>

  <?php get_footer(); ?>