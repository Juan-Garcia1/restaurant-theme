$(document).ready(function () {
  $navBtn = $("#nav-btn");
  $navMenu = $(".menu-main-menu-container");

  $navBtn.on("click", toggleNavMenu);

  function toggleNavMenu() {
    $navMenu.toggleClass("open");
  }

});