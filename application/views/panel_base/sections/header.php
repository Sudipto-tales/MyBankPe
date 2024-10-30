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
                        <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>features">Features</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="#">Services</a>
                        <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="<?php echo base_url() ?>services/payout">Payout</a></li>
                                <li><a href="<?php echo base_url() ?>services/payment_getway">Paymnet Gateway</a></li>
                                <li><a href="<?php echo base_url() ?>services/current_account">Current Account</a></li>
                                <li><a href="<?php echo base_url() ?>comming_soon">Verification Stack</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="#">Developers</a>
                        <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="<?php echo base_url() ?>comming_soon">Documentation</a></li>
                                <li><a href="<?php echo base_url() ?>comming_soon">API</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>comming_soon">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>contact_us">Contact</a>
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