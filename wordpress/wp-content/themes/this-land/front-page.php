<?php
  /*
    Template Name: Main Page
  */
?>
  <?php get_header(); ?>

      <main role="main" class="index">
        <?php {
            {
             $rotator = new WP_Query( 'tag=main_rotating' );
           } ?>
          <div class="slider-wrapper theme-default main-image desktop">
            <div id="slider" class="nivoSlider">
              <?php if( $rotator->have_posts() ) : while( $rotator->have_posts() ) : $rotator->the_post();
                  ?>
                    <?php
                      $image_url = get_post_meta( get_the_ID(), 'rotatimg-image-save', true );
                      $attachment = get_post( get_attachment_id_from_src( $image_url ) );
                      $test = get_post( $image_url );
                      // echo '<pre>'; print_r($test->post_excerpt); echo '</pre>'
                    ?>
                    <a href="<?php echo $test->post_excerpt ?>" target="_blank">
                    <img src="<?php echo wp_get_attachment_url( $image_url ); ?>">
                    </a>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div> <?php
      }
      ?>

        <?php {
            {
             $rotator = new WP_Query( 'tag=mobile_main_rotating' );
           } ?>
           <div class="main-image mobile">
              <?php if( $rotator->have_posts() ) : while( $rotator->have_posts() ) : $rotator->the_post();
                  ?>
                    <?php
                      $image_url = get_post_meta( get_the_ID(), 'rotatimg-image-save', true );
                      $attachment = get_post( get_attachment_id_from_src( $image_url ) );
                      $test = get_post( $image_url );
                      // echo '<pre>'; print_r($test->post_excerpt); echo '</pre>'
                    ?>
                      <a href="<?php echo $test->post_excerpt ?>" target="_blank">
                      <img src="<?php echo wp_get_attachment_url( $image_url ); ?>">
                      </a>
              <?php endwhile; endif; wp_reset_postdata(); ?>
              </div>
        <?php
      }
      ?>




      <?php if(is_home() || is_front_page()) {
        $query = new WP_Query( 'tag=main_top&showposts=4' );
       } ?>

        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="article-wrapper">
                      <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <article class="main">
                          <h1><?php the_title(); ?></h1>
                            <p><?php echo the_excerpt(); ?></p>
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