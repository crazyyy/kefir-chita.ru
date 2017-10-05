  <section class="services">
    <a name="knopka_footer_ceni"></a>
    <div class="scontainer">
      <a href='#' class="to-top"></a>
      <div class="sticky-footer">
        <nav class="navigation bottom-nav" data-wow-offset="200">
          <div class="scontainer">
            <a href="#" class="nav__title">Mеню</a>
            <?php wpeFootNav(); ?>
          </div>
        </nav>
        <footer class="footer wow fadeIn">
          <div class="scontainer">
            <div class="footer-logo">
              <a href="index.html" class="footer-logo__link">Logo</a>
            </div>
            <div class="numbers__phone numbers__phone-footer">
              <div itemscope itemtype="http://schema.org/Organization">
                <a href="tel:+79143570270" class="number__phone-inner">
                 <span itemprop="telephone" class="lptracker_phone">
                 <span class="phone-inner-color">+7 (914)</span> 357 02 70</span></a>
                <a href="tel:+79143570270" class="number__phone-inner">
                 <span itemprop="telephone" class="lptracker_phone">
                 <span class="phone-inner-color"> +7 (3022)</span> 57 02 70</span></a>
                <div class="adress_footer">
                  <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <span itemprop="addressLocality">Чита</span>,
                  <span itemprop="streetAddress">ул. 9е Января, 6, офис 401</span> </span>
                </div>
              </div>
            </div>
            <a href="#" class="footer__make-order">Заказать звонок</a>
            <ul class="footer-soc__list">
              <li class="footer-soc__item"> <a rel="nofollow" href="https://vk.com/kefir.chita" class="footer-soc__item-link foo-vk" target="_blank">vk</a></li>
              <li class="footer-soc__item"> <a rel="nofollow" href="https://ok.ru/vayprazdnik/" class="footer-soc__item-link foo-fb" target="_blank">fb</a></li>
              <li class="footer-soc__item"><a rel="nofollow" href="https://www.instagram.com/agency_kefir/" class="footer-soc__item-link foo-in" target="_blank">in</a></li>
              <li class="footer-soc__item"><a rel="nofollow" href="https://www.youtube.com/channel/UCImzVImExLccARdvr2NAWQw" class="footer-soc__item-link foo-yt"
                  target="_blank">yt</a></li>
            </ul>
            <div class="footer__text"> <span class="footer__copyright"><?php bloginfo('name'); ?> © 2015-<?php echo date("Y"); ?></span>
            </div>
          </div>
        </footer>
      </div>

      <div class="popup">
        <div class="popup__inner">
          <div class="popup-block">
            <a href="#" class="popup__close b-close">X</a>
            <p class="popup__title">Заказать звонок</p>
            <form action="index.html" class="popup__form">
              <span class="popup__name">Ваше имя</span>
              <input type="text" name="name" class="popup__name-input">
              <span class="popup__name">Ваш телефон</span>
              <input type="text" name="phone" class="popup__name-input" onFocus="removeError(this)" id='phone'>
              <div class="popup__btn">
                <a href="#" class="popup__btn-link submit">Отправить</a>
              </div>
            </form>
          </div>
        </div>
      </div><!-- popup -->
    </div><!-- scontainer -->
  </section><!-- services -->

  <?php wp_footer(); ?>

</body>
</html>
