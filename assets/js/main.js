(function ($) {
  'use strict';
  // **********************************************************************//
  // ! Init variables global
  // **********************************************************************//

  var $body = $('body'),
    $navMain = $('#nav-main', '#header-bottom'),
    $headerTop = $('#header-top', '#header'),
    $navTop = $('.nav-top', '#header-top'),
    $btnTop = $('#btn-top'),
    $owlLarge = $('#owl-large', '.panel-product'),
    $owlThumbnail = $('#owl-thumbnail', '.panel-product'),
    $btnMenu = $('#btn-menu', '#header');

  // **********************************************************************//
  // !  Check devive mobile
  // **********************************************************************//
  var isMobile = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
  };

  // **********************************************************************//
  // !  Check sub menu
  // **********************************************************************//
  var checkSubMenu = function () {
    var $liMain = $navMain.find('> li'),
      $liTop = $navTop.find('> li'),
      $liCate = $('.nav-categories').find('> li');

    // Check nav top
    $liTop.each(function () {
      var $this = $(this),
        $hasSub = $this.find('ul');

      if($hasSub.length > 0) {
        $this.addClass('has-sub');
      }
    });

    // Check nav category
    $liCate.each(function () {
      var $this = $(this),
        $hasSub = $this.find('.menu-sub');

      if($hasSub.length > 0) {
        $this.addClass('has-sub');
      }
    });

    // Check nav main
    $liMain.each(function () {
      var $this = $(this),
        $hasSub = $this.find('.menu-sub'),
        $toggleMenu = $('<span/>', {'class': 'menu-toggle'});

      if($hasSub.length > 0) {
        $this
          .addClass('has-sub')
          .append($toggleMenu);
      }

    });
    $('.sublever2').click(function() {
        if($(this).next().is(':visible')) {
            $(this).next().slideUp(450);
            $(this).removeClass('flip');
        }
        else{
            $(this).next().slideDown(450);
            $(this).addClass('flip');

        }
    });
  };

  // **********************************************************************//
  // !  Toggle sub menu main on device mobile
  // **********************************************************************//
  var toggleMenuMainMobile = function ($selectors) {
    $selectors.on('click', '.menu-toggle', function () {
      var $parents = $(this).parents('li'),
        $target = $parents.find('.menu-sub');

      if($target.is(':visible')) {
        $parents.removeClass('is-open');
        $target.slideUp(500);
      } else {
        $parents.addClass('is-open');
        $target.slideDown(500);
      }

      return false;
    });
  };

  // **********************************************************************//
  // !  Toggle sub menu top on device mobile
  // **********************************************************************//
  var toggleMenuTopMobile = function ($selectors) {
    $selectors.on('click', '> a', function () {
      var $target = $(this).next();

      if(isMobile.any())
        $target.slideToggle(400);

      return false;
    });
  };
  // **********************************************************************//
  // !  Header menu function
  // **********************************************************************//
  var headerMenu = function () {
    var $btnLanguage = $('#btn-language', '#header-bottom'),
      $btnCategoriesToggle = $('#btn-categories-toggle', '#main-categories'),
      $btnCategoriesMore = $('#btn-categories-more', '#main-categories'),
      $contextBack = $('#context-back', '.context-layout'),
      $navCategories = $('#nav-categories', '#main-categories'),
      $contextWrap = $('#context-wrap', '.context-layout');

    // Show/hide nav main
    $btnMenu.on('click', function () {
      var $this = $(this),
        $target = $($this.attr('href'));

      if($target.is(':visible')) {
        $target.slideUp(400);
        $this.removeClass('is-active');
        $body.removeClass('is-menu');
      } else {

        if($headerTop.is(':visible')) {

          $headerTop
            .removeClass('is-language')
            .slideUp(400, function () {
              $target.slideDown(400);
              $this.addClass('is-active');
              $body.addClass('is-menu');
            });
        } else {
          $target.slideDown(400);
          $this.addClass('is-active');
          $body.addClass('is-menu');
        }
      }

      return false;
    });

    // Show/hide header top
    $btnLanguage.on('click', function() {
      var $this = $(this),
        $target = $($this.attr('href'));

      if($target.is(':visible')) {
        $target.slideUp(400);
        $body.removeClass('is-language');
      } else {

        if($navMain.is(':visible')) {
          $navMain.slideUp(400, function () {
            $btnMenu.removeClass('is-active');
            $body.removeClass('is-menu');
            $target.slideDown(400);
            $body.addClass('is-language');
          });
        } else{
          $target.slideDown(400);
          $body.addClass('is-language');
        }
      }

      return false;
    });

    // Show/hide categories
    $btnCategoriesToggle.on('click', function() {
      var $target = $($(this).attr('href'));

      $target.slideToggle('400');
      $(this).toggleClass('active');

      return false;
    });

    // Show/hide item menu category
    $btnCategoriesMore.on('click', function () {
      var $this = $(this),
        widthDevice = $(window).width(),
        $parent = $($this.attr('href')),
        $target = $parent.find('.is-hidden');

      if(widthDevice <= 1199) {
        if($contextWrap.html() == '') {
          var $html = $navCategories.clone().removeAttr('id');
          $contextWrap
            .append($html)
            .find('.menu-sub').remove().end()
            .find('.is-hidden').removeClass('is-hidden');
          $body.toggleClass('show-categories');
        } else {
          $body.toggleClass('show-categories');
        }
      } else {
        if($parent.is(':hidden')) {
          $parent.slideDown(500, function () {
            $target.slideDown(500);
          });
        } else {
          $target.slideToggle(500);
        }
      }

      return false;
    });

    $contextBack.on('click', function () {
      $body.removeClass('show-categories');
      return false;
    });
  };

  // **********************************************************************//
  // ! Reset style follow by device
  // **********************************************************************//
  var resetStyle = function () {
    var widthDevice = $(window).width(),
      $megamenu = $('.megamenu');

    if(widthDevice >= 768) {
      $navMain
        .removeAttr('style')
        .find('.has-sub').removeClass('is-open');

      $megamenu.removeAttr('style');
      $navTop.find('ul').removeAttr('style');
      $headerTop.removeAttr('style');
      $body.removeClass('is-menu is-language');
      $btnMenu.removeClass('is-active');
    }
  };

  // **********************************************************************//
  // ! WOW effect
  // **********************************************************************//
  var wowEffect = function () {
    var $wow = $('.wow');

    if($wow.length > 0) {
      var wow = new WOW({
          animateClass: 'animated',
          offset:       100
        }
      );
      wow.init();
    }
  };

  // **********************************************************************//
  // ! Rating review
  // **********************************************************************//
  var ratingReview = function () {
    // Global Variables
    var $ratingItem = $('[data-rating]');

    // Option default
    var defaults = {
      half: true,
      number: 5,
      space: false,
      starType: 'i'
    };

    // Check exit rating element
    if($ratingItem.length > 0) {

      $ratingItem.each(function() {
        // config mode
        var configs = $(this).data('rating'),
          opts = $.extend({}, defaults, configs);
        $(this).raty(opts);
      });
    }
  };

  // **********************************************************************//
  // ! Countdown timer
  // **********************************************************************//
  var countDownTimer = function () {
    var $countDown = $('[data-countdown]'),
      countDownHtml = '<div class="countdown-item"><div class="countdown-inner"><div class="countdown-cover"><div class="countdown-table"><div class="countdown-cell"><div class="countdown-time">%-D</div><div class="countdown-text">Day%!D</div></div></div></div></div></div>'+
        '<div class="countdown-item"><div class="countdown-inner"><div class="countdown-cover"><div class="countdown-table"><div class="countdown-cell"><span class="countdown-time">%H</span><div class="countdown-text">HR%!H</div></div></div></div></div></div>' +
        '<div class="countdown-item"><div class="countdown-inner"><div class="countdown-cover"><div class="countdown-table"><div class="countdown-cell"><span class="countdown-time">%M</span><div class="countdown-text">Min%!M</div></div></div></div></div></div>' +
        '<div class="countdown-item"><div class="countdown-inner"><div class="countdown-cover"><div class="countdown-table"><div class="countdown-cell"><span class="countdown-time">%S</span><div class="countdown-text">Sec%!S</div></div></div></div></div></div>';

    if($countDown.length > 0) {

      $countDown.each(function() {
        var datetime = $(this).data('countdown');

        $(this)
          .countdown(datetime)
          .on('update.countdown', function(event) {
            $(this).html(event.strftime(countDownHtml));
          });
      });
    }
  };

  // **********************************************************************//
  // ! Zoom image
  // **********************************************************************//
  var zoomImage = function () {
    var $zoomItem = $('[data-zoom="image"]', '#quickview-modal'),
      $elevateZoom = $("#zoom-image", '.panel-product'),
      $panelProductMedia = $('.panel-product-media', '.panel-product'),
      options = {
        cursor: 'pointer',
        gallery: 'gallery-thumbnail',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        easing : true,
        responsive: true,
        borderSize: 2,
        borderColour: '#e5e5e5',
        zoomWindowHeight: $panelProductMedia.height(),
        zoomWindowWidth: $panelProductMedia.width()
      };

    if(isMobile.any())
      options = {
        zoomType: 'inner',
        cursor: 'crosshair',
        gallery: 'gallery-thumbnail',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        easing : true
      };

    if($zoomItem.length > 0) {
      $zoomItem.zoom();
    }

    if($elevateZoom.length > 0) {
      $elevateZoom.elevateZoom(options);
    }
  };

  // **********************************************************************//
  // ! Slider range
  // **********************************************************************//
  var sliderRange = function() {
    var $panelSidebarRange = $('#panel-sidebar-range', '.panel-sidebar'),
      $amount = $('#panel-sidebar-amount', '.panel-sidebar'),
      $panelRangeStart = $('#panel-range-start', '.panel-sidebar'),
      $panelRangeEnd = $('#panel-range-end', '.panel-sidebar');

    if ($panelSidebarRange.length > 0) {

      $panelSidebarRange.slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 100, 300 ],
        slide: function(event, ui) {
          $amount.html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          $panelRangeStart.val(ui.values[0]);
          $panelRangeEnd.val(ui.values[1]);
        }
      });

      $amount.html( "$" + $panelSidebarRange.slider( "values", 0 ) + " -  $" + $panelSidebarRange.slider( "values", 1 ));
    }
  };

  // **********************************************************************//
  // ! Category sidebar
  // **********************************************************************//
  var categorySidebar = function () {
    var $panelSidebarToggle = $('.panel-sidebar-toggle');
    $panelSidebarToggle.on('click', function() {
      var $this = $(this),
        $parents = $this.parents('.panel-sidebar'),
        $target = $parents.find('.panel-sidebar-inner');
      $parents.toggleClass('is-toggle');

      if($target.is(':visible')) {
        $target.slideUp(400);
      } else {
        $target.slideDown(400);
      }

      return false;
    });
  };

  // **********************************************************************//
  // ! Hide notification
  // **********************************************************************//
  var hideNotification = function () {
    var $headerNotifyClose = $('#header-notify-close', '#header-notify');

    $headerNotifyClose.on('click', function() {
      var $target = $($(this).attr('href'));

      $target.slideUp(400, function () {
        $(this).remove();
      });

      return false;
    });
  };

  // **********************************************************************//
  // ! Go to top
  // **********************************************************************//
  var scrollToItem = function () {
    var $scrollItem = $('[data-scroll="item"]');

    $scrollItem.on('click', function () {
      var $this = $(this),
        $target = $($this.attr('href')) || $('#' + $this.data('target')),
        offset = parseInt($this.data('offset'), 10) || 0,
        duration = parseInt($this.data('duration'), 10) || 800;

      if($target.length > 0) {

        $('body,html').animate({
          scrollTop: $target.position().top - offset
        }, duration);
      }

      return false;
    });
  };

  // **********************************************************************//
  // ! Check status scroll
  // **********************************************************************//
  var checkStatusScroll = function () {
    var $headerNotify = $('#header-notify', '#header'),
      $headerTop = $('#header-top', '#header'),
      $headerMiddle= $('#header-middle', '#header'),
      $headerBottom = $('#header-bottom', '#header'),
      offset = $headerNotify.outerHeight() +
        $headerTop.outerHeight() +
        $headerMiddle.outerHeight() +
        $headerBottom.outerHeight();

    if($(window).scrollTop() >= offset){
      $('body')
        .removeClass('scroll-up')
        .addClass('scroll-down');

      $btnTop.stop().fadeIn(500);
    }else{
      $('body')
        .removeClass('scroll-down')
        .addClass('scroll-up');

      $btnTop.stop().fadeOut(500);
    }
  };

  // **********************************************************************//
  // ! Create cookie
  // **********************************************************************//
  var createCookie = function(name, value, days) {
    var date = new Date(),
      expires = "";

    if (days) {
      date.setTime(date.getTime()+(days*24*60*60*1000));
      expires = "; expires="+date.toGMTString();
    }

    document.cookie = name + "=" + value + expires + "; path=/";
  };

  // **********************************************************************//
  // ! Read cookie
  // **********************************************************************//
  var readCookie = function(name) {
    var nameEQ = name + '=',
      ca = document.cookie.split(';');

    for(var i=0; i < ca.length; i++) {
      var c = ca[i];

      while (c.charAt(0)==' ')
        c = c.substring(1, c.length);

      if (c.indexOf(nameEQ) === 0)
        return c.substring(nameEQ.length, c.length);
    }

    return null;
  };

  // **********************************************************************//
  // ! Delete cookie
  // **********************************************************************//
  var eraseCookie = function(name) {
    createCookie(name, '', -1);
  };

  // **********************************************************************//
  // ! Equal height compare
  // **********************************************************************//
  var equalHeightCompare = function() {
    var $columnCompare = $('[data-compare]', '#panel-compare');

    if($columnCompare.length) {

      $columnCompare.each(function() {
        var $target = $('[data-compare="' + $(this).data('compare') + '"]', '#panel-compare');
        $target.matchHeight({byRow: false});
      });
    }
  };

  // **********************************************************************//
  // ! Compare product
  // **********************************************************************//
  var compareProduct = function() {
    var $panelCompareCarousel = $('#panel-compare-carousel', '#panel-compare');

    // Init carousel
    var owl = $panelCompareCarousel
      .owlCarousel({
        items: 3,
        loop: false,
        center: false,
        margin: 0,
        autoWidth: false,
        rtl: false,
        responsive: {
          0 : {
            items: 2
          },
          479 : {
            items: 2
          },
          768 : {
            items: 2
          },
          992 : {
            items: 3
          }
        },
        autoHeight: false,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: true,
        navText: '',
        navElement: 'button',
        navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
        dots: false
      }).on('resized.owl.carousel', function() {
        equalHeightCompare();
      });

    // Remove item
    $panelCompareCarousel.on('click', '.panel-compare-trash', function() {
      var index = $(this).parents('.owl-item').index();
      owl.trigger('remove.owl.carousel', index);
      return false;
    });
  };

  // **********************************************************************//
  // ! Show modal newsletter
  // **********************************************************************//
  var toggleNewsletter = function() {
    var newsletterCookie = readCookie('newsletter'),
      $newsletterModal = $('#newsletter-modal'),
      $newsletterClose = $('#newsletter-close', '#newsletter-modal');

    // Check exit cookie to show newsletter modal
    if(!newsletterCookie) {

      $newsletterModal
        .on('show.bs.modal', function() {
          var $newsletterColumn = $('.newsletter-column');
          if($newsletterColumn.length > 0)
            $newsletterColumn.matchHeight();
        })
        .modal('show');

      createCookie('newsletter', 1, 1);
    }

    // Close newsletter modal
    $newsletterClose.on('click', function (e) {
      e.preventDefault();
      $newsletterModal.modal('hide');
    });
  };


  // **********************************************************************//
  // ! Isotope masonry
  // **********************************************************************//
  var isotopeLayout = function () {
    // Element isotope
    var $isotope = $('[data-grid]'),
      defaults = {
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'masonry',
        stagger: 30,
        masonry: {
          //gutter: 0,
          columnWidth: '.grid-sizer'
        }
      };

    // Init isotope if exit elenment
    if($isotope.length > 0) {
      $isotope.each(function () {
        var configs = $(this).data('grid'),
          opts = $.extend({}, defaults, configs),
          $grid = $(this).find('.grid'),
          $filter = $(this).find('[data-filter]');

        // Init Isotope
        var $layout = $grid.isotope(opts);

        // Layout Isotope after each image loads
        $layout.imagesLoaded().progress( function() {
          $layout.isotope('layout');
        });

        // Filter item
        $filter.on('click', function (e) {
          e.preventDefault();
          var filterValue = $(this).data('filter'),
            $li = $filter.parent(),
            $target = $(this).parent();
          $li.removeClass('active');
          $target.addClass('active');
          $grid.isotope({ filter: filterValue });
        });
      });
    }
  };

  // **********************************************************************//
  // ! Order cart
  // **********************************************************************//
  var orderCart = function () {
    var $quantityPlus = $('[data-quantity="plus"]', '.panel-product-order'),
      $quantityMinus = $('[data-quantity="minus"]', '.panel-product-order');

    // quantity plus
    $quantityPlus.on('click', function(e) {
      e.preventDefault();
      var $target = $('#' + $(this).data('target')),
        number = parseInt($target.val(), 10) || 0,
        max = parseInt($target.data('max'), 10);
      number = (number >= max) ? max : number + 1;
      $target.val(number);
    });

    // quantity minus
    $quantityMinus.on('click', function(e) {
      e.preventDefault();
      var $target = $('#' + $(this).data('target')),
        number = parseInt($target.val(), 10) || 0;
      number = (number <= 0) ? 0 : number - 1;
      $target.val(number);
    });
  };

  // **********************************************************************//
  // ! Count up number
  // **********************************************************************//
  var counterUpNumber = function () {
    var $panelCounterRise = $('.panel-counter-rise', '.panel-counter');
    if($panelCounterRise.length > 0) {
      $panelCounterRise.counterUp({
        delay: 10,
        time: 1000
      });
    }
  };

  // **********************************************************************//
  // ! Light gallery popup
  // **********************************************************************//
  var lightGalleryPopup = function () {
    if($owlLarge.length > 0) {
      $owlLarge.lightGallery({
        selector: '.gallery'
      });
    }
  };

  // **********************************************************************//
  // ! Owl Slider Sync
  // **********************************************************************//
  var owlSync = function () {
    var flag = false,
      duration = 300;
    if($owlLarge.length > 0) {
      $owlLarge
        .owlCarousel({
          items: 1,
          loop: false,
          center: false,
          margin: 0,
          autoWidth: false,
          rtl: false,
          responsive: {},
          responsiveBaseElement: window,
          lazyLoad: false,
          autoHeight: false,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplayHoverPause: false,
          nav: true,
          navText: '',
          navElement: 'button',
          navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
          dots: false
        })
        .on('changed.owl.carousel', function (e) {
          if (!flag) {
            flag = true;
            $owlThumbnail.trigger('to.owl.carousel', [e.item.index, duration, true]);
            flag = false;
          }
        });
    }

    if($owlThumbnail.length > 0) {
      $owlThumbnail
        .owlCarousel({
          items: 4,
          loop: false,
          center: false,
          margin: 20,
          autoWidth: false,
          rtl: false,
          responsive: {},
          responsiveBaseElement: window,
          lazyLoad: false,
          autoHeight: false,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplayHoverPause: false,
          nav: true,
          navText: '',
          navElement: 'button',
          navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
          dots: false
        })
        .on('click', '.owl-item', function () {
          $owlLarge.trigger('to.owl.carousel', [$(this).index(), duration, true]);
        })
        .on('changed.owl.carousel', function (e) {
          if (!flag) {
            flag = true;
            $owlLarge.trigger('to.owl.carousel', [e.item.index, duration, true]);
            flag = false;
          }
        });
    }

  };

  // **********************************************************************//
  // ! Owl Slider
  // **********************************************************************//
  var owlCarousel = function () {
    var $owlCarousel = $('[data-carousel]'),
      defaults = {
        items: 3,
        loop: false,
        center: false,
        margin: 20,
        autoWidth: false,
        rtl: false,
        responsive: {},
        responsiveBaseElement: window,
        lazyLoad: false,
        autoHeight: false,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        nav: false,
        navText: '',
        navElement: 'button',
        navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
        dots: true
      };

    // Check exit owl element
    if($owlCarousel.length > 0) {
      $owlCarousel.each(function() {
        // config mode
        var configs = $(this).data('carousel'),
          opts = $.extend({}, defaults, configs),
          $scope = $('.' + $(this).data('scope')),
          $prev = $scope.find('.' + $(this).data('prev')),
          $next = $scope.find('.' + $(this).data('next'));

        // Run owl carousel with option merged
        var  owl = $(this).owlCarousel(opts);

        // Trigger next

        $next.on('click', function() {
          owl.trigger('next.owl.carousel');
        });

        // Trigger prev
        $prev.on('click', function() {
          owl.trigger('prev.owl.carousel');
        });
      });
    }
  };

  // **********************************************************************//
  // ! window dome ready
  // **********************************************************************//
  $(document).on('ready', function () {
    resetStyle();
    owlSync();
    owlCarousel();
    countDownTimer();
    ratingReview();
    zoomImage();
    checkSubMenu();
    headerMenu();
    wowEffect();
    scrollToItem();
    checkStatusScroll();
    hideNotification();
    sliderRange();
    categorySidebar();
    isotopeLayout();
    orderCart();
    counterUpNumber();
    lightGalleryPopup();
    toggleMenuTopMobile($navTop.find('> li.has-sub'));
    toggleMenuMainMobile($navMain.find('> li.has-sub'));
  });

  // **********************************************************************//
  // ! window resize
  // **********************************************************************//
  $(window).on('resize', function () {
    resetStyle();
  });

  // **********************************************************************//
  // ! window load
  // **********************************************************************//
  $(window).on('load', function () {
    toggleNewsletter();
    compareProduct();
    equalHeightCompare();
  });

  // **********************************************************************//
  // ! window scroll
  // **********************************************************************//
  $(window).on('scroll', function(){
    checkStatusScroll();
  });
})(jQuery);