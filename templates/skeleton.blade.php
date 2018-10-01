<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

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
        <link href="<?php echo Theme::base('assets/layouts/layout/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('assets/layouts/layout/css/themes/darkblue.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo Theme::base('assets/layouts/layout/css/custom.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/component.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/custom.css') ?>" rel="stylesheet" type="text/css" />
        
        <!-- custom css for skeleton -->
        <link href="<?php echo Theme::base('css/layouts/layout.css') ?>" rel="stylesheet" type="text/css" />
        
        <!-- END THEME LAYOUT STYLES -->

        <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
        <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        @section('customcss')
            <!-- Custom CSS -->
        @show

    </head>
    <!-- END HEAD -->



    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed
        @section('class.body')
        @show">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        @section('skeleton1')
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            @section('topbar')
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    @section('applogo')
                    <div class="page-logo">
                        <a href="{{URL::site('')}}">
                            @section('applogo.image')
                            <div style="background-image: url('<?php echo Theme::base('assets/layouts/layout/img/logo.png') ?>');" class="logo-default"></div>
                            @show
                        </a>
                        <!-- <div class="caption-logo">
                            <p>Massive Music Entertainment</p>
                        </div> -->
                        @section('sidebar.toogler')
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                        @show
                    </div>
                    @show
                    @section('search-general')
                     <form class="search-form search-form-expanded" action="page_general_search_2.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="<?php echo URL::site('global-search'); ?>" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    @show
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    @section('top-menu')
                        @include('top-menu')
                    @show
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            @show
            
            <div class="clearfix"> </div>
            
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
                                        <a href="{{URL::site('')}}">Home</a>
                                        <i class="fa fa-circle"></i>
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
                                    <!-- <nav id="contextual">
                                        
                                    </nav> -->
                                @show
                                @section('modal')

                                 <div class="modal fade template" id="modal_template" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <i class="fa fa-spinner fa-spin"></i>
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
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->

            @section('footer')
            <!-- <footer class="page-footer">
            <div class="pull-right hidden-xs"><b>Version</b> 2.0</div>
                Copyright © 2016 <a href="http://www.rajaputramedia.com" target="_blank">raja KOPERASI</a>. All rights reserved
            </footer> -->
            <div class="page-footer">
                 <div class="pull-right hidden-xs"><b>Version</b> 1.0</div>
                Copyright © 2018 <a href="" target="_blank">Dio Alan Kosasih</a>. All rights reserved
            </footer>
            </div>
            @show

            <!-- END FOOTER -->
            </div>
        @show
        
        <!-- BEGIN QUICK NAV -->
        @section('quick.nav')
        
        @show




        <!-- BEGIN CORE PLUGINS -->
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

        
        <!-- PLUGIN GLOBAL -->
        <script src="<?php echo Theme::base('js/select2/js/select2.full.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/select2/js/select2.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/global/scripts/datatable.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/datatables/datatables.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/datatables/plugins/bootstrap/datatables.bootstrap.js') ?>" type="text/javascript"></script>
        

        <script src="<?php echo Theme::base('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/highcharts/highcharts.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/highcharts/modules/exporting.js') ?>" type="text/javascript"></script>
        
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo Theme::base('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        
        
        <!-- PLUGIN THEMES LAYOUT -->
        <script src="<?php echo Theme::base('assets/layouts/layout/scripts/layout.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/layouts/global/scripts/quick-sidebar.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('assets/layouts/global/scripts/quick-nav.min.js') ?>" type="text/javascript"></script>
        
        
        <!-- PLUGIN EXTERNAL -->
        <script src="<?php echo Theme::base('js/vendor_modified/tshirt-popup.js') ?>" type="application/javascript"></script>
        <script src="<?php echo Theme::base('js/metronic/custom.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/custom.js') ?>" type="text/javascript"></script>
        
        
        @include('script-external')
        
        
        <!-- END THEME LAYOUT SCRIPTS -->
        
        
        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
            <!-- Custom JS -->
        @show
    </body>

</html>