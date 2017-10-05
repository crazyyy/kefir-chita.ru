<?php get_header(); ?>

  <section class="port-inner">
    <div class="scontainer">


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <h1 class="port-inner__title"> Банк ВТБ</h1>
      <span class="port-inner__undertitle"><?php the_title(); ?></span>

      <?php if ( has_post_thumbnail()) { ?>
        <div class="port-inner__main">
          <div class="port-slider-img-wrap">
            <img width="800" src="<?php echo the_post_thumbnail_url('large'); ?>" class="port-inner__slider-img wp-post-image" alt="<?php the_title(); ?>" >
          </div>
          <div class="scontainer">
            <div class="port-slider__controls">
            </div>
          </div>
        </div>
      <?php }?>

      <div class="port-inner__video">
      </div>

      <div class="port-inner__review">
        <?php the_content(); ?>
      </div>


      <?php $images = get_field('gallery'); if( $images ): ?>
        <div class="port-inner__weddy-photo">
          <h2 class="port-inner__photo-title">Фотографии </h2>

          <div class="port-inner__photo-list" id="weddingList">
            <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image['url']; ?>" class="services-rest__item22 wedImgPar">
              <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" >
            </a>
          <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

    <?php endwhile; endif; ?>
  </div><!-- /.scontainer -->
  </section>

<?php get_footer(); ?>
