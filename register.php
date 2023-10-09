<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- META TITLE AND DESCRIPTION -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- META TITLE AND DESCRIPTION -->


    <!--==== HEADER STYLES START ====-->
    <?php include('includes/header-styles.php') ?>
    <!--==== HEADER STYLES END ====-->
    <title>Contact Us | <?php echo $webName; ?> </title>
</head>

<body>
    <!--==== HEADER START ====-->
    <?php include('includes/header.php') ?>
    <!--==== HEADER END ====-->

    <section class="pageBanner" style="background-image: url(assets/images/register-bg.png);
     --_min-height: auto;
     ">

        <div class="container">
            <h1 class="pageHeading text-center">Register Your Interest</h1>
        </div>
    </section>

    <section class="registerFormSection">
        <div class="contactFormMain registerFormMain">
            <div class="container">
                <div class="form__wrap mainContactForm">
                    <h6 class="section__label text-center mb-0">Registration </h6>
                    <h4 class="section__heading text-center mb-40">Hajj 2024 Registration</h4>
                    <form action="">
                        <div class="row">
                            <div class="col-lg-4 mb-30 col-sm-12">
                                <label>Lead Name <span>*</span></label>
                                <input type="text" placeholder="Title">
                            </div>
                            <div class="col-lg-4 mb-30 col-sm-12">
                                <label style="display: block; min-height: 24px;"></label>
                                <input type="text" placeholder="First">
                            </div>
                            <div class="col-lg-4 mb-30 col-sm-12">
                                <label style="display: block; min-height: 24px;"></label>
                                <input type="text" placeholder="Last">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Your Telephone <span>*</span></label>
                                <input type="number" placeholder="+92">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Your Email <span>*</span></label>
                                <input type="email">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Adult Travelers <span>*</span></label>
                                <div class="cs__selectMain">
                                    <input class="cs__selectInput" initialValue="" data-cus-select value="" placeholder='' readonly>
                                    <div class="cs__selectDropDown" data-cus-select-dropdown>
                                        <span data-cus-select-item>1</span>
                                        <span data-cus-select-item>2</span>
                                        <span data-cus-select-item>3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Child Travelers <span>*</span></label>
                                <div class="cs__selectMain">
                                    <input class="cs__selectInput" initialValue="" data-cus-select value="" placeholder='' readonly>
                                    <div class="cs__selectDropDown" data-cus-select-dropdown>
                                        <span data-cus-select-item>1</span>
                                        <span data-cus-select-item>2</span>
                                        <span data-cus-select-item>3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Departure Country <span>*</span></label>
                                <div class="cs__selectMain">
                                    <input class="cs__selectInput" initialValue="" data-cus-select value="" placeholder='' readonly>
                                    <div class="cs__selectDropDown" data-cus-select-dropdown>
                                        <span data-cus-select-item>1</span>
                                        <span data-cus-select-item>2</span>
                                        <span data-cus-select-item>3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Departure City /​ Airport <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>I’m interested in <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <div class="button__wrap">
                                <label style="display: block; min-height: 24px;"></label>
                                    <button type="submit" class="btn btn-primary" style="max-width: 100%;">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->
</body>

</html>