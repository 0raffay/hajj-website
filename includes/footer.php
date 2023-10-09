<section class="newsletterSection no-padding">
    <div class="newsletterMain">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12 pb-2 text-md-center text-lg-left">
                    <h4 class="  clr-accent fw-600 fs-24 mb-0">Subscribe To Our</h4>
                    <h4 class="section__heading clr-accent">
                        NEWSLETTER
                    </h4>
                </div>
                <div class="col-lg-8 col-md-12">
                    <form action="">
                        <div class="newsletterInput">
                            <input type="email" name="newsletter" id="newsletter" placeholder="Email">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>    
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__logo">
                    <img src="assets/images/logo-1.png" alt="">
                </div>
            </div>

            <div class="col-lg-12">
                <ul class="footer__list">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="testimonial.php">Testimonials</a></li>
                </ul>
            </div>

            <div class="col-lg-12">
                <div class="footer__ctaInfo">
                    <div class="border-right">
                        <h6>Call Us</h6>
                        <a href="<?php echo $site__phone;?>"><?php echo $site__phone;?></a>
                    </div>
                    <div>
                        <h6>Contact Us</h6>
                        <a href="<?php echo $site__email;?>"><?php echo $site__email;?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>





<?php include('includes/footer-scripts.php') ?>