$(document).ready(function () {
    header();
    sliders();
    customSelect();
    packageAccordion();
    accordion();
    faqTabbing();
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
        arrows: true,
    });
    $(".gallerySlider").slick({
        dots: false,
        cssEase: "ease-in-out",
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        fade: false,
        nextArrow: $(".gallerySection .prev"),
        prevArrow: $(".gallerySection .next"),
        arrows: true,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    variableWidth: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    variableWidth: false,
                    slidesToShow: 1,
                },
            },
        ],
    });

    $(".blogSlider").slick({
        dots: true,
        cssEase: "linear",
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $(".blogSection .next"),
        prevArrow: $(".blogSection .prev"),
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
}

if ($(window).width() < 767) {
    $(".custom--container")
        .removeClass("custom--container")
        .addClass("container");
}

function customSelect() {
    const selects = $("[data-cus-select]");
    const cusSelectDropDown = $("[data-cus-select-dropdown]");
    const cusSelectOptions = $("[data-cus-select-item]");

    selects.click(function () {
        $(this).next().toggle();
    });

    cusSelectOptions.click(function () {
        cusSelectOptions.removeClass("selected");
        if (!$(this).hasClass("selected")) {
            $(this).addClass("selected");
        }
        $(this).parent().prev().addClass("selected");
        let itsText = $(this).text();
        $(this).parent().prev().val(itsText).removeClass("error");
        cusSelectDropDown.hide();
    });
}

function packageAccordion() {
    let showButton = $('[data-show-package-details]')
    showButton.click(function() {
        $(this).closest(".package__tableMain").next().slideToggle("slow");
    })
}

function accordion() {
    let accordionButton = $(".accordion__button");
    let panel = $(".accordion__panel");
    let activePanel = $(".accordion__panel.active");
    activePanel.slideDown();

    accordionButton.click(function () {
        let isActive = $(this).hasClass("active");
        if (!isActive) {
            accordionButton.removeClass("active");
            panel.slideUp();
            $(this).addClass("active");
            $(this).next().slideDown();
        } else {
            $(this).next().slideUp()
            $(this).removeClass("active")
        }
    });
}

function faqTabbing () {
    let faqButton = $(".faqTabbingButton button");
    let faqContainer = $('.faqContainer .accordion');

    faqButton.click(function(e) {
        let itsIndex = $(this).index();
        faqButton.removeClass("active")
        $(this).addClass("active")
        faqContainer.hide();
        faqContainer.eq(itsIndex).show();
    })
}