<?php /* Template Name: Portfolio Page */ get_header(); ?>

  <section class="services-rest" id="firework">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="scontainer">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <h1 class="services-rest__title"><?php the_title(); ?></h1>
        <div class="services-rest__undertitle">

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
