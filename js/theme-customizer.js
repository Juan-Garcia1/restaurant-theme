(function ($) {

  // Update primary color in real time...
  wp.customize("color_primary", function (value) {
    value.bind(function (newval) {
      $(".title__secondary").css("color", newval);
    });
  });

  // Update secondary color in real time...
  wp.customize("color_secondary", function (value) {
    value.bind(function (newval) {
      $(".title__primary").css("color", newval);
    });
  });

  // Update the greeting in Hero section in real time...
  wp.customize("hero_greeting", function (value) {
    value.bind(function (newval) {
      $("#greeting").html(newval);
    });
  });

  // Update background image in Hero section in real time...
  wp.customize("hero_image", function (value) {
    value.bind(function (newval) {
      $(".hero").css({
        background: `url(${newval}) no-repeat center center / cover`,
      });
    });
  });

})(jQuery);
