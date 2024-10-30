<?php
$c_name = "MyBankPe";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MyBankPe</title>
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
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                <div class="bouncing-loader"><div ></div><div ></div><div ></div></div>
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
                                            <li class="breadcrumb-item"><a href="<?=base_url()?>"><?= $c_name ?></a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Blog Upload</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Blog Upload Form</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                        <form>
                                                        <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Blog Name</label>
                                                                <input type="text" name="blog_name" id="blog_name" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Uploaded By</label>
                                                                <input type="text" name="uploaded_by" id="uploaded_by" class="form-control">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Blog Summary</label>
                                                                <textarea class="form-control" name="blog_summary" id="blog_summary" rows="2"></textarea>
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Blog Write Pad</label>
                                                                <textarea class="form-control" name="blog" id="blog" rows="15"></textarea>
                                                            </div>
        
                                                          
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Tags</label>
                                                                <input type="text" name="tags" id="tags" class="form-control">
                                                            </div>
                                                        </form>
        
                                                </div>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->


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