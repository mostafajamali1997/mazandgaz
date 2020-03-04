$(document).ready(function() {
  // console.log("%c%s", "color: red; background: rgba(0,0,0,1);color:#fff; font-size: 18px;font-family: 'byekan';padding:8px 5px;", "   Web Design & SEO by Kaspid ");

  var headerTop = $('header .top-bar');
  var headerContent = $('header .header-content');
  var siteLogo = $('header .header-content .site-logo');
  var siteLogoW = parseInt(siteLogo.css('width'));
  var siteLogoH = parseInt(siteLogo.css('height'));
  var curvyHeader = $('header .header-content .curvy-header');
  var curvyheaderH = parseInt(curvyHeader.css('height'));
  var headerMenu = $('header .header-content .header-menu');
  var headerMenuT = parseInt(headerMenu.css('margin-top'));
  $(window).scroll(function() {
    var scrollLoc = $(window).scrollTop();
    if (scrollLoc >= headerTop.offset().top + headerTop.height()) {
      headerContent.addClass('fixHeader');
      var changeOnFixed = scrollLoc - headerTop.height();
      if (curvyheaderH - changeOnFixed >= -3) {
        if (window.innerWidth > 1000) {
          if(window.innerWidth > 1250) {
            siteLogo.css({
              'width': siteLogoW - (changeOnFixed * 1.6),
              'height': siteLogoH - (changeOnFixed * 1.6),
            });
          }
          curvyHeader.css({
            'height': curvyheaderH - changeOnFixed
          });
          headerMenu.css({
            'margin-top': headerMenuT - changeOnFixed
          });
        }
        else {
          headerMenu.get(0).style.setProperty('--header-top', '0px');
          headerMenu.css({
            'margin-top': 0
          });
        }
      }
      if (scrollLoc > 90) {
        headerMenu.css({
          'margin-top': 0
        });
        if (window.innerWidth > 1000) {
          if(window.innerWidth > 1250) {
            siteLogo.css({
              'width': '125px',
              'height': '100px',
            });
          }
          curvyHeader.css({
            'height': 0
          });
        }
        headerMenu.get(0).style.setProperty('--header-top', '0px');
      }
    }
    else {
      headerContent.removeClass('fixHeader');
      siteLogo.removeAttr('style');
      curvyHeader.removeAttr('style');
      headerMenu.removeAttr('style');
      if (window.innerWidth < 1000) {
        var distance = headerTop.height() - scrollLoc;
        headerMenu.get(0).style.setProperty('--header-top', distance + 'px');
      }
    }
  });

  $('header .header-content .search-box .search-icon').click(function() {
    $('header .header-content .search-box').toggleClass('opened');
    if ($('header .header-content .search-box').hasClass('opened')) {
      $('header .header-content .search-box .txt').val('');
    }
  });
  $(document).click(function(e) {
    if (!$(e.target).closest('.search-box').length) {
      $('header .header-content .search-box').removeClass('opened');
    }
  });

  if (window.innerWidth > 1000) {
    $('header .header-content .main .header-menu li.product-submenu > a').mouseover(function() {
      $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l1 > li').eq(0).addClass('hover');
      $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l2-wrapper .sub-menu-l2').eq(0).fadeIn(0);
    });

    $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l1 > li').mouseover(function() {
      $(this).siblings('.hover').removeClass('hover');
      $(this).addClass('hover');
      $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l2-wrapper .sub-menu-l2').fadeOut(0);
      $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l2-wrapper .sub-menu-l2').eq($(this).index()).fadeIn(0);
    });
    $('header .header-content .header-menu li.product-submenu').mouseleave(function() {
      $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l1 > li.hover').removeClass('hover');
      $('header .header-content .header-menu li.product-submenu .sub-menu-wrapper .sub-menu-l2-wrapper .sub-menu-l2').fadeOut(0);
    });
  } else {
    $('header .header-content .main .header-menu .left-menu > li > a, header .header-content .main .header-menu .right-menu > li > a').click(function(e) {
      if ($(this).siblings('.sub-menu-wrapper').length) {
        e.preventDefault();
        if ($(this).hasClass('down-open-big-icon')) {
          var thisMenu = $(this);
          $('header .header-content .main .header-menu .left-menu > li > a.up-open-big-icon, header .header-content .main .header-menu .right-menu > li > a.up-open-big-icon').each(function() {
            $(this).siblings('.sub-menu-wrapper').stop().slideUp(300);
            $(this).attr('class', 'down-open-big-icon');
          });
          $(this).attr('class', 'up-open-big-icon');
          $(this).siblings('.sub-menu-wrapper').stop().slideDown(300);
        } else {
          $(this).attr('class', 'down-open-big-icon');
          $(this).siblings('.sub-menu-wrapper').stop().slideUp(300);
        }
      }
    });
  }

  $('.top-slider .slider').slick({
    rtl: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    prevArrow: $('.top-slider .prev-slide'),
    nextArrow: $('.top-slider .next-slide')
  });

  var controller = new ScrollMagic.Controller();

  if(window.innerWidth > 1000) {
    $('.section-title').each(function() {
      var scene = new ScrollMagic.Scene({
        triggerElement: this,
        reverse: false,
      })
      .setClassToggle(this, 'show')
      .addTo(controller);
    });
  }

  $('header .header-content .main .header-social li').mouseover(function() {
    $(this).siblings().removeClass('hover').addClass('not-hover');
    $(this).removeClass('not-hover').addClass('hover');
  });
  $('header .header-content .main .header-social').mouseleave(function() {
    $('header .header-content .main .header-social li').removeClass('hover').removeClass('not-hover');
  });

  $('header .header-content .main .hamburger .menu-icon').click(function() {
    headerMenu.addClass('show');
  });
  $(document).click(function(e) {
    if(!$(e.target).closest('.header-menu').length && !$(e.target).closest('.menu-icon').length) {
      $('header .header-content .main .header-menu li > a.up-open-big-icon').each(function() {
        $(this).attr('class', 'down-open-big-icon');
        $(this).siblings('.sub-menu-wrapper').stop().slideUp(300);
      });
      headerMenu.removeClass('show');
    }
  });

  var dragMenu = false;
  var posX = 0;
  var posXEnd = 0;
  $('header .header-content .header-menu').on('touchstart', function(e) {
    posXEnd = e.touches[0].clientX;
    dragMenu = true;
    posX = posXEnd;
    headerMenu.addClass('menu-grabbing');
  }).on('touchmove', function(e) {
    posXEnd = e.touches[0].clientX;
    if(dragMenu) {
      if(posX - posXEnd < 0) {
        if(posX - posXEnd < -1) {
          headerMenu.children('.right-menu').css('pointer-events', 'none');
          headerMenu.children('.left-menu').css('pointer-events', 'none');
        }
        headerMenu.css('right', (posX - posXEnd) + 'px');
      }
    }
  }).on('touchend touchcancel', function(e) {
    if(dragMenu) {
      dragMenu = false;
      headerMenu.removeClass('menu-grabbing');
      headerMenu.children('.right-menu').removeAttr('style');
      headerMenu.children('.left-menu').removeAttr('style');
      var headerTop = headerMenu.get(0).style.getPropertyValue('--header-top');
      if(posXEnd - posX > 100) {
        $('header .header-content .main .header-menu li > a.up-open-big-icon').each(function() {
          $(this).attr('class', 'down-open-big-icon');
          $(this).siblings('.sub-menu-wrapper').stop().slideUp(300);
        });
        headerMenu.removeAttr('style').removeClass('show');
        headerMenu.get(0).style.setProperty('--header-top', headerTop);
      }
      else {
        headerMenu.removeAttr('style');
        headerMenu.get(0).style.setProperty('--header-top', headerTop);
      }
    }
  });


  // $(window).resize(function() {
  //   console.log(window.innerWidth, $('.main').width());
  // });
});
