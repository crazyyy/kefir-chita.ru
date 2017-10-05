<?php /* Template Name: Portfolio Page */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section class="portfolio">
    <div class="scontainer">
      <p class="portfolio__title">Портфолио</p>

      <?php query_posts("showposts=20&post_type=portfolio"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="portfolio__block wow fadeIn">
          <div class="portfolio__item">
            <?php $images = get_field('gallery');
              $big_image = $images[0];
              $small_image_1 = $images[1];
              $small_image_2 = $images[2];
              $small_image_3 = $images[3];
             ?>
            <div class="portfolio__item-top">
              <a href="valinor/index.html" class="portfolio__item-img-wrap wow fadeIn" data-wow-delay="50ms">
                <div class="port-img-wrap">
                  <img src="<?php echo $small_image_1['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio__item-img">
                </div>
              </a>
              <a href="valinor/index.html" class="portfolio__item-img-wrap wow fadeIn" data-wow-delay="150ms">
                <div class="port-img-wrap">
                  <img src="<?php echo $small_image_2['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio__item-img">
                </div>
              </a>
              <a href="valinor/index.html" class="portfolio__item-img-wrap wow fadeIn" data-wow-delay="250ms">
                <div class="port-img-wrap">
                  <img src="<?php echo $small_image_3['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio__item-img">
                </div>
              </a>
            </div>
            <div class="portfolio__item-bottom">
              <a href="valinor/index.html" class="portfolio__item-bottom-img-wrap wow fadeIn" data-wow-delay="350ms">
                <img width="800" src="<?php echo $big_image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio__item-bottom-img wp-post-image">
              </a>
              <div class="portfolio__item-cloud wow fadeIn">
                <div class="portfolio__cloud-left">
                  <span class="portfolio__cloud-weddy"><?php the_field('short_title'); ?></span>
                  <a href="<?php the_permalink(); ?>" class="portfolio__cloud-weddy-name"><?php the_field('client'); ?></a>
                </div>
                <div class="portfolio__cloud-right">
                  <?php the_field('short_descr'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    </div>
  </section>

  <div class="push-footer"></div>

  <div class="dop_otzyvy">
    <div class="seo_text">
      <h1 class="price__title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
