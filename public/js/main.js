(function ($) {
"use strict";
// TOP Menu Sticky
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 300) {
    $("#sticky-header").removeClass("sticky");
    $('#back-top').fadeIn(400);
	} else {
    $("#sticky-header").addClass("sticky");
    $('#back-top').fadeIn(400);
	}
});


$(document).ready(function() {
  /*
   *  Simple image gallery. Uses default settings
   */

  $('.fancybox').fancybox();

  /*
   *  Different effects
   */

  // Change title type, overlay closing speed
  $(".fancybox-effects-a").fancybox({
    helpers: {
      title : {
        type : 'outside'
      },
      overlay : {
        speedOut : 0
      }
    }
  });

  // Disable opening and closing animations, change title type
  $(".fancybox-effects-b").fancybox({
    openEffect  : 'none',
    closeEffect	: 'none',

    helpers : {
      title : {
        type : 'over'
      }
    }
  });

  // Set custom style, close if clicked, change title type and overlay color
  $(".fancybox-effects-c").fancybox({
    wrapCSS    : 'fancybox-custom',
    closeClick : true,

    openEffect : 'none',

    helpers : {
      title : {
        type : 'inside'
      },
      overlay : {
        css : {
          'background' : 'rgba(238,238,238,0.85)'
        }
      }
    }
  });

  // Remove padding, set opening and closing animations, close if clicked and disable overlay
  $(".fancybox-effects-d").fancybox({
    padding: 0,

    openEffect : 'elastic',
    openSpeed  : 150,

    closeEffect : 'elastic',
    closeSpeed  : 150,

    closeClick : true,

    helpers : {
      overlay : null
    }
  });

  /*
   *  Button helper. Disable animations, hide close button, change title type and content
   */

  $('.fancybox-buttons').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',

    prevEffect : 'none',
    nextEffect : 'none',

    closeBtn  : false,

    helpers : {
      title : {
        type : 'inside'
      },
      buttons	: {}
    },

    afterLoad : function() {
      this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
    }
  });


  /*
   *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
   */

  $('.fancybox-thumbs').fancybox({
    prevEffect : 'none',
    nextEffect : 'none',

    closeBtn  : false,
    arrows    : false,
    nextClick : true,

    helpers : {
      thumbs : {
        width  : 50,
        height : 50
      }
    }
  });

  /*
   *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
  */
  $('.fancybox-media')
    .attr('rel', 'media-gallery')
    .fancybox({
      openEffect : 'none',
      closeEffect : 'none',
      prevEffect : 'none',
      nextEffect : 'none',

      arrows : false,
      helpers : {
        media : {},
        buttons : {}
      }
    });

  /*
   *  Open manually
   */

  $("#fancybox-manual-a").click(function() {
    $.fancybox.open('1_b.jpg');
  });

  $("#fancybox-manual-b").click(function() {
    $.fancybox.open({
      href : 'iframe.html',
      type : 'iframe',
      padding : 5
    });
  });

  $("#fancybox-manual-c").click(function() {
    $.fancybox.open([
      {
        href : '1_b.jpg',
        title : 'My title'
      }, {
        href : '2_b.jpg',
        title : '2nd title'
      }, {
        href : '3_b.jpg'
      }
    ], {
      helpers : {
        thumbs : {
          width: 75,
          height: 50
        }
      }
    });
  });


});


