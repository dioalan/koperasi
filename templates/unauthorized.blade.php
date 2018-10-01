<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | User Lock Screen 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo Theme::base('lato/css/lato-webfont.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('js/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('js/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('vendor/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('vendor/bootstrap-switch/dist/css/bootstrap2/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo Theme::base('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo Theme::base('assets/global/css/plugins.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo Theme::base('assets/pages/css/lock.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/custom.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    @section('lock')
    <body class="unauthorized" style="background: url(../www/assets/pages/img/arsitect.jpg)!important ">

        <notification class="notification-alert">
                {{ f('notification.show') }}
        </notification>
        <div class="page-lock" style="" >
            <div class="page-logo" style=" " >
                <tr>
                    <td style=" opacity: 0.2; " >
                        <a href="<?php echo URL::site() ?>" >
                            <img style="width: 150px" src="<?php echo Theme::base('assets/pages/img/koperasi-indonesia-logo-B13961A198-seeklogo.com.png') ?>" alt="" />
                        </a>
                    </td>
                </tr>
               <!-- <tr>
                    <td>
                    <a href="<?php echo URL::site() ?>">
                        <img src="<?php echo Theme::base('assets/pages/img/sagara-logo.jpg') ?>" alt="" />
                    </a>
                    </td>
                </tr>  -->
            </div>
            <div class="page-body" style="opacity: 0.8; " >
                <div class="lock-head"> Unauthorized </div>
                <div class="lock-body">
                    <div class="lock-cont">
                        <div class="lock-item lock-item-full">
                            <h4>
                                You are not authorized to access this page, maybe you should login first to access it
                            </h4>
                            <div class="form-actions">
                                <a href="{{ URL::site('login') }}" class="btn btn-block red uppercase">Login</a>
                            </div>
                            <h4> or you can go <a href="javascript:history.back()" class="button">Back</a> to previous page.</h4>
                        </div>
                    </div>
                </div>
                <div class="lock-bottom">
                    &nbsp;
                </div>
            </div>
            <!-- <div class="page-footer-custom"> 2017 @ Massive Music </div> -->
        </div>
        
    </body>
    @show
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo Theme::base('vendor/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/js.cookie.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/jquery.slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/jquery.blockui.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/notification.js') ?>" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo Theme::base('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo Theme::base('assets/pages/scripts/lock.min.js') ?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function()
        {
            $('#clickmewow').click(function()
            {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>

</html>