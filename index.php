<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyBankPe: Effortless Bulk Payout Solution Via CSV API For UPI NEFT IMPS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="description"
        content="MyBankPe Payout via API enables seamless, real-time payouts for businesses, providing an efficient, secure, and scalable way to automate payments. With this API, companies can transfer funds directly to bank accounts, digital wallets, or UPI handles, making it ideal for salary disbursements, vendor payments, refunds, and more. The API offers instant settlement, robust security features, and easy integration with existing systems. MyBankPe Payout is designed for scalability, ensuring businesses can handle high volumes of transactions while maintaining cost-efficiency and compliance with financial regulations.">
    <meta name="keywords" content="MyBankPe, Payout, UPI, NEFT, IMPS, Banking">
    <meta name="author" content="CoderAryan">
    <?php $this->load->view("panel_base/sections/css.php") ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                "gtm.start":
                    new Date().getTime(), event: "gtm.js"
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != "dataLayer" ? "&l=" + l : ""; j.async = true; j.src =
                    "https://www.googletagmanager.com/gtm.js?id=" + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-TGGTHSJX");</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGGTHSJX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- Header Start -->
        <?php $this->load->view("panel_base/sections/header.php") ?>

        <!-- Banner-Section-Start -->
        <section class="banner_section">
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                        <!-- banner text -->
                        <div class="banner_text">
                            <!-- h1 -->
                            <h1>Your Gateway to <span>Digital Finance Payment Solution</span></h1>
                            <!-- p -->
                            <p>Simplifying collections and payments for your Business. <br>The all-in-one banking
                                solution for frictionless payments and processing.
                            </p>
                        </div>

                        <div class="trial_box">
                            <!-- form -->
                            <form action="https://mybankpe.com/auth/login" data-aos="fade-in" data-aos-duration="1500"
                                data-aos-delay="100">
                                <div class="form-group">
                                    <button class="btn">Get Started</button>
                                </div>
                            </form>
                        </div>
                        <!-- users -->
                        <div class="used_app">
                            <ul>
                                <li><img src="assets/images/used01.png" alt="image">
                                </li>
                                <li><img src="assets/images/used02.png" alt="image">
                                </li>
                                <li><img src="assets/images/used03.png" alt="image">
                                </li>
                                <li><img src="assets/images/used04.png" alt="image">
                                </li>
                            </ul>
                            <p>12M + <br> used this app</p>
                        </div>
                    </div>

                    <!-- banner images start -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-in" data-aos-duration="1500">
                        <div class="banner_images image_box1">
                            <span class="banner_image1"> <img class="moving_position_animatin"
                                    src="assets/images/bannerimage1.png" alt="image"> </span>
                            <span class="banner_image2"> <img class="moving_animation"
                                    src="assets/images/bannerimage2.png" alt="image"> </span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-in" data-aos-duration="1500">
                        <div class="banner_images image_box2">
                            <span class="banner_image3"> <img class="moving_animation"
                                    src="assets/images/bannerimage3.png" alt="image"> </span>
                            <span class="banner_image4"> <img class="moving_position_animatin"
                                    src="assets/images/bannerimage4.png" alt="image"> </span>
                        </div>
                    </div>
                    <!-- banner slides end -->

                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- Banner-Section-end -->

        <!-- Features-Section-Start -->
        <section class="features_section" id="features">
            <!-- section bg -->
            <div class="container">
                <div class="features_inner">

                    <!-- feature image -->
                    <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <img src="assets/images/device-feature.png" alt="image">
                    </div>

                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                        <!-- h2 -->
                        <h2><span>Features</span> that makes us different!</h2>
                        <!-- p -->
                        <p>Enjoy effortless banking, designed for MSMEs and SMBs with multiple payment options. </p>
                        </p>
                    </div>

                    <!-- story -->
                    <div class="features_block">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature_box" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="image">
                                        <img src="assets/images/secure_data.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>Secure Data</h4>
                                        <p>Data security is our first priority to keep your data secure...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="feature_box" data-aos="fade-up" data-aos-duration="1700">
                                    <div class="image">
                                        <img src="assets/images/functional.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>Easy to use</h4>
                                        <p>Web app, Mobile app, APIs and Integrations...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                                    <div class="image">
                                        <img src="assets/images/live-chat.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>Automate payments</h4>
                                        <p>Use groups and tags to make superfast payments...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                                    <div class="image">
                                        <img src="assets/images/support.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>One stop solution</h4>
                                        <p>An account for all your financial needs...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- container end -->
        </section>
        <!-- Features-Section-end -->

        <!-- About-App-Section-Start -->

        <!-- About-App-Section-end -->

        <!-- ModernUI-Section-Start -->
        <section class="row_am modern_ui_section" id="services">

            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="ui_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2>Frictionless <span>payments</span></h2>
                                <p>
                                    In today’s fast-paced digital world, frictionless payments are key to seamless
                                    transactions. They allow businesses and consumers to send and receive funds quickly,
                                    securely, and with minimal effort. By leveraging modern technologies, these payments
                                    reduce the barriers and delays associated with traditional financial systems, making
                                    the entire payment process more efficient.
                                </p>
                            </div>
                            <ul class="design_block">
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>Bulk payouts via contacts, CSV and APIs</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>With no daily or monthly limits</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>With UPI, IMPS, NEFT and RTGS</h4>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1500">
                                    <h4>API Banking</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- UI Image -->
                        <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                            <div class="left_img">
                                <img class="moving_position_animatin"
                                    src="assets/images/modern01.png" alt="image">
                            </div>
                            <!-- UI Image -->
                            <div class="right_img">
                                <img class="moving_position_animatin"
                                    src="assets/images/shield_icon.png" alt="image">
                                <img class="moving_position_animatin"
                                    src="assets/images/modern02.png" alt="image">
                                <img class="moving_position_animatin"
                                    src="assets/images/modern03.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- ModernUI-Section-end -->

        <!-- How-It-Workes-Section-Start -->
        <section class="row_am how_it_works" id="how_to_start">
            <div class="container">
                <div class="how_it_inner">
                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                        <!-- h2 -->
                        <h2><span>How to start</span> - 3 easy steps</h2>
                        <!-- p -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has
                            beenthe
                            standard dummy.</p>
                    </div>
                    <div class="step_block">
                        <!-- UL -->
                        <ul>
                            <!-- step -->
                            <li>
                                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                                    <h4>Create account</h4>
                                    <a class="btn btn-primary" href="https://mybankpe.com/auth/register">Get Started</a>
                                    <p>Sign up free for App account. One account for all devices.</p>
                                </div>
                                <div class="step_number number1">
                                    <h3>01</h3>
                                </div>
                                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                                    <img src="assets/images/create_account.jpg" alt="image">
                                </div>
                            </li>

                            <!-- step -->
                            <li>
                                <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                                    <h4>Complete KYC</h4>
                                    <span>Verify Your Account</span>
                                    <p>Complete Your Kyc via submitting adhar card and pan card documents</p>
                                </div>
                                <div class="step_number number2">
                                    <h3>02</h3>
                                </div>
                                <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                                    <img src="assets/images/download_app.jpg" alt="image">
                                </div>
                            </li>

                            <!-- step -->
                            <li>
                                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                                    <h4>It’s done, Start sending payments</h4>
                                    <span>Have any questions check our <a href="#">FAQs</a></span>
                                    <p>Get most amazing app experience,Explore and share the app</p>
                                </div>
                                <div class="step_number number3">
                                    <h3>03</h3>
                                </div>
                                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                                    <img src="assets/images/enjoy_app.jpg" alt="image">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- video section start -->
                <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
                    <div class="thumbnil">
                        <img src="assets/images/yt_thumb.png" alt="image">
                        <a class="popup-youtube play-button"
                            data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal"
                            data-target="#myModal" title="XJj2PbenIsU">
                            <span class="play_btn">
                                <img src="assets/images/play_icon.png" alt="image">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </span>
                            Let’s see virtually how it works
                            <span>Watch video</span>
                        </a>
                    </div>
                </div>
                <!-- video section end -->
            </div>
            <!-- container end -->

        </section>
        <!-- How-It-Workes-Section-end -->

        <!-- Testimonial-Section start -->

        <!-- Testimonial-Section end -->

        <!-- Pricing-Section -->

        <!-- Pricing-Section end -->

        <!-- FAQ-Section start -->
        <section class="row_am faq_section" id="faq">
            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                    <!-- h2 -->
                    <h2><span>FAQ</span> - Frequently Asked Questions</h2>
                    <!-- p -->
                </div>
                <!-- faq data -->
                <div class="faq_panel">
                    <div class="accordion" id="accordionExample">
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link active" data-toggle="collapse"
                                        data-target="#collapseOne">
                                        <i class="icon_faq icofont-plus"></i></i>What are the transaction method
                                        available in MyBankPe?</button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>UPI, IMPS, RTGS, NEFT. All four method don’t have any daily or monthly limit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> Is there
                                        any transaction limit on UPI, IMPS, NEFT, RTGS?</button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>There's no per day limit like banks. However, there is an INR 1 lakh limit per
                                        transaction on UPI, INR 5 lakhs on IMPS, and no limit on NEFT and RTGS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>How much
                                        time is required to open an account?</button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Open an account in a few minutes by verifying your aadhaar, pan card and business
                                        details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>Why
                                        aadhaar and pan are required to verify my account?</button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>As per RBI guidelines, It is mandatory to verify aadhaar and pan card to create a
                                        virtual / individual current account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>What
                                        exactly is MyBankPe?</button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>MyBankPe is a web software that enables businesses to seamlessly
                                        manage money in and out. With MyBankPe, businesses can make
                                        bulk payout transactions in a few seconds, and collect payments from customers
                                        using UPI, QR, and Bank transfers. MyBankPe also enables
                                        businesses to create invoices that can be shared on WhatsApp or email in just
                                        one click along with a payment collection URL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- FAQ-Section end -->

        <!-- Beautifull-interface-Section start -->

        <!-- Beautifull-interface-Section end -->

        <!-- Download-Free-App-section-Start  -->

        <!-- Download-Free-App-section-end  -->

        <!-- Story-Section-Start -->
        <section class="row_am latest_story" id="blog">
            <!-- container start -->
            <div class="container">
                <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                    <h2>Read latest <span>Announcement</span></h2>
                    <p>We are recognized by Startup India and DPIIT</p>
                </div>
                <!-- row start -->
                <div class="row">
                    <!-- story -->
                    <div class="col-md-4">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                            <div class="story_img">
                                <img src="assets/images/blogs/story01.png" alt="image">
                                <span>45 min ago</span>
                            </div>
                            <div class="story_text">
                                <h3>Cool features added!</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry lorem Ipsum has.</p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- story -->
                    <div class="col-md-4">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                            <div class="story_img">
                                <img src="assets/images/blogs/story02.png" alt="image">
                                <span>45 min ago</span>
                            </div>
                            <div class="story_text">
                                <h3>Top rated app! Yupp.</h3>
                                <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem
                                    Ipsum is.</p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- story -->
                    <div class="col-md-4">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                            <div class="story_img">
                                <img src="assets/images/story03.png" alt="image">
                                <span>45 min ago</span>
                            </div>
                            <div class="story_text">
                                <h3>Creative ideas on app.</h3>
                                <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- Story-Section-end -->

        <!-- Trusted Section start -->
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
                                <img src="assets/images/paypal.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/spoty.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/shopboat.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/slack.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/envato.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/paypal.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/spoty.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="logo">
                                <img src="assets/images/shopboat.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- logos slider end -->
            </div>
            <!-- container end -->
        </section>
        <!-- Trusted Section ends -->




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
                            <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0"
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('newsletterForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData();
        formData.append('email', document.getElementById('email').value);

        fetch('<?php echo base_url('AdminController/submit'); ?>', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text()) // Adjust based on expected response format (e.g., .json())
            .then(data => {
                console.log('Form submitted successfully:', data);
                // Handle success (e.g., display a success message)
            })
            .catch(error => {
                console.error('Error submitting form:', error);
                // Handle error (e.g., display an error message)
            });
    });
});

</script>

    <!-- j Query -->
    <?php $this->load->view("panel_base/sections/scripts.php") ?>

</body>


</html>