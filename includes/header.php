<header>
    <div class="container">
        <div class="headerContainer">
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <nav class="flex-1">
                <ul class="nav__list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="contact.php">Hajj</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                    <li><a href="#">Media</a></li>
                </ul>
            </nav>
            <div class="button__wrap">
                <a href="register.php" class="btn btn-primary">Donate Now</a>
            </div>
            <div class="burgerButton">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</header>

<div class="mobileMenu">
    <div class="mobileMenuHeader">
        <div class="logo">
            <img src="assets/images/logo.png" alt="">
        </div>
        <div class="mobileMenuClose">
            <button><i class="ri-close-line"></i></button>
        </div>
    </div>

    <ul class="mobile__list">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>

        <li class="li--has-submenu">

            <span class="closeIcon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            <span class="openIcon">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </span>

            <a href="attractions">Hajj</a>
            <ul class="mobile--submenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact.php">Hajj</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="#">Media</a></li>
            </ul>
        </li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">Media</a></li>
    </ul>
</div>