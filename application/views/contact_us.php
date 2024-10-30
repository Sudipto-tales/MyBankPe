<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyBankPe: Contact Us</title>

  <?php $this->load->view("panel_base/sections/css.php") ?>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

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


    <!-- BredCrumb-Section -->
    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="<?php echo base_url() ?>assets/images/banner-shape1.png" alt="image" > </span>
        <span class="banner_shape2"> <img src="<?php echo base_url() ?>assets/images/banner-shape2.png" alt="image" > </span>
        <span class="banner_shape3"> <img src="<?php echo base_url() ?>assets/images/banner-shape3.png" alt="image" > </span>
        
        <div class="bred_text">
          <h1>Contact us</h1>
          <p>If you have an query, please get in touch with us, we will revert back quickly.</p>
          <ul>
            <li><a href="<?php echo base_url() ?>">Home</a></li>
            <li><span>»</span></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>  
    

    <!-- Contact Us Section Start -->
    <section class="contact_page_section">
      <div class="container">
          <div class="contact_inner">
              <div class="contact_form">
                <div class="section_title">
                    <h2>Leave a <span>message</span></h2>
                    <p>Fill up form below, our team will get back soon</p>
                </div>
                  <form action="<?php echo base_url('ContactUsController/submit'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="p_name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email"  name="p_email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="comp_name" placeholder="Company Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="adress" placeholder="Company Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ph_no" placeholder="Phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="website" placeholder="Website" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="msg" placeholder="Your message"></textarea>
                    </div>
                    <div class="form-group term_check">
                      <input type="checkbox" id="term">
                      <label for="term">I agree to receive emails, newsletters and promotional messages</label>
                    </div>
                    <div class="form-group mb-0">
                      <button type="submit" class="btn puprple_btn" value="submit">SEND MESSAGE</button>
                    </div>
                  </form>
              </div>
              <div class="contact_info">
                  <div class="icon"><img src="<?php echo base_url() ?>assets/images/contact_message_icon.png" alt="image"></div>
                  <div class="section_title">
                    <h2>Have any <span>question?</span></h2>
                    <p>If you have any question about our product, service, payment or company, Visit our <a href="faq.html">FAQs page.</a></p>
                  </div>
                  <a href="faq.html" class="btn puprple_btn">READ FAQ</a>
                  <ul class="contact_info_list">
                    <li>
                      <div class="img">
                        <img src="<?php echo base_url() ?>assets/images/mail_icon.png" alt="image">
                      </div>
                      <div class="text">
                        <span>Email Us</span>
                        <a href="mailto:example@gmail.com">Support@mybankpe.com</a>
                      </div>
                    </li>
                    <li>
                      <div class="img">
                        <img src="<?php echo base_url() ?>assets/images/call_icon.png" alt="image">
                      </div>
                      <div class="text">
                        <span>Call Us</span>
                        <a href="tel:+1(888)553-46-11">+91 9999431395</a>
                      </div>
                    </li>
                    <li>
                      <div class="img">
                        <img src="<?php echo base_url() ?>assets/images/location_icon.png" alt="image">
                      </div>
                      <div class="text">
                        <span>Visit Us</span>
                        <p>Office No: 103, 791/N, Vivek Nagar, Tulshiram, Bichhiya, Gorakhpur, Uttar Pradesh -
                        273014</p>
                      </div>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
    </section>
    <!-- Contact Us Section End -->




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