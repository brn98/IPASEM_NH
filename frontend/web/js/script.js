if (window.matchMedia("(min-width: 768px)").matches) {
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
  $(".navbar-nav .dropdown .dropdown-toggle").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).siblings(".dropdown-menu").classList.add("show");
  });

  $(document).on("click", function (e) {
    if ($(".navbar-nav").has(e.target).length === 0) {
      $(".dropdown-menu").classList.remove("show");
    }
  });
}
