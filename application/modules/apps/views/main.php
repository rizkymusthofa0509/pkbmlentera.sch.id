
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>temp/admin/assets/images/favicon.ico">

    <!-- jvectormap -->
    <link href="<?= base_url() ?>temp/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

     <link href="<?= base_url() ?>temp/admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
     <link href="<?= base_url() ?>temp/admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
     <link href="<?= base_url() ?>temp/admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
     <link href="<?= base_url() ?>temp/admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link href="<?= base_url() ?>temp/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>temp/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>temp/admin/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="main-content">

            <header id="page-topbar">
                <div class="navbar-header">
                    <!-- LOGO -->
                    <div class="navbar-brand-box d-flex align-items-left">
                        <a href="<?= base_url() ?>" class="logo">
                            <img src="<?= base_url() ?>assets/images/<?= webinfo('logo') ?>" width="150%"/>
                        </a>

                        <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>
    
                    <div class="d-flex align-items-center">

                         
    
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect waves-light" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                                
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                        <div class="dropdown d-inline-block">
                             
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url() ?>temp/admin/assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url() ?>temp/admin/assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url() ?>temp/admin/assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url() ?>temp/admin/assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>
    
                       
    
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect waves-light"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url() ?>temp/admin/assets/images/users/avatar-3.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?= session('fullname') ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right"> 
                                 
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= base_url() ?>auth/logout">
                                    <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </header>

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                        
                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <?php $this->load->view('menu');  ?>
                        </div>
                    </nav>
                </div>
            </div>                

            <div class="page-content">
                <div class="container-fluid">
                   <!-- start page title -->
                   <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18"><?= $modul ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <?php
                                        foreach ($link as $l => $value) {
                                            echo '<li class="breadcrumb-item">'.$l.'</li>';
                                        }
                                    ?> 
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
               <?php $this->load->view($pages) ?>
 
                     
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center text-lg-left">
                                2020 © Muri Digital.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right d-none d-lg-block">
                                <a href="https://muridigital.com">Muri Digital</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- jQuery  -->
    <script src="<?= base_url() ?>temp/admin/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/assets/js/waves.js"></script>
    <script src="<?= base_url() ?>temp/admin/assets/js/simplebar.min.js"></script>

     <!-- Sparkline Js-->
     <script src="<?= base_url() ?>temp/admin/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Morris Js-->
    <script src="<?= base_url() ?>temp/admin/plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url() ?>temp/admin/plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="<?= base_url() ?>temp/admin/assets/pages/dashboard-demo.js"></script>

     <!-- third party js -->
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="<?= base_url() ?>temp/admin/assets/pages/datatables-demo.js"></script>
   
    <!--Vactor map-->
    <script src="<?= base_url() ?>temp/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url() ?>temp/admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?= base_url() ?>temp/admin/assets/pages/vectormap-demo.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>temp/admin/assets/js/theme.js"></script>

</body>

</html>