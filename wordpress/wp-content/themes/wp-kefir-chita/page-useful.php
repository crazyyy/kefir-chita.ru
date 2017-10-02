<?php /* Template Name: Useful Page */ get_header(); ?>

  <section class="services-rest" id="firework">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="scontainer">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <h1 class="services-rest__title"><?php the_title(); ?></h1>
        <div class="services-rest__undertitle">


          <?php if( have_rows('services__list') ): ?>
            <div class="services__list">
              <?php while( have_rows('services__list') ): the_row(); $title = get_sub_field('title'); $link = get_sub_field('link'); $image = get_sub_field('image'); ?>

                <div class="services__items" style="margin: 0 25% 0 0;">
                  <a href="<?php echo $link; ?>" style="visibility: visible; animation-delay: 900ms; animation-name: fadeIn; background-image: url('<?php echo $image['url']; ?>');" class="services__item-link wow fadeIn wide-block" data-wow-delay="900ms">
                    <div class="services__item-hover">
                      <span class="services__item-title" style="width: auto"><?php echo $title; ?></span>
                    </div>
                  </a>
                </div>

              <?php endwhile; ?>
            </div>

          <?php endif; ?>

          <div class="seo_text">

            <?php if(get_field('seo_text')) { ?>
              <h2><?php the_field('seo_text'); ?></h2>
            <?php } ?>

            <?php the_content(); ?>
          </div>

        </div><!-- services-rest__undertitle -->
      </div><!-- scontainer -->

    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
