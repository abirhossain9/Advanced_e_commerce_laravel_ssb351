$(document).ready(function ($) {
  'use strict';


/* ---------------------------------------------
     page  Prealoader
     --------------------------------------------- */
     $(window).on('load', function () {
      $("#loading-center-page").fadeOut();
      $("#loading-page").delay(400).fadeOut("slow");
    });




 /* ---------------------------------------------
     Sticky header
     --------------------------------------------- */
     $(window).on('scroll', function () {
      var scroll_top=$(window).scrollTop();

      if (scroll_top > 40){
        $('.navbar').addClass('sticky');

      }
      else{
        $('.navbar').removeClass('sticky');  
      }

    });


/*--------------------
Mobile Menu
----------------------*/



$('#sidebarCollapse').on('click', function () {

  $('.warpper-inner').toggleClass('warpper-inner-overlay')
  $('#sidebar').toggleClass('active');
  $('.collapse.in').toggleClass('in');
  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});


/*--------------------
Slick  JS
----------------------*/

$('.blog-slider').slick({
  dots: true,
  arrows: false,
  centerMode: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  cssEase: 'linear',
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: true,
      
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  ]
}); 

$('.blog-slider-post').slick({
  dots: true,
  arrows: false,
  centerMode: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  cssEase: 'linear',
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: true,
      
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  ]
}); 
$('.testimonial-slider').slick({
 dots: false,
 arrows: false,
 centerMode: true,
 slidesToShow: 1,
 slidesToScroll: 1,
});


$('.slider-avatar .item-image').on('click', function(event){

 event.preventDefault();
 var slide_img = $(this).data('slide');
 var className = this.className.split(' ');
 for (var i = 0; i < className.length; i+=1) {
  if (className[i].indexOf('avatar') >= 0) {

   $('.testimonial-slider').slick('slickGoTo', slide_img - 1);

 }

}
});


$('.client-slider').slick({
 dots: false,
 arrows: false,
 infinite: true,
 autoplay: true, 
 slidesToShow: 5,
 autoplaySpeed:3000,
 slidesToScroll: 5,
 centerMode: true,
 responsive: [
 {
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});


/*--------------------
Owl Carousel JS
----------------------*/

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    mouseDrag:true,
    touchDrag:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


/*--------------------
MAGNIFIC POPUP IMAGE  JS
----------------------*/
$('.modal-image').magnificPopup({
  type: 'image',
  removalDelay: 300,
  mainClass: 'mfp-with-zoom',
  gallery: {
    enabled: true
  },
  zoom: {
    enabled: true,

    duration: 300,
    easing: 'ease-in-out',

    opener: function (openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
});


/*----------------------------------------------------*/
/*  VIDEO POP PUP
/*----------------------------------------------------*/

$('.video-modal').magnificPopup({
  type: 'iframe',

  iframe: {
    patterns: {
      youtube: {

        index: 'youtube.com',
        src: 'https://www.youtube.com/embed/7e90gBu4pas'

      }
    }
  }
});
/* ---------------------------------------------
 Back top page scroll up
 --------------------------------------------- */


 $.scrollUp({
  scrollText: '<i class="icofont-arrow-up"></i>',
  easingType: 'linear',
  scrollSpeed: 900,
  animation: 'fade'
});


/* ---------------------------------------------
 WoW plugin
 --------------------------------------------- */

 new WOW().init({
  mobile: true,
});

/* ---------------------------------------------
 Smooth scroll
 --------------------------------------------- */

 $('a.section-scroll[href*="#"]:not([href="#"])').on('click', function (event) {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
    location.hostname == this.hostname) {

    var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

  if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 750);
            return false;
          }
        }

      });



/*----------------------------------------
 Newsletter Subscribe
 --------------------------------------*/

 $(".subscribe-mail").ajaxChimp({
  callback: mailchimpCallRep,
    url: "mailchimp-post-url" //Replace this with your own mailchimp post URL. Just paste the url inside "".
  });

 function mailchimpCallRep(resp) {
  if (resp.result === "success") {
    $(".sucess-message").html(resp.msg).fadeIn(1000);
    $(".error-message").fadeOut(500);
  } else if (resp.result === "error") {
    $(".error-message").html(resp.msg).fadeIn(1000);
  }
}

});