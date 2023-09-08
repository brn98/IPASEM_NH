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

document.addEventListener("DOMContentLoaded", function() {
  const backTopBtn = document.getElementById("backTop");

  // Esconde o botão inicialmente
  backTopBtn.style.opacity = "0";
  backTopBtn.style.transition = "opacity 0.3s ease-in-out"; // Adiciona uma transição suave

  // Verifica a posição ao rolar a página
  window.addEventListener("scroll", function() {
    // Verifica se o usuário rolou a página para baixo
    if (window.scrollY > 300) {
      backTopBtn.style.opacity = "1"; // Mostra o botão suavemente
    } else {
      backTopBtn.style.opacity = "0"; // Esconde o botão suavemente
    }
  });

  // Adiciona um evento de clique para rolar suavemente ao topo
  backTopBtn.addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
});
