<?php get_header(); ?>

<div class="corpotate">
  <div class="scontainer">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    <h1 class="sovety__title"><?php the_category(', '); ?></h1>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="sovety__item">
          <div class="sovety__item-left">
            <div class="sovety__item-imgwrap">
              <div class="sovety__bg-img">
                <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                </a><!-- /post thumbnail -->
              </div>
            </div>
          </div>
          <div class="sovety__item-right">
            <h3 class="sovety__item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="sovety__block__excerpt">
              <?php wpeExcerpt('wpeExcerpt40'); ?>
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      <?php endwhile; endif; ?>


    <?php get_template_part('pagination'); ?>

  </div>
</div>

<?php get_footer(); ?>
