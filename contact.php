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

    <section class="pageBanner" style="background-image: url(assets/images/contact-bg.png);
     --_min-height: 574px;
     ">

        <div class="container">
            <h1 class="pageHeading text-center">Contact Us</h1>
        </div>
    </section>

    <section class="contactFormSection pt-0 pb-0">
        <div class="contactFormMain">
            <div class="container">
                <div class="form__wrap mainContactForm">
                    <h4 class="small__heading text-center fs-30 mb-40">Contact Us</h4>
                    <form action="">
                        <div class="row mb-40">
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Your Name <span>*</span></label>
                                <input required type="text">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Department <span>*</span></label>
                                <div class="cs__selectMain">
                                    <input required title="Select From The Options Below:" class="cs__selectInput" readonly initialValue="" value="" data-cus-select placeholder=''>
                                    <div class="cs__selectDropDown" data-cus-select-dropdown>
                                        <span tabindex="0" role="button" aria-pressed="false" data-cus-select-item>General</span>
                                        <span tabindex="0" role="button" aria-pressed="false" data-cus-select-item>Hajj</span>
                                        <span tabindex="0" role="button" aria-pressed="false" data-cus-select-item>Umrah</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Adult Traveler<span>*</span></label>
                                <input required type="text">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Child Travelers <span>*</span></label>
                                <input required type="text">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Your Telephone <span>*</span></label>
                                <input required type="number">
                            </div>
                            <div class="col-lg-6 mb-30 col-sm-12">
                                <label>Your Email <span>*</span></label>
                                <input required type="email">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Your Message <span>*</span></label>
                                <textarea required name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="button__wrap">
                            <button type="submit" class="btn btn-primary">Send Message</button>
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