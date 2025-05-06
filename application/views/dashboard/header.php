<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/images/'); ?>favicon.ico">
    <title>Techinal Test Pako Group</title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/skin_color.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--single {
            height: 38px;
            padding: 12px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            font-size: 1rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 24px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            right: 10px;
        }
    </style>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="<?= base_url('assets/images/'); ?>logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="<?= base_url('assets/images/'); ?>logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                </div>
                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">Menu</li>
                            <li class="">
                                <a href="<?= base_url('transaksi'); ?>">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Transaksi</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('barang'); ?>">
                                    <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Barang</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('akses'); ?>">
                                    <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Manajemen Akses</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>