// $Id: rental.js,v 1.0 2010/04/20 08:40:00 LarryLeonard Exp $
Drupal.behaviors.rental = function (context) {
  $("#rental-login:not(.rental-login-processed)", context).each(
    function() {
      $(this).addClass('rental-login-processed').hide();
      Drupal.rental_toggle();
    }
  );
};

Drupal.rental_toggle = function() {
  $("#rental-login-link").click(
    function () {
      $("#rental-login").slideToggle("fast");
      this.blur();
      return false;
    }
  );
};