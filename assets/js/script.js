$(document).ready(function () {
    header();
    sliders();
});

function header() {
    let burgerButton = $(".burgerButton");
    let mobileMenu = $(".mobileMenu");

    let closeButton = $(".mobileMenuClose");

    burgerButton.click(function () {
        mobileMenu.toggleClass("active");
    });

    closeButton.click(function () {
        mobileMenu.removeClass("active");
    });

    let mobileSubmenuButton = $(".li--has-submenu");
    let mobileSubmenu = ".mobile--submenu";
    $(mobileSubmenu).slideUp();

    mobileSubmenuButton.click(function (e) {
        e.preventDefault();

        $(this).toggleClass("active");
        $(this).find(mobileSubmenu).slideToggle();
    });
}

function sliders() {
    $(".testimonialSlider").slick({
        dots: true,
        cssEase: "linear",
        slidesToShow: 2,
        slidesToScroll: 1,
        nextArrow: $(".testimonialSection .next"),
        prevArrow: $(".testimonialSection .prev"),
        arrows: true,
        responsive: [
            {
                breakpoint: 1130,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    $(".weatherSlider").slick({
        dots: false,
        cssEase: "linear",
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        nextArrow: $(".weatherSection .next"),
        prevArrow: $(".weatherSection .prev"),
        arrows: false,
    });
}
