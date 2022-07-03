//menu options
var fixed_top = $(".header-area");
$(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
        fixed_top.addClass("animated fadeInDown menu-fixed");
    } else {
        fixed_top.removeClass("animated fadeInDown menu-fixed");
    }
});

// aos animation
AOS.init({
    easing: "ease-out-back",
    duration: 1000,
});








// mobile menu

const burgerMenu = document.getElementById("burger");
const navbarMenu = document.getElementById("menu");

// Show and Hide Navbar Menu
burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("is-active");
    navbarMenu.classList.toggle("is-active");

    if (navbarMenu.classList.contains("is-active")) {
        navbarMenu.style.maxHeight = navbarMenu.scrollHeight + "px";
    } else {
        navbarMenu.removeAttribute("style");
    }
});










