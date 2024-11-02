<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Comming Soon</title>
  <meta name="description" content>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
    rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/signatra-font.css">
  <link rel="icon" type="<?php echo base_url() ?>assets/images/favicon.svg" href="#">

  <link rel="apple-touch-icon" href="apple-touch-icon.html">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/iconfont.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/rev-settings.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins.css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css" />
  <style>
    body {
      font-family: "Courier New", Courier, monospace;
    }

    .card {
    background-color: #fff; /* Card background color */
    border: 1px solid #e0e0e0; /* Light border for definition */
    border-radius: 0.5rem; /* Rounded corners */
    overflow: hidden; /* Ensures children don't overflow */
}

.radius {
    border-radius: 0.5rem; /* Same as above for clarity */
}

.box-shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
}

.xs-mb-3 {
    margin-bottom: 1rem; /* Adjust this value for spacing between cards */
}

/* Optional: Add hover effect */
.card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Slightly larger shadow on hover */
    transition: box-shadow 0.2s ease; /* Smooth transition effect */
}

/* Additional styles for responsiveness */
.img-fluid {
    max-width: 100%; /* Ensures the image scales correctly */
    height: auto; /* Maintains aspect ratio */
}

.btn-primary {
    background-color: #007bff; /* Bootstrap primary color */
    border-color: #007bff; /* Bootstrap primary border color */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker blue on hover */
}


  </style>
</head>

<body>
  <section class="xs-section-padding portfolio-blog-area" id="portfolio-blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="agency-section-title style7 text-center">
            <h2 class="sub-title">LEAVE A MASSAGE</h2>
            <h3 class="main-title">The Page Is Under</h3>
            <div class="shuffle-letter-title-wraper">
              <h4 class="shuufle-letter-title">CONSTRUCTION</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card radius box-shadow xs-mb-3">
  <div class="row no-gutters">
    <div class="col-lg-6">
      <a href="blog-single-sidebar.html" class="entry-thumb">
        <img src="<?php echo base_url() ?>assets/images/construction_img.gif" alt="Construction Image" class="img-fluid">
      </a>
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-between">
      
      <div class="text-center p-3">
        <div class="post-body">
          <div class="entry-header">
            <span><strong>Day : Hour : Min : Sec</strong></span>
            <div class="post-meta-list meta-style2">
              <strong><span class="countdown"><i class="icon icon-calendar"></i> 00 : 00 : 00 : 00</span></strong>
            </div>
            <h4 class="entry-title"><b>Hi !!</b><br> Page Coming Soon..</h4>
          </div>
          <div class="post-footer">
            <p class="Courier New">Please be patient while we finish the last tests and stay in touch with our 
              <a href="#" target="_self" class="twitter_link"><strong>Twitter</strong></a> or 
              <a href="#" target="_self" class="facebook_link"><strong>Facebook</strong></a> profiles.
            </p>
          </div>
        </div>
      </div>
      <div class="p-3">
        <h5 class="widget-title">Notify Me :</h5>
        <form action="<?php echo base_url('AdminController/submit'); ?>" class="newsletter-form subscribe-form" method="POST">
          <input type="email" name="email" id="sub-input-one" placeholder="Your WhatsApp Number" class="form-control mb-2">
          <button type="submit" class="send-button btn btn-primary"><i class="icon icon-paper-plane"></i>Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>


    </div>
  </section>
  <script>
    // Setup End Date for Countdown (getTime == Time in Milleseconds)
    let launchDate = new Date("dec 1, 2024 12:00:00").getTime();

    // Setup Timer to tick every 1 second
    let timer = setInterval(tick, 1000);

    function tick() {
      // Get current time
      let now = new Date().getTime();
      // Get the difference in time to get time left until reaches 0
      let t = launchDate - now;

      // Check if time is above 0
      if (t > 0) {
        // Setup Days, hours, seconds and minutes
        // Algorithm to calculate days...
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        // prefix any number below 10 with a "0" E.g. 1 = 01
        if (days < 10) { days = "0" + days; }

        // Algorithm to calculate hours
        let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        if (hours < 10) { hours = "0" + hours; }

        // Algorithm to calculate minutes
        let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        if (mins < 10) { mins = "0" + mins; }

        // Algorithm to calc seconds
        let secs = Math.floor((t % (1000 * 60)) / 1000);
        if (secs < 10) { secs = "0" + secs; }

        // Create Time String
        let time = `${days} : ${hours} : ${mins} : ${secs}`;

        // Set time on document
        document.querySelector('.countdown').innerText = time;
      }
    }
  </script>
  



    <?php $this->load->view("panel_base/sections/scripts.php"); ?>
</body>

</html>