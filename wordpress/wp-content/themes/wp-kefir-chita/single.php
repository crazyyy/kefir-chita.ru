<?php get_header(); ?>

  <section class="services-rest" id="firework">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <div class="scontainer">
        <h1 class="services-rest__title"><?php the_title(); ?></h1>
        <div class="services-rest__undertitle">

          <div class="seo_text">
            <h2>Корпоративная культура, как важнейший инструмент мотивации персонала: зачем проводить корпоративы?</h2>
            <?php the_content(); ?>
          </div>

        </div><!-- services-rest__undertitle -->
      </div><!-- scontainer -->
    <?php endwhile; endif; ?>

  </section>

<?php get_footer(); ?>