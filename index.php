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
    <title>Home</title>
</head>

<body>
    <!--==== HEADER START ====-->
    <?php include('includes/header.php') ?>
    <!--==== HEADER END ====-->

    <!--==== HOME BANNER START ====-->
    <section class="homeBanner bannerWithImage">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="homeBannerText bannerTextWithSideImg pr-lg-4">
                        <h1>Embark on Your Hajj Journey</h1>
                        <p>Embark on a profound spiritual journey to the holy land of Mecca. Experience the trans formative power of Hajj, connect with millions of pilgrims, and renew your faith like never before.</p>
                        <a href="javascript:;" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>

            <img src="assets/images/home-banner-img.png" alt="" class="bannerSideImg">
        </div>
    </section>
    <!--==== HOME BANNER END ====-->

    <!--==== CALCULATE SECTION START ====-->
    <section class="calculateSection np-padding">
        <div class="container">
            <div class="calculateMain">
                <h4 class="small__heading"> <img src="assets/images/currency-icon.svg" class="mr-2"> Currency Calculator</h4>
                <div class="util__panel calculateFormWrap">
                    <div class="input__wrap sm">
                        <label for="c_amount">Amount</label>
                        <input type="number">
                    </div>
                    <div class="input__wrap">
                        <label for="c_currency">Choose Currency</label>
                        <input type="number">
                    </div>

                    <div class="calulateLoader loader mt-4">
                        <img src="assets/images/loader.svg" alt="">
                    </div>


                    <div class="input__wrap">
                        <label for="c_currency">Choose Currency</label>
                        <input type="number">
                    </div>
                    <div class="input__wrap calculatedAmount sm">
                        <label for="c_converted">Converted</label>
                        <input type="number">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==== CALCULATE SECTION END ====-->


    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->
</body>

</html>