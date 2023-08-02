if (window.matchMedia("(min-width: 992px)").matches) {
  var dropdownItems = document.querySelectorAll(".navbar-nav .dropdown");

  dropdownItems.forEach(function (item) {
    item.addEventListener("mouseenter", function () {
      if (this.querySelector(".dropdown-toggle")) {
        this.querySelector(".dropdown-menu").classList.add("show");
      }
    });

    item.addEventListener("mouseleave", function () {
      this.querySelector(".dropdown-menu").classList.remove("show");
    });
  });
} else {
    var dropdownItems = document.querySelectorAll(".navbar-nav .dropdown");

  $(".navbar-nav .dropdown .dropdown-toggle").on("click", function (e) {
    e.stopPropagation();
    $(this).siblings(".dropdown-menu").classList.add("show");
  });

  document.addEventListener("click", function (event) {
    dropdownItems.forEach(function (item) {
      var submenu = item.querySelector(".dropdown-menu");
      if (!item.contains(event.target)) {
        submenu.classList.remove("show");
      }
    });
  });
}