(function($) {
  "use strict";



  // ======================================
  //    Smooth Scroll to element
  // ======================================
  $(function() {
    var $scrollTo = $('.scroll-to');
    $scrollTo.on('click', function(event){
      var $elemOffsetTop = $(this).data('offset-top');
      $('html').velocity("scroll", { offset:$(this.hash).offset().top-$elemOffsetTop, duration: 1500, easing:'easeInOutCubic', mobileHA: false});
      event.preventDefault();
    });
});

  // ======================================
  //    Smooth scroll to top button
  // ======================================
  $(function() {
    // Animated Scroll to Top Button
    var $scrollTop = $('.scroll-to-top-btn');
    if ($scrollTop.length > 0) {
      $(window).on('scroll', function(){
        if ($(window).scrollTop() > 600) {
          $scrollTop.addClass('visible');
        } else {
          $scrollTop.removeClass('visible');
        }
      });
      $scrollTop.on('click', function(e){
        e.preventDefault();
        $('html').velocity("scroll", { offset: 0, duration: 1500, easing:'easeInOutCubic', mobileHA: false });
      });
    };
});


  //------------------------------------- START: Mobile navigation setup ------------------------------------------------//

  $(function() {

      $(window).resize(function(){

        if ($(window).width() >= 1024) {
          $('.trigger-nav').css('display', 'none');
          $('.navigation').css('display', 'block');

          if ($('.trigger-nav').hasClass('open-nav')) {
            $('.trigger-nav').removeClass('open-nav');
          }
        } else if ($(window).width() < 1024) {
          $('.trigger-nav').css('display', 'block');
          $('.navigation').css('display', 'none');
        }

      });

      $('.trigger-nav').on('click', function() {

      	if (!$(this).hasClass('open-nav')) {
      		$(this).addClass('open-nav');
      		toggleNav(true);
      	} else {
      		$(this).removeClass('open-nav');
      		toggleNav(false);
      	}

      });

      function toggleNav(bool) {

      	if (bool === true) $('.navigation').slideDown(300);
      	else $('.navigation').slideUp(300);

      }

    });

    var $attrText = $('.has-dropdown > a, .has-dropdown > a').attr('href');
    $('.has-dropdown').append('<div class="dropdown-tab">▾</div>');

    $('.dropdown-tab').on('click', function(){
      $(this).prev().slideToggle( function(){
        $('.has-dropdown > a').attr('href', $attrText)
      });
      $(this).next().addClass('dropdown_active');

      /*if ($('.dropdown').hasClass('dropdown_active')){
      } else if ($('.dropdown').css('display') == 'none'){
        $('.has-dropdown > a').removeAttr('href')
      }*/

  });


  //------------------------------------- END: Mobile navigation setup ------------------------------------------------//
  $(document).ready(function(){
  $('.banner').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    slidesToShow: 1
  });
});

  $(document).ready(function(){
    $('.providers').slick({
      autoplay: true,
      slidesToShow:5,
      autoplaySpeed: 1000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  })

  $('#ajax-contact').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
        type:'post',
        url: '/includes/send.php',
        data: $(this).serialize(),
        success: function (){
          $(".form-message").html('Your message has been sent, we aim to get back to you within 24hrs');
        },
        fail: function(){
          $(".form-message").html('There was an error trying to send the form, please try again or contact us via email or phone');        }
    });
  });

  })(jQuery);
