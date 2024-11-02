
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Features</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <?php $this->load->view("panel_base/sections/css.php") ?>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.svg" type="image/x-icon">

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


    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="<?php echo base_url() ?>assets/images/banner-shape1.png" alt="image">
        </span>
        <span class="banner_shape2"> <img src="<?php echo base_url() ?>assets/images/banner-shape2.png" alt="image">
        </span>
        <span class="banner_shape3"> <img src="<?php echo base_url() ?>assets/images/banner-shape3.png" alt="image">
        </span>

        <div class="bred_text">
          <h1>Features</h1>
          <ul>
            <li><a href="<?php echo base_url() ?>">Home</a></li>
            <li><span>»</span></li>
            <li><a href="#">Features</a></li>
          </ul>
        </div>
      </div>
    </div>


    <section class="row_am app_solution_section">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">
            <!-- UI content -->
            <div class="app_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2><span>Providing innovative payment solution</span> to make customer
                  life easy to grow.</h2>
              </div>
              <p data-aos="fade-up" data-aos-duration="1500">
                Our payment platform offers a wide range of flexible options, making transactions simple and efficient.
                Customers can choose from various payment methods, including credit/debit cards, UPI, digital wallets
                like Google Pay and Paytm, as well as cryptocurrency. The user-friendly interface ensures a smooth,
                one-click payment experience for returning users, while also being fully customizable to fit any
                business needs. 
              </p>
              <p data-aos="fade-up" data-aos-duration="1500">
              With cutting-edge security features like AI-powered fraud detection and strict
                compliance with regulatory standards, our solution guarantees safe, fast, and reliable transactions for
                all users.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app_images" data-aos="fade-in" data-aos-duration="1500">
              <ul>
                <li><img src="<?php echo base_url() ?>assets/images/abt_01.png" alt=""></li>
                <li>
                  <a class="popup-youtube play-button"
                    data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal"
                    data-target="#myModal" title="About Video">
                    <img src="<?php echo base_url() ?>assets/images/abt_02.png" alt="">
                    <div class="waves-block">
                      <div class="waves wave-1"></div>
                      <div class="waves wave-2"></div>
                      <div class="waves wave-3"></div>
                    </div>
                    <span class="play_icon"><img src="<?php echo base_url() ?>assets/images/play_black.png"
                        alt="image"></span>
                  </a>
                </li>
                <li><img src="<?php echo base_url() ?>assets/images/abt_03.png" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- App-Solution-Section-end -->




    <!-- Testimonial-Section start -->
    <section class="row_am testimonial_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>Important <span>Features</span></h2>
          <!-- p -->
          <p>A secure payment gateway is essential for ensuring safe and reliable online transactions.</p>
        </div>
        <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
          <div id="testimonial_slider" class="owl-carousel owl-theme">
            <!-- user 1 -->
            <div class="item">
              <div class="testimonial_slide_box">
                <p class="review">
                  “ All transaction data is encrypted using advanced SSL
                  or TLS protocols to ensure it cannot be intercepted
                  by unauthorized parties. ”
                </p>
                <div class="testimonial_img">
                  <img src="<?php echo base_url() ?>assets/images/auth5.jpeg" alt="image">
                </div>
              </div>
            </div>

            <!-- user 2 -->
            <div class="item">
              <div class="testimonial_slide_box">

                <p class="review">
                  “ Tokenization replaces sensitive payment information, such as card details, with a unique,
                  non-sensitive token to enhance transaction security and reduce fraud risks. ”
                </p>
                <div class="testimonial_img">
                  <img src="<?php echo base_url() ?>assets/images/auth6.jpeg" alt="image">
                </div>
                <h3>Tockenize Method</h3>
              </div>
            </div>

            <!-- user 3 -->
            <div class="item">
              <div class="testimonial_slide_box">

                <p class="review">
                  “ MFA adds an additional layer of security by requiring more than one method of verification, such as
                  a password and a one-time code sent to a mobile device. ”
                </p>
                <div class="testimonial_img">
                  <img src="<?php echo base_url() ?>assets/images/feature-01.webp" alt="image">
                </div>
                <h3>Authentication</h3>
              </div>

            </div>
          </div>




        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Testimonial-Section end -->

    <!-- easy use -->
    <section class="row_am how_it_works" id="how_it_work">
      <div class="container">
        <div class="how_it_inner">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Easy To Use</h2>
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
                  <img src="<?php echo base_url() ?>assets/images/create_account.jpg" alt="image">
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
                  <img src="<?php echo base_url() ?>assets/images/download_app.jpg" alt="image">
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
                  <img src="<?php echo base_url() ?>assets/images/enjoy_app.jpg" alt="image">
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- video section start -->
        <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
          <div class="thumbnil">
            <img src="<?php echo base_url() ?>assets/images/yt_thumb.png" alt="image">
            <a class="popup-youtube play-button" data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"
              data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU">
              <span class="play_btn">
                <img src="<?php echo base_url() ?>assets/images/play_icon.png" alt="image">
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


    <!-- ModernUI-Section-Start -->
    <section class="row_am modern_ui_section">

      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">
            <!-- UI content -->
            <div class="ui_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2>Automatic <span>Transaction</span></h2>
                <p>

                  An automatic transaction is a payment or transfer set up to occur at regular intervals or specific
                  times without requiring manual action.
                </p>
              </div>
              <ul class="design_block">
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Pre-authorization</h4>
                  <p>Commonly used for recurring bills or subscriptions, it ensures
                    timely payments by automating the process through pre-authorization, reducing the risk of late fees
                    or
                    missed payments.</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Payment gateways</h4>
                  <p> These transactions can be set up via bank accounts, payment gateways, or credit
                    cards, offering convenience and efficiency for both users and service providers.</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- UI Image -->
            <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
              <div class="left_img">
                <img class="moving_position_animatin" src="<?php echo base_url() ?>assets/images/modern01.png"
                  alt="image">
              </div>
              <!-- UI Image -->
              <div class="right_img">
                <img class="moving_position_animatin" src="<?php echo base_url() ?>assets/images/shield_icon.png"
                  alt="image">
                <img class="moving_position_animatin" src="<?php echo base_url() ?>assets/images/modern02.png"
                  alt="image">
                <img class="moving_position_animatin" src="<?php echo base_url() ?>assets/images/modern03.png"
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
                  <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                    <i class="icon_faq icofont-plus"></i></i> How can i pay ?</button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>You can typically pay by selecting your preferred method, such as entering your credit/debit card
                    details, using a digital wallet (like PayPal or Google Pay), or through bank transfer options. After
                    filling in the necessary details, you confirm the payment to complete the transaction securely.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> How to setup account ?</button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>To set up an account on a payment website, follow these steps:<br>

                    1.Visit the Website: Go to the payment website's homepage.<br>
                    2.Click Sign Up: Look for a "Sign Up" or "Create Account" button.<br>
                    3.Enter Personal Information: Provide details like your name, email, phone number, and address.<br>
                    4.Set a Password: Create a secure password for your account.<br>
                    5.Verify Your Email/Phone: You may receive a verification link or code to confirm your email or
                    phone number.<br>
                    6.Add Payment Details: Enter your preferred payment method, such as a credit card or bank
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
                    data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>What is MyBankPe
                    ?</button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <p>MyBankPe is a web software that enables businesses to seamlessly manage money in and out. With
                    MyBankPe, businesses can make bulk payout transactions in a few seconds, and collect payments from
                    customers using UPI, QR, and Bank transfers. MyBankPe also enables businesses to create invoices
                    that can be shared on WhatsApp or email in just one click along with a payment collection URL.</p>
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
          <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
            <i class="icofont-close-line-circled"></i>
          </button>
          <div class="modal-body">
            <div id="video-container" class="video-container">
              <iframe id="youtubevideo" src="" width="640" height="360" frameborder="0" allowfullscreen></iframe>
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