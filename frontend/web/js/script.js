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

document.addEventListener("DOMContentLoaded", function () {
  var buttons = document.querySelectorAll('[data-bs-toggle="collapse"]');

  buttons.forEach(function (button) {
    button.addEventListener("click", function () {
      var icon = this.querySelector("i.rotate-icon");
      icon.classList.toggle("rotate-down");
    });
  });
});


const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))