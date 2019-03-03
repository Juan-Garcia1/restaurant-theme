(function ($) {

  // SITE IDENTITY
  // Update the site title real time...
  wp.customize("blogname", function (value) {
    value.bind(function (newval) {
      $(".hero .title h1").html(newval);
    });
  });

  // Update the tagline in real time...
  wp.customize("blogdescription", function (value) {
    value.bind(function (newval) {
      $("#tagline").html(newval);
    });
  });

  // COLORS
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

  // HERO
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

  // SECTION ONE
  // Update primary title on the first section in real time...
  wp.customize("section-1_primary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-1 .title__primary").html(newval);
    });
  });

  // Update secondary title on the first section in real time
  wp.customize("section-1_secondary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-1 .title__secondary").html(newval);
    });
  });

  // Update paragraph on the first section in real time
  wp.customize("section-1_paragraph", function (value) {
    value.bind(function (newval) {
      $("#sec-1 p").html(newval);
    });
  });

  // Update the first image on the first section in real time
  wp.customize("section-1_img1", function (value) {
    value.bind(function (newval) {
      $("#sec-1 img:first-child").attr("src", newval);
    });
  });

  // Update the second image on the first section in real time
  wp.customize("section-1_img2", function (value) {
    value.bind(function (newval) {
      $("#sec-1 img:last-child").attr("src", newval);
    });
  });

  // SECTION TWO
  // Update the primary title on the second section in real time
  wp.customize("section-2_primary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-2 .title__primary").html(newval);
    });
  });

  // Update the secondary title on the second section in real time
  wp.customize("section-2_secondary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-2 .title__secondary").html(newval);
    });
  });

  // Update the background image on the second section in real time
  wp.customize("section-2_background_image", function (value) {
    value.bind(function (newval) {
      $(".sec-2-background-img").css({
        background: `url(${newval}) no-repeat center center / cover`
      });
    });
  });

  // SECTION THREE
  // Update the primary title on the third section in real time
  wp.customize("section-3_primary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-3 .title__primary").html(newval);
    });
  });

  // Update the secondary title on the third section in real time
  wp.customize("section-3_secondary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-3 .title__secondary").html(newval);
    });
  });

  // Update the paragraph on the third section in real time
  wp.customize("section-3_paragraph", function (value) {
    value.bind(function (newval) {
      $("#sec-3 p").html(newval);
    });
  });

  // Update the link text on the third section in real time
  wp.customize("section-3_link_text", function (value) {
    value.bind(function (newval) {
      $("#sec-3 a").html(newval);
    });
  });

  // Update the url on the third section in real time
  wp.customize("section-3_link", function (value) {
    value.bind(function (newval) {
      $("#sec-3 a").attr("href", newval);
    });
  });

  // Update the first image on the third section in real time
  wp.customize("section-3_img1", function (value) {
    value.bind(function (newval) {
      $("#sec-3 img:nth-of-type(1)").attr("src", newval);
    });
  });

  // Update the second image on the third section in real time
  wp.customize("section-3_img2", function (value) {
    value.bind(function (newval) {
      $("#sec-3 img:nth-of-type(2)").attr("src", newval);
    });
  });

  // Update the third image on the third section in real time
  wp.customize("section-3_img3", function (value) {
    value.bind(function (newval) {
      $("#sec-3 img:nth-of-type(3)").attr("src", newval);
    });
  });

  // Update the fourth image on the third section in real time
  wp.customize("section-3_img4", function (value) {
    value.bind(function (newval) {
      $("#sec-3 img:nth-of-type(4)").attr("src", newval);
    });
  });

  // SECTION FOUR
  // Update the primary title on the fourth section in real time
  wp.customize("section-4_primary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-4 .title__primary").html(newval);
    });
  });

  // Update the secondary title on the fourth section in real time
  wp.customize("section-4_secondary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-4 .title__secondary").html(newval);
    });
  });

  // Update the background image on the fourth section in real time
  wp.customize("section-4_background_image", function (value) {
    value.bind(function (newval) {
      $(".sec-4-background-img").css({
        background: `url(${newval}) no-repeat center center / cover`
      });
    });
  });

  // SECTION FIVE
  // Update primary title on the fith section in real time...
  wp.customize("section-5_primary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-5 .title__primary").html(newval);
    });
  });

  // Update secondary title on the fith section in real time
  wp.customize("section-5_secondary_title", function (value) {
    value.bind(function (newval) {
      $("#sec-5 .title__secondary").html(newval);
    });
  });

  // Update paragraph on the fith section in real time
  wp.customize("section-5_paragraph", function (value) {
    value.bind(function (newval) {
      $("#sec-5 p").html(newval);
    });
  });

  // Update the first image on the fith section in real time
  wp.customize("section-5_img1", function (value) {
    value.bind(function (newval) {
      $("#sec-5 img:first-child").attr("src", newval);
    });
  });

  // Update the second image on the fith section in real time
  wp.customize("section-5_img2", function (value) {
    value.bind(function (newval) {
      $("#sec-5 img:last-child").attr("src", newval);
    });
  });

  // FOOTER
  // Update about title on the footer in real time
  wp.customize("footer-title", function (value) {
    value.bind(function (newval) {
      $("footer #about-title").html(newval);
    });
  });

  // Update about paragraph on the footer in real time
  wp.customize("footer-paragraph", function (value) {
    value.bind(function (newval) {
      $("footer #about-paragraph").html(newval);
    });
  });

})(jQuery);
