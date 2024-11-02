<?php 
$company_name = "MyBankPe";
$page = "Payout Services";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $company_name ?>- <?= $page?></title>

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
              <!-- h1 -->
              <h1><?= $company_name ?></h1>
              <!-- h2 -->
              <h2>The easiest way to
                <span>Make BusinessPayments</span>
              </h2>
              <!-- p -->
              <p>Pay your suppliers, employees, customer refunds or support any other business requirement instantly
                without any limit on UPI and Bank transfers like IMPS, NEFT and RTGS. </p>
            </div>
            <a href="https://mybankpe.com/auth/register" data-aos="fade-in" data-aos-duration="1500"><b>Get Start
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              </b></a>
          </div>

          <!-- banner slides start -->
          <div class="col-lg-6 col-md-12" data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_image">
              <img src="<?php echo base_url() ?>assets/images/hero-image.png" alt="image">

              <!-- video section start -->
              <div class="yt_video">
                <div class="thumbnil">
                  <!-- youtube video -->
                  <a class="popup-youtube play-button"
                    data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal"
                    data-target="#myModal" title="XJj2PbenIsU">
                    <span class="play_btn">

                      <div class="waves-block">
                        <img src="<?php echo base_url() ?>assets/images/play_icon.png" alt="image">
                        <div class="waves wave-1"></div>
                        <div class="waves wave-2"></div>
                        <div class="waves wave-3"></div>
                      </div>
                    </span>
                  </a>
                </div>
              </div>
              <!-- video section end -->


            </div>
          </div>
          <!-- banner slides end -->

        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Banner-Section-end -->


    <!-- Simplified Payments -->
    <section class="row_am features_section" id="features">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2><span>We have</span> simplified payments</h2>
          <!-- p -->
          <p>Make Bulk payments using our web app, mobile app, google sheet integration and developer friendly APIs.</p>
        </div>
        <div class="feature_detail">
          <!-- feature box left -->
          <div class="left_data feature_box">

            <!-- feature box -->
            <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
              <div class="text">
                <h4>Web Application</h4>
                <p>Say goodbye to old methods of bulk payouts via excel. Use our web app to make payouts seamless.

                </p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-right" data-aos-duration="1500">

              <div class="text">
                <h4>Mobile Application
                </h4>
                <p>Choose contacts or groups, enter the amount for each contact and in one click make bulk payouts.
                  Efficient bulk payouts guaranteed.</p>
              </div>
            </div>
          </div>

          <!-- feature box right -->
          <div class="right_data feature_box">

            <!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">

              <div class="text">
                <h4>Ext Integrations</h4>
                <p>Own your data and collaboration to make frictionless payouts and receive updates instantly using our
                  Google Sheet Integration.</p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">

              <div class="text">
                <h4>Developer friendly</h4>
                <p>Integrate our APIs in your product and subscribe to our web hooks to make payouts at scale.</p>
              </div>
            </div>

          </div>
          <!-- feature image -->
          <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <img src="<?= base_url() ?>assets/images/Send+money+half+up2.svg" alt="image">
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- End of Simplified Payments -->

    <!-- About-App-Section-Start -->
    <section class="row_am about_app_section">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">

            <!-- about images -->
            <div class="about_img" data-aos="fade-in" data-aos-duration="1500">

              <div class="frame_img">
                <img class="moving_animation" src="<?php echo base_url() ?>assets/images/payout-gif.gif" alt="image">
              </div>
            </div>
          </div>
          <div class="col-lg-6">

            <!-- about text -->
            <div class="about_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

                <!-- h2 -->
                <h2>Make Payouts to any Bank Account or <span>Virtual Payment Address
                  </span></h2>

                <!-- p -->
                <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Make instant business payments to your
                  vendors

                </p>
                <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Seamless experience and auto reconciliation

                </p>
                <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Payouts using APIs, Web App, Mobile App and
                  integration

                </p>
              </div>

              <a href="contact.html" class="btn puprple_btn" data-aos="fade-in" data-aos-duration="1500">REGISTER
                NOW</a>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- About-App-Section-end -->

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
                <h2>Say <span>Goodbye</span> to your payment problems</h2>

              </div>
              <ul class="design_block">
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Eliminate manual errors and operational errors.
                  </h4>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Eliminate time consumed to create an excel and input all data.</h4>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Avoid net and mobile banking that costs time and money.</h4>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- UI Image -->
            <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
              <div class="left_img">
                <img class="moving_position_animatin" src="<?= base_url() ?>assets/images/payout-gif1.gif" alt="image">
              </div>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- ModernUI-Section-end -->

    <!-- About-App-Section-Start -->
    <section class="row_am about_app_section about_page_sectino">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">
            <!-- about images -->
            <div class="abt_img" data-aos="fade-in" data-aos-duration="1500">
              <img src="<?= base_url() ?>assets/images/Payouts.png" alt="image">
            </div>
          </div>
          <div class="col-lg-6">
            <!-- about text -->
            <div class="about_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <!-- h2 -->
                <h2> Effortlessly integrate <span><?= $company_name ?></span> dev-friendly APIs
              
              </div>
                <!-- p -->
                <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Rapidly build production ready payments integration
                </p>
                <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Use our Restful APIs and get realtime webhooks
                </p>
                <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Built to handle scale so you can process high volume
                </p>
    
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- About-App-Section-end -->

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
                  <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                    <i class="icon_faq icofont-plus"></i></i>What are the transaction method
                    available in <?= $company_name ?>?</button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <p>As per RBI guidelines, It is mandatory to verify aadhaar and pan card to create a
                    virtual / individual current account.</p>
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