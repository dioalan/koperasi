<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        @section('title')
        {{ f('pagetitle', 'Dashboard') }}
        @show
        - Bono Metronic
    </title>
    <meta name="description" content="{{ f('pagetitle', 'Great App') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- GLOBAL MANDATORY -->
    <link href="<?php echo Theme::base('lato/css/lato-webfont.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('vendor/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('vendor/bootstrap-switch/dist/css/bootstrap2/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- PLUGIN GLOBAL -->
    <link href="<?php echo Theme::base('js/select2/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/select2/css/select2-bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/datatables/datatables.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/datatables/plugins/bootstrap/datatables.bootstrap.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/fullcalendar/fullcalendar.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo Theme::base('assets/global/css/plugins.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('js/bootstrap-fileinput/bootstrap-fileinput.css') ?>" rel="stylesheet" type="text/css" />

    <!-- PLUGIN EXTERNAL -->
    <link href="<?php echo Theme::base('vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Theme::base('vendor/tshirt-popup/tshirt-popup.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Theme::base('vendor/jacket-awesome/dist/css/jacket-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Theme::base('vendor/animate-css/animate.min.css') ?>" rel="stylesheet" type="text/css"/>


    <!-- THEMES LAYOUT -->
    <link href="<?php echo Theme::base('assets/layouts/layout3/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('assets/layouts/layout3/css/themes/default.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo Theme::base('assets/layouts/layout3/css/custom.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/component.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/custom.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/layouts/layout3.css') ?>" rel="stylesheet" type="text/css" />

    <!-- END THEME LAYOUT STYLES -->

    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    @section('customcss')
    <!-- Custom CSS -->
    @show

</head>

    <body class="page-container-bg-solid">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        @section('skeleton3')
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        @section('topbar')
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                @section('applogo')
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="<?php echo Theme::base('assets/layouts/layout3/img/logo-default.jpg') ?>" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                @show
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                @section('top-menu')
                                    @include('top-menu')
                                @show
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        @show
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                @section('search-general')
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                @show
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    @section('horizontal-menu')
                                        @include('layout3/horizontal-menu')
                                    @show
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Dashboard
                                            <small>dashboard & statistics</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                @section('container')
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    @section('page.breadcumb')
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        @section('page.breadcumb.section')
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                        @show
                                    </ul>
                                    @show
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    @section('page')
                                    <main class="content @section('main.classes')
                                    has-contextual
                                    @show">

                                        @section('content')
                                        <div class="wrapper">
                                            @section('fields')
                                            &nbsp;
                                            @show
                                        </div>
                                        @show

                                        @section('contextual')
                                        <nav id="contextual">
                                            @section('contextual.content')
                                            &nbsp;
                                            @show
                                        </nav>
                                        @show
                                        @section('modal')

                                        <div class="modal fade template" id="modal_template" role="basic" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="../www/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                                                        <span> &nbsp;&nbsp;Loading... </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @show
                                    </main>
                                    @show
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                                @show
                            </div>

                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        @section('quick-sidebar')
                            @include('quick-sidebar')
                        @show
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: 800 123 3456
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Metronic Theme By
                            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        @show

        @section('quick.nav')
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        <div class="quick-nav-overlay"></div>
        @show

        <script src="<?php echo Theme::base('vendor/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/js.cookie.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/jquery-inputmask/jquery.inputmask.bundle.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/jquery.slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/jquery.blockui.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo Theme::base('js/moment.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/fullcalendar/fullcalendar.min.js') ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo Theme::base('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- PLUGIN GLOBAL -->
        <script src="<?php echo Theme::base('js/select2/js/select2.full.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/select2/js/select2.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/global/scripts/datatable.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/datatables/datatables.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/datatables/plugins/bootstrap/datatables.bootstrap.js') ?>" type="text/javascript"></script>

        <script src="<?php echo Theme::base('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/highcharts/highcharts.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/highcharts/modules/exporting.js') ?>" type="text/javascript"></script>

        <!-- PLUGIN THEMES LAYOUT -->
        <script src="<?php echo Theme::base('assets/layouts/layout3/scripts/layout.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/layouts/global/scripts/quick-sidebar.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/layouts/global/scripts/quick-nav.min.js') ?>" type="text/javascript"></script>

        <!-- PLUGIN EXTERNAL -->
        <script src="<?php echo Theme::base('js/vendor_modified/tshirt-popup.js') ?>" type="application/javascript"></script>
        <script src="<?php echo Theme::base('js/custom.js') ?>" type="text/javascript"></script>

        @include('script-external')
        <!-- END THEME LAYOUT SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
        <!-- Custom JS -->
        @show
    </body>

</html>