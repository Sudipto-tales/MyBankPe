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
    <?php $this->load->view("panel_base/sections/footer.php") ?>
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