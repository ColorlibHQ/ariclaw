/**
 * Ariclaw front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Owl Carousel, Slick, Magnific Popup and the Gijgo
 * datepicker that build the same markup, so the theme's stylesheets apply
 * unchanged.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  UI.datepicker('#datepicker');

  UI.magnific('.popup-youtube, .popup-vimeo', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  UI.enhanceSelects('select');

  UI.owl('.client_review_part', {
    items: 1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    smartSpeed: 2000
  });

  // menu fixed js code
  UI.ready(function () {
    var menus = UI.toElements('.main_menu');
    if (!menus.length) return;
    window.addEventListener('scroll', function () {
      var windowTop = window.pageYOffset + 1;
      menus.forEach(function (menu) {
        if (windowTop > 50) {
          menu.classList.add('menu_fixed', 'animated', 'fadeInDown');
        } else {
          menu.classList.remove('menu_fixed', 'animated', 'fadeInDown');
        }
      });
    }, { passive: true });
  });

  // Testimonial slider with its thumbnail strip.
  UI.ready(function () {
    function markThumbnail(index) {
      UI.toElements('.slider-nav-thumbnails .slick-slide').forEach(function (slide, i) {
        slide.classList.toggle('slick-active', i === index);
      });
    }
    function show(el) {
      el.style.display = '';
      if (window.getComputedStyle(el).display === 'none') el.style.display = 'block';
    }

    UI.toElements('.slider').forEach(function (el) {
      // On before slide change match active thumbnail to current slide
      el.addEventListener('beforeChange', function (e) {
        markThumbnail(e.detail.nextSlide);
      });
      //UPDATED
      el.addEventListener('afterChange', function (e) {
        UI.toElements('.content').forEach(function (content) {
          content.style.display = 'none';
        });
        UI.toElements('.content[data-id="' + (e.detail.currentSlide + 1) + '"]').forEach(show);
      });
    });

    UI.slick('.slider', {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      speed: 1000,
      infinite: true,
      asNavFor: '.slider-nav-thumbnails',
      autoplay: true,
      pauseOnHover: true,
      dots: false
    });

    UI.slick('.slider-nav-thumbnails', {
      slidesToShow: 3,
      slidesToScroll: 1,
      speed: 1000,
      asNavFor: '.slider',
      infinite: true,
      centerMode: true,
      autoplaySpeed: 2000,
      pauseOnHover: true,
      arrows: true,
      prevArrow: '<i class="slick_left ti-angle-double-left"></i>',
      nextArrow: '<i class="slick_right ti-angle-double-right"></i>',
      responsive: [
        {
          breakpoint: 480,
          settings: {
            arrows: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false
          }
        }
      ]
    });

    // Only the first thumbnail starts active.
    markThumbnail(0);
  });

  UI.magnific('.gallery_img', {
    type: 'image',
    gallery: {
      enabled: true
    }
  });
}());
