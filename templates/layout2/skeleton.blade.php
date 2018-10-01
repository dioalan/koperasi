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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
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
        <link href="<?php echo Theme::base('assets/layouts/layout2/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('assets/layouts/layout2/css/themes/blue.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo Theme::base('assets/layouts/layout2/css/custom.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/component.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/custom.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/layouts/layout2.css') ?>" rel="stylesheet" type="text/css" />
        
        <!-- END THEME LAYOUT STYLES -->

        <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
        <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        @section('customcss')
            <!-- Custom CSS -->
        @show

        </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        <!-- BEGIN HEADER -->
        @section('skeleton2')
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    @section('applogo')
                    <div class="page-logo">
                        <a href="index.html">
                            @section('applogo.image')
                            <img src="<?php echo Theme::base('assets/layouts/layout2/img/logo-default.png') ?>" alt="logo" class="logo-default" /> </a>
                            @show
                        @section('sidebar.toogler')
                        <div class="menu-toggler sidebar-toggler">
                            <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                        </div>
                        @show
                    </div>
                    @show
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN PAGE TOP -->
                    <div class="page-top">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                        @section('search-general')
                        <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." name="query">
                                <span class="input-group-btn">
                                    <a href="javascript:;" class="btn submit">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </span>
                            </div>
                        </form>
                        @show
                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        @section('top-menu')
                            @include('top-menu')
                        @show
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                    <!-- END PAGE TOP -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            @section('container')
            <div class="page-container
                @section('has-sidebar')
                    has-sidebar
                @show">
                <!-- BEGIN SIDEBAR -->
                @section('sidebar')
                <div class="page-sidebar-wrapper">
                    
                    <div class="page-sidebar navbar-collapse collapse">
                        @section('sidebar.field')
                         @include('side-menu')
                        @show
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                @show
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        @section('page.breadcumb')
                            <div class="page-bar">
                                <ul class="page-breadcrumb">
                                    <li>
                                        <i class="icon-home"></i>
                                        <a href="{{URL::site('')}}">Home</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    @section('page.breadcumb.section')
                                    <li>
                                        <span>Dashboard</span>
                                    </li>
                                    @show
                                </ul>
                            </div>
                        @show
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
                    </div>
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
            @show
            
            @section('footer')
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
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
        @show
        
        <script src="<?php echo Theme::base('vendor/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/js.cookie.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/jquery-inputmask/jquery.inputmask.bundle.min.js') ?>" type="text/javascript"></script>
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
        <script src="<?php echo Theme::base('assets/layouts/layout2/scripts/layout.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/layouts/global/scripts/quick-sidebar.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/layouts/global/scripts/quick-nav.min.js') ?>" type="text/javascript"></script>
        
        
        <!-- PLUGIN EXTERNAL -->
        <script src="<?php echo Theme::base('vendor/jquery.slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/vendor_modified/tshirt-popup.js') ?>" type="application/javascript"></script>
        <script src="<?php echo Theme::base('js/custom.js') ?>" type="text/javascript"></script>
        
        @include('script-external')
        <!-- END THEME LAYOUT SCRIPTS -->
        
        
        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
            <!-- Custom JS -->
        @show
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>
    </body>

</html>