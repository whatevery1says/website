/* Replaces click event behaviour in main.min.js, where the equivalent 
   function is disabled by changing the name of the selectors. This is 
   necessary because commenting out the code in main.min.js disrupts 
   the mobile menu for some reason. */
;(function($) {

  'use strict'

  $('.mainnav a[href*="#"], a.roll-button[href*="#"], .smoothscroll[href*="#"]').on('click', function (e) {
    if ($(this).text() === 'Blog') {
      window.location = 'http://localhost/we1s/#primary';
    } else {
      var target = this.hash;
      var $target = $(target);
      if ($target.length) {
        e.preventDefault();
        $('html, body').stop().animate({
          'scrollTop': $target.offset().top - 70
        }, 900, 'swing');
        if ($('#mainnav-mobi').length) {
          $('#mainnav-mobi').hide();
          return false;
        }
      }
    }
  });
})(jQuery);
