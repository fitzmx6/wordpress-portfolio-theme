(function($) {
  "use strict";
  $( document ).ready(function() {
      $("#side-menu-toggle").on("click", function () {
  		$("#wrapper").toggleClass("side-menu-open");
  		return false;
  	});
  });
  $(document).scroll(function() {
    if ($(document).scrollTop() >= 300) {
      // user scrolled 50 pixels or more;
      // do stuff
      $('body').addClass('sticky-nav');
    } else {
      $('body').removeClass('sticky-nav');
    }
  });
}(jQuery));