$(document).ready(function(){

// mobile_menu
var menu = $('ul#navigation');
// if(menu.length){
// 	menu.slicknav({
// 		prependTo: ".mobile_menu",
// 		closedSymbol: '+',
// 		openedSymbol:'-'
// 	});
// };
// blog-menu
  // $('ul#blog-menu').slicknav({
  //   prependTo: ".blog_menu"
  // });

// review-active
// $('.slider_active').owlCarousel({
//   loop:true,
//   margin:0,
// items:1,
// autoplay:true,
// navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
//   nav:true,
// dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
//   responsive:{
//       0:{
//           items:1,
//           nav:false,
//       },
//       767:{
//           items:1,
//           nav:false,
//       },
//       992:{
//           items:1,
//           nav:false
//       },
//       1200:{
//           items:1,
//           nav:false
//       },
//       1600:{
//           items:1,
//           nav:true
//       }
//   }
// });

// review-active
// $('.testmonial_active ').owlCarousel({
//   loop:true,
//   margin:0,
// items:1,
// autoplay:true,
// navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
//   nav:true,
// dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,

//   responsive:{
//       0:{
//           items:1,
//           dots:false,
//           nav:false,
//       },
//       767:{
//           items:1,
//           dots:false,
//           nav:false,
//       },
//       992:{
//           items:1,
//           nav:false
//       },
//       1200:{
//           items:1,
//           nav:false
//       },
//       1500:{
//           items:1
//       }
//   }
// });

// review-active
// $('.case_active').owlCarousel({
//   loop:true,
//   margin:30,
// items:1,
// autoplay:true,
// navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
//   nav:false,
// dots:true,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
//   responsive:{
//       0:{
//           items:1,
//           nav:false
//       },
//       767:{
//           items:2,
//       },
//       992:{
//           items:3
//       },
//       1200:{
//           items:3
//       },
//       1500:{
//           items:3
//       }
//   }
// });

// review-active
// $('.testmonial_active2').owlCarousel({
//   loop:true,
//   margin:0,
// items:1,
// autoplay:false,
// navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
//   nav:false,
// dots:true,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
// // dotsData: true,
// center: true,
//   responsive:{
//       0:{
//           items:1,
//           nav:false
//       },
//       767:{
//           items:1,
//           nav:false
//       },
//       992:{
//           items:1
//       },
//       1200:{
//           items:1
//       },
//       1500:{
//           items:1
//       }
//   }
// });

// for filter
  // init Isotope
  // var $grid = $('.grid').isotope({
  //   itemSelector: '.grid-item',
  //   percentPosition: true,
  //   masonry: {
  //     // use outer width of grid-sizer for columnWidth
  //     columnWidth: 1
  //   }
  // });

  // filter items on button click
  $('.portfolio-menu').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  //for menu active class
  $('.portfolio-menu button').on('click', function (event) {
    $(this).siblings('.active').removeClass('active');
    $(this).addClass('active');
    event.preventDefault();
	});
  
  // wow js
  // new WOW().init();

  // counter 
  // $('.counter').counterUp({
  //   delay: 10,
  //   time: 10000
  // });

/* magnificPopup img view */
// $('.popup-image').magnificPopup({
// 	type: 'image',
// 	gallery: {
// 	  enabled: true
// 	}
// });

/* magnificPopup img view */
// $('.img-pop-up').magnificPopup({
// 	type: 'image',
// 	gallery: {
// 	  enabled: true
// 	}
// });

/* magnificPopup video view */
// $('.popup-video').magnificPopup({
// 	type: 'iframe'
// });


  // scrollIt for smoth scroll
  // $.scrollIt({
  //   upKey: 38,             // key code to navigate to the next section
  //   downKey: 40,           // key code to navigate to the previous section
  //   easing: 'linear',      // the easing function for animation
  //   scrollTime: 600,       // how long (in ms) the animation takes
  //   activeClass: 'active', // class given to the active nav element
  //   onPageChange: null,    // function(pageIndex) that is called when page is changed
  //   topOffset: 0           // offste (in px) for fixed top navigation
  // });

  // scrollup bottom to top
  // $.scrollUp({
  //   scrollName: 'scrollUp', // Element ID
  //   topDistance: '4500', // Distance from top before showing element (px)
  //   topSpeed: 300, // Speed back to top (ms)
  //   animation: 'fade', // Fade, slide, none
  //   animationInSpeed: 200, // Animation in speed (ms)
  //   animationOutSpeed: 200, // Animation out speed (ms)
  //   scrollText: '<i class="fa fa-angle-double-up"></i>', // Text for element
  //   activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  // });


  // blog-page

  //brand-active
// $('.brand-active').owlCarousel({
//   loop:true,
//   margin:30,
// items:1,
// autoplay:true,
//   nav:false,
// dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
//   responsive:{
//       0:{
//           items:1,
//           nav:false

//       },
//       767:{
//           items:4
//       },
//       992:{
//           items:7
//       }
//   }
// });

// blog-dtails-page

  //project-active
// $('.project-active').owlCarousel({
//   loop:true,
//   margin:30,
// items:1,
// // autoplay:true,
// navText:['<i class="Flaticon flaticon-left-arrow"></i>','<i class="Flaticon flaticon-right-arrow"></i>'],
// nav:true,
// dots:false,
// // autoplayHoverPause: true,
// // autoplaySpeed: 800,
//   responsive:{
//       0:{
//           items:1,
//           nav:false

//       },
//       767:{
//           items:1,
//           nav:false
//       },
//       992:{
//           items:2,
//           nav:false
//       },
//       1200:{
//           items:1,
//       },
//       1501:{
//           items:2,
//       }
//   }
// });

if (document.getElementById('default-select')) {
  $('select').niceSelect();
}

  //about-pro-active
// $('.details_active').owlCarousel({
//   loop:true,
//   margin:0,
// items:1,
// // autoplay:true,
// navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
// nav:true,
// dots:false,
// // autoplayHoverPause: true,
// // autoplaySpeed: 800,
//   responsive:{
//       0:{
//           items:1,
//           nav:false

//       },
//       767:{
//           items:1,
//           nav:false
//       },
//       992:{
//           items:1,
//           nav:false
//       },
//       1200:{
//           items:1,
//       }
//   }
// });

});

// resitration_Form
// $(document).ready(function() {
// 	$('.popup-with-form').magnificPopup({
// 		type: 'inline',
// 		preloader: false,
// 		focus: '#name',

// 		// When elemened is focused, some mobile browsers in some cases zoom in
// 		// It looks not nice, so we disable it:
// 		callbacks: {
// 			beforeOpen: function() {
// 				if($(window).width() < 700) {
// 					this.st.focus = false;
// 				} else {
// 					this.st.focus = '#name';
// 				}
// 			}
// 		}
//   });
//   var wow = new WOW(
//     {
//       boxClass:     'wow',      // animated element css class (default is wow)
//       animateClass: 'animated', // animation css class (default is animated)
//       offset:       0,          // distance to the element when triggering the animation (default is 0)
//       mobile:       true,       // trigger animations on mobile devices (default is true)
//       live:         true,       // act on asynchronously loaded content (default is true)
//       callback:     function(box) {
//         // the callback is fired every time an animation is started
//         // the argument that is passed in is the DOM node being animated
//       },
//       scrollContainer: null,    // optional scroll container selector, otherwise use window,
//       resetAnimation: true,     // reset animation on end (default is true)
//     }
//   );
//   wow.init();
// });



//------- Mailchimp js --------//  
// function mailChimp() {
//   $('#mc_embed_signup').find('form').ajaxChimp();
// }
// mailChimp();



        // Search Toggle
        $("#search_input_box").hide();
        $("#search").on("click", function () {
            $("#search_input_box").slideToggle();
            $("#search_input").focus();
        });
        $("#close_search").on("click", function () {
            $('#search_input_box').slideUp(500);
        });
        // Search Toggle
        $("#search_input_box").hide();
        $("#search_1").on("click", function () {
            $("#search_input_box").slideToggle();
            $("#search_input").focus();
        });

})(jQuery);	