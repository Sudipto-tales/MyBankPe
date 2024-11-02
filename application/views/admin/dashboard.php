<?php
$c_name = "MyBankPe";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ContactUs View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php if ($this->session->flashdata('success')): ?>
                    < div class="alert alert-success" role = "alert" >
                        <i class="ri-check-line me-2"></i>Photo Upload < strong > Successfully!!</strong > alert - check it out!
                                </div >
                <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                    < div class="alert alert-danger" role = "alert" >
                        <i class="ri-close-circle-line me-2"></i>Failed to Upload < strong > Photo</strong > alert - check it out!
                                </div >

                <?php endif; ?>
        });
    </script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.svg" type="image/x-icon">

    <!-- Theme Config Js -->
    <script src="<?php echo base_url() ?>raw/assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="<?php echo base_url() ?>raw/assets/css/app-saas.min.css" rel="stylesheet" type="text/css"
        id="app-style" />

    <!-- Icons css -->
    <link href="<?php echo base_url() ?>raw/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- End Preloader-->

    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php $this->load->view('panel_base\sections\topbar.php') ?>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php $this->load->view('panel_base\sections\sidebar.php') ?>
        <!-- ========== Left Sidebar End ========== -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Starter</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © <?= $c_name ?>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->




    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    <!-- Theme Settings -->

    <?php $this->load->view('panel_base\sections\theme.php') ?>

    <!-- script -->
    <!-- Vendor js -->
    <script src="<?php echo base_url() ?>raw/assets/js/vendor.min.js"></script>

    <!-- Code Highlight js -->
    <script src="<?php echo base_url() ?>raw/assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="<?php echo base_url() ?>raw/assets/vendor/clipboard/clipboard.min.js"></script>
    <script src="<?php echo base_url() ?>raw/assets/js/hyper-syntax.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url() ?>raw/assets/js/app.min.js"></script>

</body>

</html>