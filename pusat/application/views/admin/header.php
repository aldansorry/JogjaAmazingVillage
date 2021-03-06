<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pusat - Dinas Pariwisata DIY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/') ?>assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url('assets/') ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

    
    <!-- jquery latest version -->
    <script src="<?php echo base_url('assets/') ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?php echo base_url('assets/') ?>assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="<?php echo base_url('admin/Users') ?>"><i class="ti-map-alt"></i> <span>Users</span></a></li>
                            <li><a href="<?php echo base_url("admin/Desawisata") ?>"><i class="ti-map-alt"></i> <span>Desa Wisata</span></a></li>
                            <li><a href="<?php echo base_url("admin/Review") ?>"><i class="ti-map-alt"></i> <span>Review</span></a></li>
                            <li><a href="<?php echo base_url("admin/Statistik") ?>"><i class="ti-map-alt"></i> <span>Statistik Pengunjung</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

                <div class="main-content">
                  <div class="header-area">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-8 clearfix">
                                <div class="nav-btn pull-left">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="search-box pull-left">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Search..." required>
                                        <i class="ti-search"></i>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 clearfix">
                                <ul class="notification-area pull-right">
                                    <li id="full-view"><i class="ti-fullscreen"></i></li>
                                    <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                    <li class="dropdown">
                                        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                            <span>2</span>
                                        </i>
                                        <div class="dropdown-menu bell-notify-box notify-box">
                                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                            <div class="nofity-list">
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                    <div class="notify-text">
                                                        <p>You have Changed Your Password</p>
                                                        <span>Just Now</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                    <div class="notify-text">
                                                        <p>New Commetns On Post</p>
                                                        <span>30 Seconds ago</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                    <div class="notify-text">
                                                        <p>Some special like you</p>
                                                        <span>Just Now</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                    <div class="notify-text">
                                                        <p>New Commetns On Post</p>
                                                        <span>30 Seconds ago</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                    <div class="notify-text">
                                                        <p>Some special like you</p>
                                                        <span>Just Now</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                    <div class="notify-text">
                                                        <p>You have Changed Your Password</p>
                                                        <span>Just Now</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                    <div class="notify-text">
                                                        <p>You have Changed Your Password</p>
                                                        <span>Just Now</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                        <div class="dropdown-menu notify-box nt-enveloper-box">
                                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                            <div class="nofity-list">
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img1.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">Hey I am waiting for you...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img2.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">When you can connect with me...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img3.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">I missed you so much...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img4.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">Your product is completely Ready...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img2.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">Hey I am waiting for you...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img1.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">Hey I am waiting for you...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="notify-item">
                                                    <div class="notify-thumb">
                                                        <img src="<?php echo base_url('assets/') ?>assets/images/author/author-img3.jpg" alt="image">
                                                    </div>
                                                    <div class="notify-text">
                                                        <p>Aglae Mayer</p>
                                                        <span class="msg">Hey I am waiting for you...</span>
                                                        <span>3:15 PM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="settings-btn">
                                        <i class="ti-settings"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left"><?php echo $this->uri->segment(2) ?></h4>
                <ul class="breadcrumbs pull-left">
                  
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="<?php echo base_url('assets/') ?>assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('logged_in')['nama'] ?> <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
