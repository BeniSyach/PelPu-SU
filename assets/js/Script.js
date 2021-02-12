jQuery( document ).ready( function($) {
    $( window ).scroll( function () {
      if ( $(document).scrollTop() > 10 ) {
        // Navigation Bar
        $('.navbar').removeClass('fadeInUp');
        $('body').addClass('shrink');
        $('.navbar').addClass('animated fadeDown');
      } else {
        $('.navbar').removeClass('animated fadeInUp');
        $('body').removeClass('shrink');
        $('.navbar').addClass('animated fadeIn');
      }
    });
  });