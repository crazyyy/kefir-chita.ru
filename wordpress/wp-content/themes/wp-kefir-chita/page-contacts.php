<?php /* Template Name: Contacts Page */ get_header(); ?>

  <section class="services-rest" id="firework">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="scontainer">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <h1 class="services-rest__title"><?php the_title(); ?></h1>
        <div class="services-rest__undertitle">

          <div class="contact__info wow fadeIn">
            <div class="contact__info-inner">
              <div itemscope="" itemtype="http://schema.org/Organization">
                <p itemprop="name" class="contact__info-title">«Кефир»</p>
                <p><span class="contact__item-title">Телефон:</span></p>
                <div class="contact__item-contain" style="margin-bottom: 5px;">
                  <a class="contact__item-number" href="tel:+79143570270">
                    <span itemprop="telephone" class="lptracker_phone">+7 (914) 357 02 70</span>
                  </a>
                </div>
                <div class="contact__item-contain">
                  <a class="contact__item-number" href="tel:+79266659554"><span itemprop="telephone" class="lptracker_phone">+7 (3022) 57 02 70</span></a>
                </div>
                <p><span class="contact__item-title">E-mail:</span></p>
                <div class="contact__item-contain">
                  <span itemprop="email"><a class="contact__item-mail" href="mailTo:kefir.chita@gmail.com">kefir.chita@gmail.com</a></span><br>
                </div>
                <p><span class="contact__item-title">Наш адрес:</span></p>
                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="contact__item-contain">
                  <span itemprop="addressLocality">Чита</span>, <span itemprop="streetAddress">ул. 9-е Января 6, <br>4 этаж, 401 офис</span>
                </div>
              </div>
              <div class="contact__item-contain">

              </div>
              <span class="contact__item-title">Мы в соц. сетях:</span>
              <div class="contact__item-contain">
                <ul class="othersoc__list">
                  <li class="othersoc__item">
                    <a target="_blank" href="https://vk.com/kefir.chita" class="othersoc__list-link other-vk">Вконтакте</a>
                  </li>
                  <li class="othersoc__item">
                    <a target="_blank" href="https://ok.ru/vayprazdnik/" class="othersoc__list-link other-fb">Одноклассники</a>
                  </li>
                  <li class="othersoc__item">
                    <a target="_blank" href="https://www.instagram.com/agency_kefir/" class="othersoc__list-link other-in">Instagram</a>
                  </li>
                  <li class="othersoc__item">
                    <a target="_blank" href="https://www.youtube.com/channel/UCImzVImExLccARdvr2NAWQw" class="othersoc__list-link other-yt">YouTube</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="contact__form wow fadeIn" data-wow-delay="200ms" data-wow-offset="200">
            <div class="contact__form-inner">
              <?php echo do_shortcode('[contact-form-7 id="151" title="Контактная форма" html_class="form"]'); ?>
            </div>
          </div>

          <div class="clearfix"></div>
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
