$(document).ready(function () {
    header();
})

function header() {
    let burgerButton = $('.burgerButton')
    let mobileMenu = $('.mobileMenu')

    let closeButton = $('.mobileMenuClose')

    burgerButton.click(function () {
        mobileMenu.toggleClass('active')
    })

    closeButton.click(function () {
        mobileMenu.removeClass('active')
    })

    let mobileSubmenuButton = $('.li--has-submenu')
    let mobileSubmenu = '.mobile--submenu'
    $(mobileSubmenu).slideUp();

    mobileSubmenuButton.click(function (e) {
        e.preventDefault();

        $(this).toggleClass('active')
        $(this).find(mobileSubmenu).slideToggle();
    })
}