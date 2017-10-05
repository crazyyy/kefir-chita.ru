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
            <span class="goals__item-descr">делаем Вам, как Себе. Вы получаете готовое мероприятие достойного уровня.</span> </li>
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
            <span class="advantage__item-inner"><span class="advantage__item-color"></span><b>Индивидуальный подход к каждому клиенту</b> </span>
            <span class="advantage__item-bottom"><span class="advantage__item-color"></span> <b> Большой опыт работы, 6 лет на рынке</b></span>
          </div>
          <div class="advantage__item" data-wow-offset="200">
            <span class="advantage__item-inner">
              <span class="advantage__item-color"> </span><b>Мы работаем с любым бюджетом</b></span>
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
              <li class="othersoc__item"> <a target="_blank" href="https://vk.com/kefir.chita" class="othersoc__list-link other-vk">vk</a></li>
              <li class="othersoc__item"> <a target="_blank" href="https://ok.ru/vayprazdnik/" class="othersoc__list-link other-fb">ok</a></li>
              <li class="othersoc__item"> <a target="_blank" href="https://www.instagram.com/agency_kefir/" class="othersoc__list-link other-in">in</a> </li>
              <li class="othersoc__item"> <a target="_blank" href="https://www.youtube.com/channel/UCImzVImExLccARdvr2NAWQw" class="othersoc__list-link other-yt">yt</a> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="contact__form wow fadeIn" data-wow-delay='200ms' data-wow-offset='200'>
        <div class="contact__form-inner">

          <form action="index.html" class="form">
            <p class="form__title">Оставьте заявку</p> <span class="input__name">Ваше имя:</span>
            <input type="text" class="contact__input" name="name"> <span class="input__name">Ваш телефон (обязательно):</span>
            <input type="text" class="contact__input cb_phone" id='cont-phone' name="phone"> <span class="input__name">Введите E-mail (обязательно):</span>
            <input type="email" class="contact__input cb_mail" name="mail"> <span class="input__name">Ваш текст:</span>
            <textarea class="contact__textarea" name="msg"></textarea>
            <div class="btn-wrap"><a class="contact-me__btn submit" href="#">Отправить</a></div>
          </form>


        </div>
      </div>
      <div class="clearfix"></div>
      <div class="contact__text wow fadeIn">

        <div class="seo_text">
          <h2>Event агентство Кефир</h2>
          <p>Мы помогаем реализовывать event-проекты, которые оставляют глубокие и яркие впечатления, мы умеем разрабатывать качественный контент мероприятий. В основе нашей работы лежит 7-ми летний опыт организации праздников. Мы уже реализовали свыше 1 500 мероприятий, от детских праздников до благотворительных концертов.</p>
          <p>Event-агентство Читы начало вести свою деятельность с 2010 года. Первое время мы работали только в сфере организации детских праздников, изначально наша компания называлась "Вау! Праздник". После смены руководства, комания начала активно разиваться и применять свой опыт в организации свадеб, юбилеев, корпоративов, концертов, промо-акций и т.д. </p>
          <p class="services-rest__undertitle-text">
            <div class="ngg-galleryoverview ngg-ajax-pagination-none" id="ngg-gallery-0405a2bbad82191ac816ac64f52db1f5-1">
              <div id="ngg-image-0" class="ngg-gallery-thumbnail-box">
                <div class="ngg-gallery-thumbnail">
                  <a rel="lightbox" href="<?php echo get_template_directory_uri(); ?>/img/serega.jpg" title="Event агентство Кефир" class="ngg-fancybox">
                    <img title="Event агентство Кефир" alt="Event агентство Кефир" src="<?php echo get_template_directory_uri(); ?>/img/serega.jpg" width="460" height="590" style="max-width:none;" />
                  </a>
                </div>
              </div>
              <div id="ngg-image-1" class="ngg-gallery-thumbnail-box">
                <div class="ngg-gallery-thumbnail">
                  <a href="<?php echo get_template_directory_uri(); ?>/img/ivan.jpg" title="event агентство" data-src="<?php echo get_template_directory_uri(); ?>/img/ivan.jpg" data-thumbnail="img/ivan.jpg" data-image-id="318" data-title="event агентство" data-description="event агентство" class="ngg-fancybox" rel="0405a2bbad82191ac816ac64f52db1f5">
                    <img title="event агентство" alt="event агентство" src="<?php echo get_template_directory_uri(); ?>/img/ivan.jpg" width="460" height="307" style="max-width:none;" />
                  </a>
                </div>
              </div>
              <div id="ngg-image-2" class="ngg-gallery-thumbnail-box">
                <div class="ngg-gallery-thumbnail">
                  <a href="<?php echo get_template_directory_uri(); ?>/img/kvest.jpg" title="Организация праздников Чита" data-src="<?php echo get_template_directory_uri(); ?>/img/kvest.jpg" data-thumbnail="img/kvest.jpg" data-image-id="319" data-title="Организация праздников Чита" data-description="свадебное агентство москва" class="ngg-fancybox" rel="0405a2bbad82191ac816ac64f52db1f5">
   <img title="Организация праздников Чита" alt="Организация праздников Чита"
    src="<?php echo get_template_directory_uri(); ?>/img/kvest.jpg" width="460" height="307" style="max-width:none;" /> </a> </div>
              </div>
              <div class='ngg-clear'></div>
            </div>
          </p>
          <h2>Праздник мечты от агентства Кефир</h2>
          <p>Праздник мечты – это такое событие, которое запомнится навсегда. Это такой день, который наполнен положительными эмоциями, радостью, счастьем, в такие моменты хочется, чтобы этот день никогда не заканчивался, а продолжался как можно дольше. Праздник мечты наполнен яркими красками, веселыми моментами, восторгом, счастливыми улыбками людей, смехом.</p>
          <h2>Заказать услугу у агентства Кефир</h2>
          <p> Если вы хотите, чтобы ничто, никто не испортил вам ваше мероприятие, мы предлагаем обращаться только к профессионалам своего дела, мы как Компания несем полную ответсвенность за качество услуг, которые предлагаем вам, весь штат артистов проходит тщательный отбор. Уж, поверьте, что студент-звукорежиссер, менеджер по будням, тамада по выходным никогда не сможет составить конкуренцию артистам, которые занимаются только своим делом.</p>
        </div>
        <p class="wedding-key__title" style="text-align: left;">Следите за нами в Инстаграмм</p>
        <p>
          <p>

          dataInsta
          </p>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
