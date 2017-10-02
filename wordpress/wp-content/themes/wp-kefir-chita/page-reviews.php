<?php /* Template Name: Reviews Page */ get_header(); ?>

  <section class="services-rest" id="firework">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="scontainer">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <h1 class="services-rest__title"><?php the_title(); ?></h1>
        <div class="services-rest__undertitle">

        <div class="reviews__list">

          <?php query_posts( array('post_type' => review, 'showposts' => 15 )); ?>
          <?php $i=0; while ( have_posts() ) : the_post(); ?>
            <div id="rest-<?php echo $i; ?>" class="reviews__item clearfix wow fadeIn" data-wow-offset="200" style="visibility: visible; animation-name: fadeIn;">
              <div class="reviews__item-left">
                <div class="reviews__item-imgwrap">
                  <div class="reviews__bg-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/otzyv.png" alt="kefir" class="reviews__item-img">
                  </div>
                </div>
                <span class="reviews__item-client"><?php the_field('authore'); ?></span>
                <span class="reviews__item-date"></span>
              </div>
              <div class="reviews__item-right">
                <p class="reviews__item-title"><?php the_title(); ?></p>
                <div class="reviews__item-contain">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; ?>

        </div>

        </div><!-- services-rest__undertitle -->
      </div><!-- scontainer -->

    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
