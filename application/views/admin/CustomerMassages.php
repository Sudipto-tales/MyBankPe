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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $c_name ?></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                                        <li class="breadcrumb-item active">Contact Us</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Contact Us</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">

                                        <div class="col-sm-7">
                                            <div class="text-sm-end">
                                                <button type="button" class="btn btn-success mb-2 me-1"><i
                                                        class="mdi mdi-cog"></i></button>
                                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                <button type="button" class="btn btn-light mb-2">Export</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                                            id="products-datatable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck1">
                                                            <label class="form-check-label"
                                                                for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Company Name</th>
                                                    <th>adress</th>
                                                    <th>website</th>
                                                    <th>Massage</th>
                                                    <th style="width: 75px;">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($data as $value): ?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheck2">
                                                                <label class="form-check-label"
                                                                    for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <a class="text-body fw-semibold"><?= $value['p_name'] ?></a>
                                                        </td>
                                                        <td><?= $value['ph_no'] ?>
                                                        </td>
                                                        <td><?= $value['p_email'] ?>
                                                        </td>
                                                        <td><?= $value['comp_name'] ?>
                                                        </td>
                                                        <td><?= $value['adress'] ?>
                                                        </td>
                                                        <td><?= $value['website'] ?>
                                                        </td>
                                                        <td><!-- Massage Body-->
                                                            <i class="mdi mdi-eye"
                                                                data-bs-toggle="modal" data-bs-target="#standard-modal"></i>
                                                            <div id="standard-modal" class="modal fade" tabindex="-1"
                                                                role="dialog" aria-labelledby="standard-modalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <?= $value['msg'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                        <a href="<?= base_url('contact_us/remove/' . $value['p_id']); ?>" onclick="return confirm('Are you sure you want to delete this contact?');" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

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