$(document).ready(function() {

	var slider = $('.slider').bxSlider({
		nextSelector: $('.slider__controls'),
		prevSelector: $('.slider__controls'),
		nextText: '',
		prevText: '',
		adaptiveHeight: true,
		pagerSelector: $('.slide-pager'),
		auto: true,
		onSlideNext : function() {
			changeTitle();
		},
		onSlideAfter : function() {
			changeTitle();
		}
	});
	$('.specific-slider__list').bxSlider({
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 172,
		slideMargin: 10,
		pager: false,
		nextSelector: $('.specific-slider__controls'),
		prevSelector: $('.specific-slider__controls'),
		nextText: '',
		prevText: ''
	});

	var weddingKey = $('#wedding-key'),
		priceDecider = $('#price__decider'),
		priceDecAnother = $('#price__decider-another');

	$('.price__item').on('click', function(e) {
		e.preventDefault();

		var $this = $(this),
			scrollId = $this.attr('href'),
			needScroll = $('#' + scrollId).offset().top;

		$('html,body').animate({
			'scrollTop': needScroll
		}, 'slow');


		console.log(needScroll);
	});

	function changeTitle() {
		var currentSlide = slider.getCurrentSlide(),
			sliderTitle = $('.header-bottom__title-inner[data-slide-number ="' + currentSlide + '"]');

		$('.header-bottom__title-inner').removeClass('slider__title-active');
		sliderTitle.addClass('slider__title-active');
	}

	$('.slider__controls .bx-next, .slider__controls .bx-prev').on('click', function() {
		changeTitle();
	});

	$('.nav__title').on('click', function (e) {
		e.preventDefault();

		$('.nav__list').slideToggle();
	});

	new WOW().init();

	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop(),
		btn = $('.to-top')

		if(scroll > 300) {
			btn.fadeIn(300)
		} else if (scroll < 300) {
			btn.fadeOut(300);
		}

	});

	$('.to-top').on('click', function(e) {
		e.preventDefault();

		$('html, body').animate({
			scrollTop: 0
		}, 500)
	});

	$('.make-order__link, .numbers__btn, .footer__make-order').on('click', function(e) {
		e.preventDefault()
		$('.popup').bPopup();
	});

	$("#phone, #cont-phone").mask("? +7(999) 999-9999");

	$('.port-inner__photo-list').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out'
		}
		// other options
	});





});