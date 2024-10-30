<?php
$company_name = "MyBankPe";
$page = "Current Account";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $company_name ?>- <?= $page ?></title>

    <?php $this->load->view("panel_base/sections/css.php") ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- Header Start -->
        <?php $this->load->view("panel_base/sections/header.php") ?>


        <section class="banner_section">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                        <!-- banner text -->
                        <div class="banner_text">

                            <h1>Instant digital <span>current</span> account for MSMEs
                            </h1>

                            <p>Take your business to the next level with an instant digital current account. Start
                                accepting and making payments effortlessly.
                            </p>

                        </div>
                        <a href="https://mybankpe.com/auth/register" data-aos="fade-in" data-aos-duration="1500"><b>Get
                                Start
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            </b></a>
                    </div>

                    <!-- banner slides start -->
                    <div class="col-lg-6 col-md-12" data-aos="fade-in" data-aos-duration="1500">
                        <div class="banner_image">
                            <img src="<?php echo base_url() ?>assets/images/payment-getway-main.png" alt="image">
                        </div>
                    </div>
                    <!-- banner slides end -->

                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- Banner-Section-end -->

        <section class="row_am trusted_section">
            <!-- container start -->
            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                    <!-- h2 -->
                    <h2>Trusted by <span>150+</span> companies</h2>
                    <!-- p -->
                    <p>Our Customers love us.</p>
                </div>

                <!-- logos slider start -->
                <div class="company_logos">
                    <div id="company_slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/paypal.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/spoty.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/shopboat.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/slack.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/envato.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/paypal.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/spoty.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="<?php echo base_url() ?>assets/images/shopboat.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- logos slider end -->
            </div>
            <!-- container end -->
        </section>



        <!-- ModernUI-Section-Start -->
        <section class="row_am modern_ui_section">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="ui_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2>Accept All <span>Payment</span> Modes</h2>

                            </div>
                            <ul class="design_block">
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Dynamic UPI QR and UPI Collect request to UPI Apps.
                                    </h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Domestic and International Credit & Debit cards.</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Net banking, Wallets, EMI and pay later options.</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- UI Image -->
                        <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                            <div class="left_img">
                                <img class="moving_position_animatin" src="<?= base_url() ?>assets/images/pg3.svg"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- ModernUI-Section-end -->

        <!-- ModernUI-Section-Start -->
        <section class="row_am modern_ui_section">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- UI Image -->
                        <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                            <div class="left_img">
                                <img class="moving_position_animatin"
                                    src="<?= base_url() ?>assets/images/transaction.png" width="550px" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="ui_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2>Superfast <span>Checkout</span> </h2>

                            </div>
                            <ul class="design_block">
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Experience better conversion than ever.
                                    </h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Ensure great user experience with custom branding.</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Quick Integeration with low code.</h4>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- ModernUI-Section-end -->

        <!-- ModernUI-Section-Start -->
        <section class="row_am modern_ui_section">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="ui_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2>Benefits of using <span><?= $company_name ?></span> PG</h2>

                            </div>
                            <ul class="design_block">
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Quick and easy checkout for better customer experience
                                    </h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Industry best success rates</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Instant Refunds and Settlements.</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- UI Image -->
                        <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                            <div class="left_img">
                                <img class="moving_position_animatin" src="<?= base_url() ?>assets/images/pg5.webp"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- ModernUI-Section-end -->


        <!-- Features-Section-Start -->
        <section class="row_am features_section" id="features">
            <!-- container start -->
            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                    <!-- h2 -->
                    <h2>Smarter. Automated. Modern <span>Payment Gateway</span> for your business. </h2>
                    <!-- p -->
                    <p style="font-family: Lucida Console,Courier New, monospace">Time is money - Save both.</p>
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- Features-Section-end -->

        <section class="row_am blog_list_main">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-in" data-aos-duration="1500">
                        <div class="blog_img">
                            <img src="<?= base_url() ?>assets/images/mob_transaction.webp" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_text">
                            <di class="section_title">
                                <h2>API-First, Technology at Our Core</h2>
                                <p>At <?= $company_name ?>, technology drives everything we do. We are an API-first
                                    company, offering best-in-industry
                                    developer APIs that are designed for easy integration and seamless scalability.</p>
                                <p>Our APIs enable you to plug into powerful payment solutions effortlessly. Plus, with
                                    our AI-powered
                                    developer chat, you can get instant answers to technical questions, ensuring smooth
                                    development and
                                    integration every step of the way.</p>
                                <p>We can help you make your business payments frictionless just like how UPI apps did
                                    for your end
                                    customers.</p>
                                <a class="btn" href="https://mybankpe.com/auth/register" data-aos="fade-in"
                                    data-aos-duration="1500">Get Started
                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
    </div>
    <!-- container end -->
    </section>
    <!-- Blog-Detail-Section-end -->



    <?php $this->load->view("panel_base/sections/footer.php"); ?>

    <!-- VIDEO MODAL -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
                    <i class="icofont-close-line-circled"></i>
                </button>
                <div class="modal-body">
                    <div id="video-container" class="video-container">
                        <iframe id="youtubevideo" src="" width="640" height="360" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="purple_backdrop"></div>

    </div>
    <!-- Page-wrapper-End -->

    <?php $this->load->view("panel_base/sections/scripts.php") ?>

</body>

</html>