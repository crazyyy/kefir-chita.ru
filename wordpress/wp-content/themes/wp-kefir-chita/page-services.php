<?php /* Template Name: Services Page */ get_header(); ?>


  <section class="services-rest" id="firework">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="scontainer">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <h1 class="services-rest__title"><?php the_title(); ?></h1>
        <div class="services-rest__undertitle">

          <?php if( have_rows('services_list') ): ?>
            <div class="services__list">
              <?php while ( have_rows('services_list') ) : the_row(); $image = get_sub_field('image'); $block_type = get_sub_field('block_type'); ?>
                  <?php if( $block_type == 'big' ) {
                    $style=" height: 287px;";
                    $class="";
                  } else if( $block_type == 'big-horitont' ) {
                    $style ="";
                    $class ="services__items2";
                  } else {
                    $style ="";
                    $class ="";
                  } ?>

                <div class="services__items <?php echo $class; ?>">

                  <a href="<?php the_sub_field('href'); ?>" style="background-image: url('<?php echo $image['url']; ?>'); <?php echo $style; ?>" class="services__item-link wow fadeIn">
                    <div class="services__item-hover">
                      <span class="services__item-title"><?php the_sub_field('title'); ?></span>
                    </div>
                  </a>

                  <?php if( $block_type == 'big-two' ): ?>
                  <?php $image = get_sub_field('image2'); ?>
                    <a href="<?php the_sub_field('href2'); ?>" style="background-image: url('<?php echo $image['url']; ?>'); <?php echo $style; ?>" class="services__item-link wow fadeIn">
                      <div class="services__item-hover">
                        <span class="services__item-title"><?php the_sub_field('title2'); ?></span>
                      </div>
                    </a>
                  <?php endif; ?>

                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <div class="seo_rubrika_text">
            <?php if(get_field('seo_text')) { ?>
              <h2><?php the_field('seo_text'); ?></h2>
            <?php } ?>

            <?php the_content(); ?>
          </div><!-- seo_rubrika_text -->

        </div><!-- services-rest__undertitle -->
      </div><!-- scontainer -->

    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
