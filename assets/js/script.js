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

    $(".awardsSlider")
        .on("init", () => {
            $('.slick-slide[data-slick-index="-2"]').addClass("leftMost");
            $('.slick-slide[data-slick-index="-1"]').addClass("left");
            $('.slick-slide[data-slick-index="1"]').addClass("right");
            $('.slick-slide[data-slick-index="2"]').addClass("rightMost");
        })
        .slick({
            centerMode: true,
            centerPadding: 0,
            slidesToShow: 5,
            variableWidth: true,
            draggable: false,
            dots: true,
            arrow: true,
            prevArrow: $(".ourAwardsSection .prev"),
            nextArrow: $(".ourAwardsSection .next"),
        })
        .on("beforeChange", (event, slick, current, next) => {
            $(".slick-slide.rightMost").removeClass("rightMost");
            $(".slick-slide.right").removeClass("right");
            $(".slick-slide.left").removeClass("left");
            $(".slick-slide.leftMost").removeClass("leftMost");

            const leftMost = current < next && current > 0 ? current - 1 : next - 2;
            const left = current < next && current > 0 ? current : next - 1;
            const right = current < next || next === 0 ? next + 1 : current;
            const rightMost = current < next || next === 0 ? next + 2 : current + 1;

            $(`.slick-slide[data-slick-index="${leftMost}"]`).addClass("leftMost");
            $(`.slick-slide[data-slick-index="${left}"]`).addClass("left");
            $(`.slick-slide[data-slick-index="${right}"]`).addClass("right");
            $(`.slick-slide[data-slick-index="${rightMost}"]`).addClass("rightMost");
            if (current === 5 && next === 0) {
                $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass(
                    "leftMost"
                );
                $(`.slick-slide[data-slick-index="${current}"]`).addClass(
                    "left"
                );
                $(`.slick-slide[data-slick-index="${current + 2}"]`).addClass(
                    "right"
                );
                $(`.slick-slide[data-slick-index="${current + 3}"]`).addClass(
                    "rightMost"
                );
            }
            if (current === 0 && next === 5) {
                $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass(
                    "rightMost"
                );
                $(`.slick-slide[data-slick-index="${current}"]`).addClass(
                    "right"
                );
                $(`.slick-slide[data-slick-index="${current - 2}"]`).addClass(
                    "left"
                );
                $(`.slick-slide[data-slick-index="${current - 3}"]`).addClass(
                    "leftMost"
                );
            }
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

    selects.click(function (e) {
        $(this).next().toggle();
        e.preventDefault();
    });

    // selects.on("input", function () {
    //     $(this).val("");
    // });

    // selects.on("focus",function () {
    //     $(this).next().show();
    // });

    $(document).on("keypress", "[data-cus-select-item]", function (e) {
        if (e.which == 13) {
            $(this).click();
        }
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
    let showButton = $("[data-show-package-details]");
    showButton.click(function () {
        $(this).closest(".package__tableMain").next().slideToggle("slow");
    });
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
            $(this).next().slideUp();
            $(this).removeClass("active");
        }
    });
}

function faqTabbing() {
    let faqButton = $(".faqTabbingButton button");
    let faqContainer = $(".faqContainer .accordion");

    faqButton.click(function (e) {
        let itsIndex = $(this).index();
        faqButton.removeClass("active");
        $(this).addClass("active");
        faqContainer.hide();
        faqContainer.eq(itsIndex).show();
    });
}
