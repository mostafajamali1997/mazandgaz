$(document).ready(function() {
  var controller = new ScrollMagic.Controller();
  if(window.innerWidth > 1000) {
    $('.intro .right-effects figure').each(function() {
      var rightEffectTween = TweenMax.from($(this), 1, {
        x: '+=200',
        ease: Power1.easeOut
      });
      var scene = new ScrollMagic.Scene({
        triggerElement: '.intro',
        offset: $(this).index() * 50,
        reverse: false,
      })
      .setTween(rightEffectTween)
      .addTo(controller);
    });
    $('.intro .left-effects figure').each(function() {
      var leftEffectTween = TweenMax.from($(this), 1, {
        x: '-=200',
        ease: Power1.easeOut
      });
      var scene = new ScrollMagic.Scene({
        triggerElement: '.intro',
        offset: $(this).index() * 50,
        reverse: false,
      })
      .setTween(leftEffectTween)
      .addTo(controller);
    });

    var introTween = TweenMax.from($('.intro .sub-companies .slider'), 1, {
      autoAlpha: 0,
      y: '+=100',
      ease: Power1.easeOut
    });
    var sceneIntroSlider = new ScrollMagic.Scene({
      triggerElement: '.intro',
      offset: 100,
      reverse: false,
    })
      .setTween(introTween)
      .addTo(controller);

    var factoryTween = TweenMax.from($('.factory-slider .slider'), 1, {
      autoAlpha: 0,
      y: '+=100',
      ease: Power1.easeOut
    });
    var sceneFactory = new ScrollMagic.Scene({
      triggerElement: '.factory-slider',
      reverse: false,
    })
      .setTween(factoryTween)
      .addTo(controller);

    var newsTween = TweenMax.from($('.news-events .slider'), 1, {
      autoAlpha: 0,
      y: '+=100',
      ease: Power1.easeOut
    });
    var sceneNews = new ScrollMagic.Scene({
      triggerElement: '.news-events',
      reverse: false,
    })
      .setTween(newsTween)
      .addTo(controller);

    var circleBoxTl = new TimelineMax();
    circleBoxTl.from($('.contact-footer .circle-box'), 1, {
      scale: 0,
      ease: Back.easeOut
    })
    .from($('.contact-footer .curvy-contact-footer'), 1, {
      height: 0,
      ease: Back.easeOut
    }, 0.15)
    .from($('.contact-footer .go-up'), 1, {
      scale: 0,
      ease: Back.easeOut
    }, .8);
    var sceneContactFotter = new ScrollMagic.Scene({
      triggerElement: '.contact-footer',
      offset: -100,
      reverse: false,
    })
    .setTween(circleBoxTl)
    .addTo(controller);

    $('.contact-footer .circle-box .social-network li').each(function() {
      var circleSocialTween = TweenMax.from($(this).children('a'), .5, {
        scale: 0,
        ease: Back.easeOut,
        delay: $(this).index() * .2
      });
      var sceneContactFotterSocial = new ScrollMagic.Scene({
        triggerElement: '.contact-footer',
        offset: 100,
        reverse: false,
      })
      .setTween(circleSocialTween)
      .addTo(controller);
    });

    $('.contact-footer .circle-box .social-network li').mouseover(function() {
      $(this).siblings().removeClass('hover').addClass('not-hover');
      $(this).removeClass('not-hover').addClass('hover');
    });
    $('.contact-footer .circle-box .social-network li').mouseleave(function() {
      $('.contact-footer .circle-box .social-network li').removeClass('hover').removeClass('not-hover');
    });
  }

  $('.sub-companies .slider').slick({
    rtl: true,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: $('.sub-companies .prev-slide'),
    nextArrow: $('.sub-companies .next-slide'),
    responsive: [
      {
        breakpoint: 1450,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1350,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1350,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1110,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 3,
        }
      },
    ]
  });

  $('.factory-slider .slider').slick({
    rtl: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: true,
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: $('.factory-slider .prev-slide'),
    nextArrow: $('.factory-slider .next-slide'),
    responsive: [
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  $('.news-events .slider').slick({
    rtl: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: $('.news-events .prev-slide'),
    nextArrow: $('.news-events .next-slide'),
    responsive: [
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 1,
        }
      },
    ]
  });

  var socialCount = $('.contact-footer .social-network li').length * 10;
  var circleR = parseInt($('.contact-footer .circle-box').css('width')) / 2;
  $('.contact-footer .social-network li').each(function() {
    var degIndex = (($(this).index() + 1) * 20) + (80 - socialCount);
    $(this).css({
      'transform': 'translate(-50%, -50%) rotate(' + degIndex + 'deg) translateX(' + circleR + 'px) rotate(' + (degIndex * -1) + 'deg)',
      'margin-left': '0'
    });
  });

  $('.contact-footer .go-up').click(function() {
    $('html, body').animate({
      'scrollTop': 0
    }, 1000);
  });

});
