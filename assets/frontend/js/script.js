(function ($) {

  // :: PRELOADER ::
  $(window).on('load', function () {
    $('#preloader').fadeOut('slow');
  });
  // --------------------------------------------------------------

  // :: Check cookies for current theme
  if($.cookie('theme') == 'Dark') {

    // Check if (.light-theme) class exists
    if($('body.light-theme')[0]) {
      $('body').removeClass('light-theme').addClass('dark-theme');
      $('.for-light-theme').hide();
      $('.for-dark-theme').show();
      $('#theme-settings .theme-btn.light-theme').removeClass('active-theme');
      $('#theme-settings .theme-btn.dark-theme').addClass('active-theme');
    } else {
      $('body').addClass('dark-theme');
      $('.for-light-theme').hide();
      $('.for-dark-theme').show();
      $('#theme-settings .theme-btn.light-theme').removeClass('active-theme');
      $('#theme-settings .theme-btn.dark-theme').addClass('active-theme');
    }

  } else if ($.cookie('theme') == 'Light') {
    // Check if (.dark-theme) class exists
    if($('body.dark-theme')[0]) {
      $('body').removeClass('dark-theme').addClass('light-theme');
      $('.for-light-theme').show();
      $('.for-dark-theme').hide();
      $('#theme-settings .theme-btn.dark-theme').removeClass('active-theme');
      $('#theme-settings .theme-btn.light-theme').addClass('active-theme');
    } else {
      $('body').addClass('light-theme');
      $('.for-light-theme').show();
      $('.for-dark-theme').hide();
      $('#theme-settings .theme-btn.dark-theme').removeClass('active-theme');
      $('#theme-settings .theme-btn.light-theme').addClass('active-theme');
    }
  }
  // --------------------------------------------------------------

  // :: Show and hide (elements) depends on the current theme
  function hideElementsForTheme() {
    if ($('body.light-theme')[0]) { $('.for-dark-theme').hide(); }
    if ($('body.dark-theme')[0]) { $('.for-light-theme').hide(); }
  }
  hideElementsForTheme();
  // --------------------------------------------------------------

  // :: Close (#notices-bar)
  $('#close-notices-bar-btn').on('click', function () { $('#notices-bar').hide(); });
  // --------------------------------------------------------------

  // :: Show (#lang) menu
  $('#lang .current').on('click', function () { $(this).parent().toggleClass('open'); });

  // :: Hide (#lang) when clicking outside
  $(document).mouseup(function (e) {
    const langMenu = $("#lang");
    if (!langMenu.is(e.target) && langMenu.has(e.target).length === 0) { langMenu.removeClass('open'); }
  });
  // --------------------------------------------------------------

  // :: Open and close (#theme-navbar-links)
  $('#open-links-btn').on('click', function () { $('#theme-navbar-links').addClass('open-links'); });
  $('#close-links-btn').on('click', function () { $('#theme-navbar-links').removeClass('open-links'); });
  // --------------------------------------------------------------

  // :: (.f-nav)
  $('#theme-navbar .f-nav .f-nav-tab').on('click', function(e) {
    const filter = $(this).data('filter');
    $('#theme-navbar .mega-menu .f-area.'+filter).siblings().hide();
    $('#theme-navbar .mega-menu .f-area.'+filter).show();
  });

  // :: Navbar indicator
  const sb_link = $("#theme-navbar .side-box .f-nav .f-nav-tab");
  const sb_ind = $("#theme-navbar .side-box .f-nav .indicator");
  const sb_linkWidth = $("#theme-navbar .side-box .f-nav .f-nav-tab:nth-child(1)").width();
  sb_ind.css('width', sb_linkWidth);

  function handleIndicator(ele) {
    sb_ind.css('width', ele.offsetWidth + 'px');
    sb_ind.css('left', ele.offsetLeft + 'px');
  }

  sb_link.each(function (item, index) {
    $(this).on("click", function (e) {
      handleIndicator(e.target);
      $(this).addClass('active').siblings().removeClass('active');
    });
  });
  // --------------------------------------------------------------

  // Filter nav (#filter-nav-v)
  $('#filter-nav-v .tab').on('click', function () {
    // Add class (active).
    $(this).addClass('active').parent().siblings().find('.tab').removeClass('active');
    // Get (data-filter) value.
    const val = $(this).data('filter');
    // Compare table (#compare-table-v).
    $('#compare-table-v tbody tr:not(.hovered, .t-space)').addClass('tr-hide');
    $('#compare-table-v tbody tr[data-filter="'+val+'"]').removeClass('tr-hide');
  });
  // --------------------------------------------------------------

  // :: Open and close (#side-box)
  $('#side-box-btn').on('click', function() { $('#side-box').addClass('open-side-box'); });
  $('#close-side-box-btn').on('click', function() { $('#side-box').removeClass('open-side-box'); });

  // :: Check if class (.open-side-box) exists
  $("#theme-navbar .nav-bottom .links .link:not(#side-box-btn)").on('click', function() {
    if ($('.open-side-box')[0]) { $('#side-box').removeClass('open-side-box'); }
  });

  // :: Hide (#side-box) when clicking outside
  $(document).mouseup(function (e) {
    const sideBox = $("#side-box");
    if (!sideBox.is(e.target) && sideBox.has(e.target).length === 0) { sideBox.removeClass('open-side-box'); }
  });
  // --------------------------------------------------------------

  // :: Remove action for (a) that have (.dropdown-menu) and (.mega-menu)
  $('#theme-navbar .link.has-dropdown-menu > a').on('click', function (e) { e.preventDefault(); });
  $('#theme-navbar .link.has-mega-menu > a').on('click', function (e) { e.preventDefault(); });
  // --------------------------------------------------------------

  // :: Show and hide (.dropdown-menu)
  $('#theme-navbar .link.has-dropdown-menu > a').on('click', function () {
    $(this).parent().siblings().removeClass('open-dropdown-menu');
    $(this).parent().toggleClass('open-dropdown-menu');
  });

  // :: Hide (.dropdown-menu) when clicking outside
  $(document).mouseup(function (e) {
    const dropdownMenu = $("#theme-navbar .link.has-dropdown-menu");
    if (!dropdownMenu.is(e.target) && dropdownMenu.has(e.target).length === 0) { dropdownMenu.removeClass('open-dropdown-menu'); }
  });
  // --------------------------------------------------------------

  // :: Open (.user-dropdown-menu)
  $('#user-menu-btn > img').on('click', function () { $('#user-menu-btn').toggleClass('open') });
  $(document).mouseup(function (e) {
    const userMenu = $("#user-menu-btn");
    if (!userMenu.is(e.target) && userMenu.has(e.target).length === 0) { userMenu.removeClass('open'); }
  });
  // --------------------------------------------------------------

  // :: Set (.mega-menu) position
  function megaMenuPosition() {
    var eleH = $('#theme-navbar').height();
    $('.mega-menu').css('top', eleH + 5);
    $('.dropdown-menu').css('top', eleH + 5);
  }

  // Open and close (.mega-menu)
  $('#theme-navbar .link.has-mega-menu > a').on('click', function () {
    $(this).parent().siblings().removeClass('open-mega-menu');
    $(this).parent().toggleClass('open-mega-menu');
  });

  // :: Hide (.mega-menu) when clicking outside
  $(document).mouseup(function (e) {
    const megaMenu = $("#theme-navbar .link.has-mega-menu");
    if (!megaMenu.is(e.target) && megaMenu.has(e.target).length === 0) { megaMenu.removeClass('open-mega-menu'); }
  });

  $(window).resize(function (e) {
    const megaMenu = $("#theme-navbar .link.has-mega-menu");
    if (!megaMenu.is(e.target) && megaMenu.has(e.target).length === 0) { megaMenu.removeClass('open-mega-menu'); }
  });

  // :: Check if (##notices-bar) exists
  function megaOffsetTop() {
    $(document).mouseup(function () {
      if ($('#notices-bar').is(':visible')) {
        $('.mega-menu').css('top', '175px');
        $('.dropdown-menu').css('top', '175px');
      } else {
        $('.mega-menu').css('top', '127px');
        $('.dropdown-menu').css('top', '127px');
      }
    });
  }

  // Run the function if window width is greater than or equal (1199px)
  if ($(window).width() >= 1199) {
    megaOffsetTop();
  }

  // Run the function when resizing the window
  $(window).on('resize', function () {
    if ($(window).width() >= 1199) {
      megaOffsetTop();
    } else {
      $('.mega-menu').css('top', '0');
    }
  });
  // --------------------------------------------------------------

  // :: Open (#theme-settings)
  $('#theme-settings-btn').on('click', function () {
    $('#theme-settings').addClass('open');
  });

  // Close Theme Settings
  $('#theme-settings-close-btn').on('click', function () {
    $('#theme-settings').removeClass('open');
  });

  // Add class (active-theme) for (.theme-btn)
  $('#theme-settings .theme-btn').on('click', function () {

    // Add class (active-theme).
    $(this).addClass('active-theme').siblings().removeClass('active-theme');

    // Check if button for light theme
    if ($(this).attr('id') === 'light-theme-btn') {
      // Check if (.dark-theme) class exists
      if ($('body.dark-theme')[0]) {
        $("#preloader").fadeIn();
        setTimeout(function () {
          $('body').addClass('light-theme').removeClass('dark-theme');
          $('.for-dark-theme').hide();
          $('.for-light-theme').show();
          $.cookie('theme', 'Light');
        }, 500);
        setTimeout(function () {
          $("#preloader").fadeOut('slow');
        }, 1000);
      };
    }

    // Else if button for dark theme
    else if ($(this).attr('id') === 'dark-theme-btn') {
      // Check if (.light-theme) class exists
      if ($('body.light-theme')[0]) {
        $("#preloader").fadeIn();
        setTimeout(function () {
          $('body').addClass('dark-theme').removeClass('light-theme');
          $('.for-light-theme').hide();
          $('.for-dark-theme').show();
          $.cookie('theme', 'Dark');
        }, 500);
        setTimeout(function () {
          $("#preloader").fadeOut('slow');
        }, 1000);
      }
    }

  });
  // --------------------------------------------------------------

  // :: COOKIES

  // Notices Bar Cookie
  $('#close-notices-bar-btn').on('click', function() {
    $.cookie('notices-bar', 'true');
  });
  if(typeof $.cookie('notices-bar') != 'undefined') {
    $('#notices-bar').hide();
  }
  // --------------------------------------------------------------

  // :: FAQs

  // (#faqs-category)
  $('#faqs-category .item').on('click', function() {

    $(this).addClass('active').siblings().removeClass('active');

    const data = $(this).data('category');

    // hide all boxes then show one that clicked
    $('#faqs .box').hide();
    $('#faqs .box.category-' + data).show();

  });

  // (#faqs .q)
  $('#faqs .q .q-h').on('click', function() {
    $(this).parent().toggleClass('open').siblings().removeClass('open');
    if ($(this).parent().hasClass('open')) {
      $(this).parent().find('.q-b').slideDown();
      $(this).parent().siblings().find('.q-b').slideUp();
    } else {
      $(this).parent().find('.q-b').slideUp();
    }
  });
  // --------------------------------------------------------------

  // :: GAME SERVERS PAGE

  // game-servers-filter-i
  $('#game-servers-filter-i > li').on('click', function() {

    // Get the element value.
    const value = $(this).data('filter');

    // Add class (active).
    $(this).addClass('active').siblings().removeClass('active');

    // Check if value not equal (all)
    if (value !== 'all') {
      $('#game-servers-page .cards-group').hide();
      $('#game-servers-page .cards-group[data-filter='+value+']').show();
    } else {
      $('#game-servers-page .cards-group').show();
    }
  });

  // Show filter menu
  $('#game-servers-filter-i-btn').on('click', function() {
    $('#game-servers-page .section-nav').toggleClass('open-filter');
  });
  // --------------------------------------------------------------

  // :: SHARED PAGE

  // plans-toggler
  $('#shared-hosting-page .plans-toggler .plan-toggle-btn').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    var btnVal = $(this).attr('data-for');
    $('.plan [data-for]').hide();
    $('.plan [data-for="'+ btnVal +'"]').show();
  });

  // tables-toggler
  $('#shared-hosting-page .tables-toggler .table-toggle-btn').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    var btnVal2 = $(this).attr('data-for');
    $('.t-body[data-for]').hide();
    $('.t-body[data-for="'+ btnVal2 +'"]').show();
  });
  // --------------------------------------------------------------

  // :: PAGES: Terms.php
  // FOR: (.item).
  $('#terms-page .sidebar .item.has-menu > a').on('click', function() {
    $(this).parent().toggleClass('open-menu').siblings().removeClass('open-menu');
  });
  // FOR: (.menu-item).
  $('#terms-page .sidebar .menu-item').on('click', function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
  // --------------------------------------------------------------

  // :: PAGE: About.php
  // FOR: Scroll parallax effect.
  if ($('#about-page')[0]) {
    let position = $(window).scrollTop();
    $(window).scroll(function () {
      let scroll = $(window).scrollTop();
      let $animation_elements = $('.se-i .random-icons img,.se-i .random-icons-right img');
      if (scroll > position) {
          $animation_elements.addClass("animated");
          $animation_elements.css("transform", "translateY(100px)");
      } else {
          $animation_elements.css("transform", "translateY(-5px)");
      }
      position = scroll;
    });
  }
  // --------------------------------------------------------------

  // PAGE: Abuse.php
  // For: (.accordion).
  $('#abuse-page .accordion .item-head').on('click', function () {
    $(this).parent().find('.item-body').slideToggle().parent().siblings().find('.item-body').slideUp();
    $(this).parent().toggleClass('open').siblings().removeClass('open');
  });
  // --------------------------------------------------------------

  // PAGE: vps.php
  // filter-bar
  $('#vps-hosting-page .filter-bar .filter-toggle-btn').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    var btnVal = $(this).attr('data-for');
    $('.responsive-table').hide();
    $('.responsive-table.filter-' + btnVal + '').show();
  });
  // --------------------------------------------------------------

  // PAGE: Dedicated.php
  // filter-bar
  $('#dedicated-hosting-page .filter-bar .filter-toggle-btn').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    var btnVal = $(this).attr('data-for');
    $('.plans-container').hide();
    $('.plans-container.filter-' + btnVal + '').show();
  });
  // --------------------------------------------------------------

  // :: FOOTER

  // Footer List
  $('.theme-footer .list-title').on('click', function () {
    $(this).parent().toggleClass('open-list');
  });
  // --------------------------------------------------------------

}(jQuery));

