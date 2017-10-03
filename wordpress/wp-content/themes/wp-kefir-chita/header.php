<!doctype html>
<html lang="en" class="no-js">

<head>
  <!-- saved from url=(0014)about:internet -->
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <title>Кефир - агентство полного цикла</title>

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="all">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

</head>

<body class="home page page-id-6 page-template page-template-front-page page-template-front-page-php">
  <div class="wrapper">
    <div class="main-content">

      <?php if( is_page(36) ) { ?>
        <header class="header main-header">
      <?php } else { ?>
        <header class="header mini-head">
      <?php } ?>

      <?php if( is_page(36) ) { ?>
        <?php if( have_rows('slider', 36) ): ?>
          <div class="slider">
            <?php while( have_rows('slider', 36) ): the_row(); $image = get_sub_field('image'); ?>
              <div class="slider__item 111" style="background-image:url(<?php echo $image['url']; ?>);"></div>
            <?php endwhile; ?>
          </div>
          <div class="slider__controls"></div>
        <?php endif; ?>
      <?php } ?>

      <div class="top-info">
        <div class="top-info__line">
          <div class="scontainer clearfix">
            <ul class="soc__list">
              <li class="soc__item"> <a rel="nofollow" href="https://vk.com/kefir.chita" class="soc__item-link vk" target="_blank">vk</a> </li>
              <li class="soc__item"> <a rel="nofollow" href="https://ok.ru/vayprazdnik/" class="soc__item-link fb" target="_blank">ok</a> </li>
              <li class="soc__item"> <a rel="nofollow" href="https://www.instagram.com/agency_kefir/" class="soc__item-link ig" target="_blank"> ig</a></li>
              <li class="soc__item"> <a rel="nofollow" href="https://www.youtube.com/channel/UCImzVImExLccARdvr2NAWQw" class="soc__item-link yt" target="_blank"> yt</a> </li>
            </ul>
            <div class="numbers" style="margin-bottom: -24px;">
              <div class="numbers__phone"> <a style="display:block; margin: 2px 0 0 0;" href="tel:+79143570270" class="number__phone-inner">
               <span class="phone-inner-color">+7 (914)</span> 357 02 70</a><a rel="nofollow" href="tel:+79143570270" class="number__phone-inner">
               <span class="phone-inner-color"> +7 (3022)</span> 57 02 70 </a>
             </div>
              <a rel="nofollow" href="viber://add?number=+79143570270" style="margin-top:-25px;" class="numbers__btn1"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.png" alt=""></a>
              <a rel="nofollow" href="whatsapp://+79143570270" style="margin-bottom:-25px;" class="numbers__btn1"><img src="<?php echo get_template_directory_uri(); ?>/img/whasapp.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="scontainer">
          <div class="make-order make-order-2"></div>
          <div class="make-order"> <a href="#" class="make-order__link">Заказать звонок</a></div>
        </div>
        <div class="logo">
          <a href="/" class="logo__link"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="exist" class="logo__img"></a>
        </div>
      </div>
      <?php if( is_page(36) ) { ?>
        <?php if( have_rows('slider', 36) ): ?>
          <div class="header-bottom">
            <div class="slide-pager">
            </div>
            <div class="header-bottom__title">
              <?php $i = 0; while( have_rows('slider', 36) ): the_row(); $content = get_sub_field('description'); ?>
                <?php if ($i == 0 ) { $class = 'slider__title-active'; } else { $class = ''; }?>
                <p data-slide-number='<?php echo $i; ?>' class="header-bottom__title-inner <?php echo $class; ?>"><?php echo $content; ?></p>
              <?php $i++; endwhile; ?>
            </div>
          </div>
        <?php endif; ?>
      <?php } ?>
    </header>

    <header class="header mini-head" style="display:none">
      <div class="top-info">
        <div class="top-info__line">
          <div class="scontainer clearfix">
            <ul class="soc__list">
              <li class="soc__item"> <a href="https://vk.com/kefir.chita" class="soc__item-link vk">vk</a> </li>
              <li class="soc__item"> <a href="https://ok.ru/vayprazdnik/" class="soc__item-link fb">fb</a> </li>
              <li class="soc__item"> <a href="https://www.instagram.com/agency_kefir/" class="soc__item-link ig"> ig</a></li>
              <li class="soc__item"><a href="https://www.youtube.com/channel/UCImzVImExLccARdvr2NAWQw" class="soc__item-link yt"> yt</a></li>
            </ul>
            <div class="numbers" style="margin-bottom: -24px;">
              <div class="numbers__phone"> <a href="tel:+79143570270" class="number__phone-inner">
                <span class="phone-inner-color">+7 (914)</span> 357 02 70</a>
                <a href="tel:+79143570270" class="number__phone-inner"><span class="phone-inner-color">+7 (914)</span> 357 02 70</a>
              </div>
              <a href="viber://add?number=+79143570270" style="margin-top:-25px;" class="numbers__btn1"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.png" alt=""></a>
              <a href="whatsapp://:+79143570270" style="margin-bottom:-25px;" class="numbers__btn1"><img src="<?php echo get_template_directory_uri(); ?>/img/whasapp.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="scontainer">
          <div class="make-order make-order-2">
            <a href="#" class="make-order__link">Заказать звонок</a> </div>
        </div>
        <div class="logo">
          <a href="index.html" class="logo__link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="exist" class="logo__img"> </a>
        </div>
      </div>
    </header>
    <nav class="navigation">
      <div class="scontainer">
        <a href="#" class="nav__title">Mеню</a>
        <?php wpeHeadNav(); ?>
      </div>
    </nav>
