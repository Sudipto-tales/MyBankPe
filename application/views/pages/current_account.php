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
    <title><?= $company_name ?> <?= $page ?></title>

    <?php $this->load->view("panel_base/sections/css.php") ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.svg" type="image/x-icon">
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

        <!-- Download-Free-App-section-Start  -->
        <section class="row_am free_app_section" id="getstarted">
            <!-- container start -->
            <div class="container">
                <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                    <!-- row start -->
                    <div class="row">
                        <!-- content -->
                        <div class="col-md-6">
                            <div class="free_text">
                                <div class="section_title">
                                    <h2>Experience a fully digital onboarding process like never before</h2>
                                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <b>Sign up</b></p>
                                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <b>Verify</b></p>
                                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <b>Start
                                            transacting</b></p>

                                </div>
                                <ul class="app_btn">
                                    <li>
                                        <a href="https://mybankpe.com/auth/register" data-aos="fade-in"
                                            data-aos-duration="1500"><b>Get
                                                Start
                                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            </b></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <!-- images -->
                        <div class="col-md-6">
                            <div class="free_img">
                                <img width="600px" src="<?php echo base_url() ?>assets/images/card+boy.png"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- Download-Free-App-section-end  -->


        <!-- MSMEs-Section-Start -->
        <section class="row_am modern_ui_section">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="ui_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2>Designed for <span>MSMEs</span></h2>

                            </div>
                            <ul class="design_block">
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Manage payments effortlessly.
                                    </h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Process high-volume transactions.</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Avoid manual reconciliation.</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- UI Image -->
                        <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                            <div class="left_img">
                                <img height="550px" class="moving_position_animatin"
                                    src="<?= base_url() ?>assets/images/Cash+Payment.svg" alt="image">
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
                                <img width="500px" class="moving_position_animatin"
                                    src="<?= base_url() ?>assets/images/Banknote.svg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="ui_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2>Complete <span>digital</span> onboarding</h2>

                            </div>
                            <ul class="design_block">
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Say goodbye to physical verification
                                    </h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>No document upload or submission required</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Get your current account activated within two days</h4>
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








        <!-- Features-Section-Start -->
        <section class="row_am features_section" id="features">
            <!-- container start -->
            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                    <!-- h2 -->
                    <h2>Individual <span>current accounts</span> for self-employed professionals, freelancers,
                        consultants, lawyers, doctors, and other professionals.</h2>
                    <!-- p -->
                    <p style="font-family: Lucida Console,Courier New, monospace">Get started in 2 easy steps - Singup
                        and video KYC</p>

                    <a href="https://mybankpe.com/auth/register" data-aos="fade-in" data-aos-duration="1500"><b>Let's
                            Start
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </b></a>
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- FAQ-Section start -->
        <section class="row_am faq_section">

            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                    <!-- h2 -->
                    <h2><span>FAQ</span> - Frequently Asked Questions</h2>

                </div>
                <!-- faq data -->
                <div class="faq_panel">
                    <div class="accordion" id="accordionExample">
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link active" data-toggle="collapse"
                                        data-target="#collapseOne">
                                        <i class="icon_faq icofont-plus"></i></i> How can i pay ?</button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>You can typically pay by selecting your preferred method, such as entering your
                                        credit/debit card
                                        details, using a digital wallet (like PayPal or Google Pay), or through bank
                                        transfer options. After
                                        filling in the necessary details, you confirm the payment to complete the
                                        transaction securely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> How to
                                        setup account ?</button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>To set up an account on a payment website, follow these steps:<br>

                                        1.Visit the Website: Go to the payment website's homepage.<br>
                                        2.Click Sign Up: Look for a "Sign Up" or "Create Account" button.<br>
                                        3.Enter Personal Information: Provide details like your name, email, phone
                                        number, and address.<br>
                                        4.Set a Password: Create a secure password for your account.<br>
                                        5.Verify Your Email/Phone: You may receive a verification link or code to
                                        confirm your email or
                                        phone number.<br>
                                        6.Add Payment Details: Enter your preferred payment method, such as a credit
                                        card or bank
                                        account.<br>
                                        7.Agree to Terms: Review and accept the website's terms and privacy policy.<br>
                                        8.Complete Setup: Submit the form to finalize your account setup.<br>

                                        Your account is now ready to use for payments!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>What is
                                        MyBankPe
                                        ?</button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>MyBankPe is a web software that enables businesses to seamlessly manage money in
                                        and out. With
                                        MyBankPe, businesses can make bulk payout transactions in a few seconds, and
                                        collect payments from
                                        customers using UPI, QR, and Bank transfers. MyBankPe also enables businesses to
                                        create invoices
                                        that can be shared on WhatsApp or email in just one click along with a payment
                                        collection URL.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- FAQ-Section end -->



        <?php $this->load->view("panel_base/sections/footer.php"); ?>

        <!-- VIDEO MODAL -->
        <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button id="close-video" type="button" class="button btn btn-default text-right"
                        data-dismiss="modal">
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