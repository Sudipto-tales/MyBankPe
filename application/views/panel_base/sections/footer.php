<section class="newsletter_section">
    <!-- container start -->
    <div class="container">
        <div class="newsletter_box">
            <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                <!-- h2 -->
                <h2>Subscribe newsletter</h2>
                <!-- p -->
                <p>Be the first to recieve all latest post in your inbox</p>
            </div>
            <form action="<?php echo base_url('AdminController/submit'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" value="submit">SUBMIT</button>
                </div>
            </form>


        </div>
    </div>
    <!-- container end -->
</section>
<!-- News-Letter-Section-end -->

<footer>
    <!-- section bg -->

    <div class="top_footer" id="contact">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <!-- footer link 1 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="abt_side">
                        <div class="logo"> <img src="<?php echo base_url() ?>assets/images/logo (1).png" alt="image">
                        </div>
                        <ul>
                            <li>
                                <p>Office No: 103, 791/N, Vivek Nagar, Tulshiram, Bichhiya, Gorakhpur, Uttar Pradesh -
                                    273014</p>
                            </li>
                            <li><a href="#">Support@mybankpe.com</a>
                            </li>
                            <li><a href="#">+91 9999431395</a>
                            </li>
                        </ul>
                        <ul class="social_media">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- footer link 2 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="links">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><a href="<?php echo base_url() ?>features">Features</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="<?php echo base_url() ?>contact_us">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- footer link 3 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="links">
                        <h3>Help & Suport</h3>
                        <ul>
                            <li><a href="#faq">FAQs</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#how_to_start">How to start</a></li>
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
                    <p>© Copyrights
                        <script>document.write(new Date().getFULLYEAR())</script>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="developer_text">Made in India to empower MSMEs</p>
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