<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest blog post</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/icofont.min.css">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aos.css">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
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
    <header>
      <!-- container start -->
      <div class="container">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="image">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="https://mybankpe.com/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#how_to_start">How to start</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">About-Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link dark_btn" href="<?php echo base_url() ?>login">GET STARTED</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- navigation end -->
      </div>
      <!-- container end -->
    </header>


    <!-- BredCrumb-Section -->
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
          <h1>Latest blog post</h1>
          <div class="search_bar">
            <form action="<?php echo base_url() ?>blogs/search_result" onsubmit="return TRUE;">
              <div class="form-group">
                <input id="searchbar" onkeyup="search_blog()" type="text" name="search" placeholder="Search blog..."
                  class="form-control">
                <button class="btn" type="submit"><i class="icofont-search-1"></i></button>
              </div>
            </form>
          </div>
        </div>

        <!-- Container for blog search results -->
        <div id="blog_results">
          <!-- Blog posts will be dynamically inserted here -->
        </div>


      </div>
    </div>


    <!-- Blog-Detail-Section-Start -->
    <section class="row_am blog_list_main">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6" data-aos="fade-in" data-aos-duration="1500">
            <div class="blog_img">
              <img src="<?php echo base_url() ?>assets/images/blogs/<?= $l_data->img_file ?>" alt="image">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="blog_text">
              <span>EDITOR CHOICE</span>
              <div class="section_title">
                <h2><?= $l_data->blog_name ?></h2>
                <p><?= $l_data->blog_dsc ?></p>
                <a href="blog-single.html">READ MORE....</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Blog-Detail-Section-end -->

    <!-- Story-Section-Start -->
    <section class="row_am latest_story blog_list_story" id="blog">

      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- story -->
          <?php if (!empty($data)): ?>
            <?php foreach ($data as $value): ?>
              <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                  <div class="story_img">
                    <img src="<?php echo base_url() ?>assets/images/blogs/<?= $value->img_file ?>" alt="image">
                    <span><?= $value->timestamp ?></span>
                  </div>
                  <div class="story_text">
                    <h3 class="blog_name"><?= $value->blog_name ?></h3>
                    <p><?= $value->blog_dsc ?></p>
                    <a href="<?= $value->blog_link ?>">READ MORE</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>No data found.</p>
          <?php endif; ?>



        </div>
        <!-- row end -->

      </div>
      <!-- container end -->
    </section>
    <!-- Story-Section-end -->



    <!-- Footer-Section start -->
    <footer>
      <div class="top_footer has_bg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <!-- footer link 1 -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="abt_side">
                <div class="logo"> <img src="<?php echo base_url() ?>assets/images/footer_logo.png" alt="image"></div>
                <ul>
                  <li><a href="#">support@example.com</a></li>
                  <li><a href="#">+1-900-123 4567</a></li>
                </ul>
                <ul class="social_media">
                  <li><a href="#"><i class="icofont-facebook"></i></a></li>
                  <li><a href="#"><i class="icofont-twitter"></i></a></li>
                  <li><a href="#"><i class="icofont-instagram"></i></a></li>
                  <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 2 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>Useful Links</h3>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 3 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>Help & Suport</h3>
                <ul>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">How it works</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 4 -->
            <div class="col-lg-2 col-md-6 col-12">
              <div class="try_out">
                <h3>Let’s Try Out</h3>
                <ul class="app_btn">
                  <li>
                    <a href="#">
                      <img src="<?php echo base_url() ?>assets/images/appstore_blue.png" alt="image">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="<?php echo base_url() ?>assets/images/googleplay_blue.png" alt="image">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- last footer -->
      <div class="bottom_footer">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-md-6">
              <p>© Copyrights 2022. All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <p class="developer_text">Design & developed by <a href="https://themeforest.net/user/kalanidhithemes"
                  target="blank">Kalanidhi Themes</a></p>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- go top button -->
      <div class="go_top">
        <span><img src="<?php echo base_url() ?>assets/images/go_top.png" alt="image"></span>
      </div>
    </footer>
    <!-- Footer-Section end -->


  </div>
  <!-- Page-wrapper-End -->

  <!-- search engine js -->
  <script>
    function search_blog() {
      let query = document.getElementById("searchbar").value;
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "AdminController/blogs_search", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          document.getElementById("blog_results").innerHTML = xhr.responseText;
        }
      };
      xhr.send("search=" + encodeURIComponent(query));
    }

  </script>
  <!-- Jquery-js-Link -->
  <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
  <!-- owl-js-Link -->
  <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
  <!-- bootstrap-js-Link -->
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- aos-js-Link -->
  <script src="<?php echo base_url() ?>assets/js/aos.js"></script>
  <!-- main-js-Link -->
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>