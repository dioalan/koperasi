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
    <link href="<?php echo Theme::base('assets/layouts/layout5/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('assets/layouts/layout5/css/themes/default.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo Theme::base('assets/layouts/layout5/css/custom.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/custom.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/component.css') ?>" rel="stylesheet" type="text/css" />

    <!-- custom css for skeleton -->
    <link href="<?php echo Theme::base('css/layouts/layout5.css') ?>" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    @section('customcss')
    <!-- Custom CSS -->
    @show

</head>

    <body class="page-header-fixed page-sidebar-closed-hide-
        @section('class.body')
        @show">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show
        
        <!-- BEGIN CONTAINER -->
        @section('skeleton5')
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            @section('applogo')
                            <a id="index" class="page-logo" href="index.html">
                                <img src="<?php echo Theme::base('assets/layouts/layout5/img/logo.png') ?>" alt="Logo"> </a>
                            @show
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                            @section('search-general')
                            <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit md-skip">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                            @show
                            @section('topbar')
                                @include('layout5/top-menu')
                            @show
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        @section('hor-menu')
                            @include('layout5/horizontal-menu')
                        @show
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            @section('container')
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Admin Dashboard 2</h1>
                        @section('page.breadcumb')
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            @section('page.breadcumb.section')
                            <li class="active">Dashboard</li>
                            @show
                        </ol>
                        @show
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN PAGE BASE CONTENT -->
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
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
            @show
        </div>
        @show
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        @section('quick-sidebar')
            @include('quick-sidebar')
        @show
        <!-- END QUICK SIDEBAR -->
        <!-- BEGIN QUICK NAV -->
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
        @show
        <div class="quick-nav-overlay"></div>
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
        <script src="<?php echo Theme::base('assets/layouts/layout5/scripts/layout.min.js') ?>" type="text/javascript"></script>
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