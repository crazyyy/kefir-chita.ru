<?php /* Template Name: Home Page */ get_header(); ?>

  <section class="description">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="scontainer">
      <div class="seo_text">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <noindex>
    <section class="about-us">
      <div class="scontainer">
        <div class="about-us__left wow fadeIn" data-wow-offset="200">
          <p class="about-us__title">Кто мы</p>
          <span class="about-us__text">
            <?php the_field('whoweare_t'); ?>
          </span>
        </div>
        <div class="about-us__photo wow fadeIn" data-wow-offset="200" data-wow-delay="250ms">
          <?php $whoweare = get_field('whoweare'); ?>
          <img width="340" height="220" src="<?php echo $whoweare['url']; ?>" alt="" />
        </div>
      </div>
    </section>
  </noindex>
  <noindex>
    <section class="goals wow fadeIn" data-wow-offset="200">
      <div class="scontainer">
        <p class="goals__title">Почему выбирают нас?</p>
        <ul class="goals__list">
          <li class="goals__item wow fadeIn" data-wow-offset="200" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/1.png);">
            <p class="goals__item-title">ХОРОШАЯ РЕПУТАЦИЯ</p>
            <span class="goals__item-descr">организованно более 500 мероприятий различного масштаба и бюджета, более 1000 довольных клиентов.</span>
          </li>
          <li class="goals__item wow fadeIn" data-wow-offset="200" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/2.png);">
            <p class="goals__item-title">БЫСТРО РАБОТАЕМ</p>
            <span class="goals__item-descr">если мероприятие нужно срочно и нет времени ждать, мы мобилизуем всю команду для подготовки Вашего события в кратчайшие сроки.</span>
          </li>
          <li class="goals__item wow fadeIn" data-wow-offset="200" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/3.png);">
            <p class="goals__item-title">ДОСТУПНЫЕ ЦЕНЫ</p>
            <span class="goals__item-descr">мы выполняем всю работу без посредников, тем самым Вы получаете качественные услуги, по ВЫГОДНЫМ ЦЕНАМ.</span>
          </li>
          <li class="goals__item wow fadeIn" data-wow-offset="200" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/4.png);">
            <p class="goals__item-title"> ПРОФЕССИОНАЛЫ</p>
            <span class="goals__item-descr">знатоки своего дела, мы знаем то, что Вам нужно, но всегда прислушиваемся к Вашим предложениям.</span>
          </li>
          <li class="goals__item wow fadeIn" data-wow-offset="200" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/5.png);">
            <p class="goals__item-title">ВЫСОКОЕ КАЧЕСТВО</p>
            <span class="goals__item-descr">делаем Вам, как Себе. Вы получаете готовое мероприятие достойного уровня.</span></li>
          <li class="goals__item wow fadeIn" data-wow-offset="200" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/6.png);">
            <p class="goals__item-title">ОТЛИЧНЫЙ РЕЗУЛЬТАТ</p>
            <span class="goals__item-descr">высокий уровень обслуживания и качество предоставляемых услуг.</span>
          </li>
        </ul>
      </div>
    </section>
  </noindex>
  <noindex>
    <section class="advantage">
      <div class="scontainer">
        <p class="advantage__title">Наши преимущества</p>
        <div class="advantage__list">
          <div class="advantage__item" data-wow-offset="200">
            <span class="advantage__item-inner"><span class="advantage__item-color"></span><b>Индивидуальный подход к каждому клиенту</b></span>
            <span class="advantage__item-bottom"><span class="advantage__item-color"></span><b> Большой опыт работы, 6 лет на рынке</b></span>
          </div>
          <div class="advantage__item" data-wow-offset="200">
            <span class="advantage__item-inner">
              <span class="advantage__item-color"></span><b>Мы работаем с любым бюджетом</b></span>
              <span class="advantage__item-bottom"><span class="advantage__item-color"></span>
              <b>Мы подарим вам море положительных эмоций</b></span>
          </div>
        </div>
      </div>
    </section>
  </noindex>
  <noindex>
    <section class="rule wow fadeIn" data-wow-offset="200">
      <div class="scontainer">
        <p class="rule__title">Принцип работы</p>
        <div class="rules__container">
          <div class="rules__item first-meet wow fadeIn" data-wow-offset="200">
            <span class="rules__item-text">Первая встреча</span>
          </div>
          <div class="rules__item make-present wow fadeIn" data-wow-offset="200" data-wow-delay="200ms">
            <span class="rules__item-text">Подготовка презентации и сметы</span>
          </div>
          <div class="rules__item deal wow fadeIn" data-wow-offset="200" data-wow-delay="400ms">
            <span class="rules__item-text">Заключение договора</span>
          </div>
          <div class="rules__item make-script wow fadeIn" data-wow-offset="200" data-wow-delay="600ms">
            <span class="rules__item-text">Разработка сценария/ концепции праздника </span>
          </div>
          <div class="rules__item choose-artist wow fadeIn" data-wow-offset="200" data-wow-delay="800ms">
            <span class="rules__item-text">Выбор исполнителей</span>
          </div>
          <div class="rules__item coordination wow fadeIn" data-wow-offset="200" data-wow-delay="1000ms">
            <span class="rules__item-text">Координация мероприятия в день проведения</span>
          </div>
          <div class="rules__item send-photo wow fadeIn" data-wow-offset="200" data-wow-delay="1200ms">
            <span class="rules__item-text">Передача фото и видео</span>
          </div>
        </div>
      </div>
    </section>
  </noindex>
  <section class="contact-me">
    <div class="scontainer clearfix">
      <div class="contact__info wow fadeIn">
        <h2 class="contact__info-title">Ищите где заказать мероприятие в Чите?</h2>
        <div class="contact__info-inner">
          <h2 class="wedding-key__title" style="text-align: left;">Оставьте заявку и мы поможем Вам сделать этот день не забываемым!</h2>
          <p><span class="contact__item-title">Телефон:</span></p>
          <div class="contact__item-contain">
            <span class="lptracker_phone"><a class="contact__item-number" href="tel:+79143570270">+7 (914) 357 0270</a></span>
          </div>
          <div class="contact__item-contain">
            <span class="lptracker_phone"><a class="contact__item-number" href="tel:+79143570270">+7 (3022) 570 270</a></span>
          </div>
          <p><span class="contact__item-title">E-mail:</span></p>
          <div class="contact__item-contain"><a class="contact__item-mail" href="mailTo:kefir.chita@gmail.com">kefir.chita@gmail.com</a></div>
          <p><span class="contact__item-title">Наш адрес:</span></p>
          <div class="contact__item-contain">Чита, ул. 9-е Января 6, <br> 4 этаж, 401 офис</div>
          <span class="contact__item-title">Мы в соц. сетях:</span>
          <div class="contact__item-contain">
            <ul class="othersoc__list">
              <li class="othersoc__item"><a target="_blank" href="https://vk.com/kefir.chita" class="othersoc__list-link other-vk">vk</a></li>
              <li class="othersoc__item"><a target="_blank" href="https://ok.ru/vayprazdnik/" class="othersoc__list-link other-fb">ok</a></li>
              <li class="othersoc__item"><a target="_blank" href="https://www.instagram.com/agency_kefir/" class="othersoc__list-link other-in">in</a></li>
              <li class="othersoc__item"><a target="_blank" href="https://www.youtube.com/channel/UCImzVImExLccARdvr2NAWQw" class="othersoc__list-link other-yt">yt</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="contact__form wow fadeIn" data-wow-delay='200ms' data-wow-offset='200'>
        <div class="contact__form-inner">
          <?php echo do_shortcode('[contact-form-7 id="240" title="Форма на главной" html_class="form" ]'); ?>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="contact__text wow fadeIn">

        <div class="seo_text">
          <?php the_field('seotext'); ?>
        </div>
        <p class="wedding-key__title" style="text-align: left;">Следите за нами в Инстаграмм</p>

        <?php echo do_shortcode('[instashow id="1"]'); ?>

      </div><!-- contact__text -->
    </div>
    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
