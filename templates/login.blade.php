<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
            @section('pagetitle')
                {{ f('page.title', 'Login') }}
            @show
            - Bono
            
        </title>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo Theme::base('js/select2/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('js/select2/css/select2-bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo Theme::base('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo Theme::base('assets/global/css/plugins.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo Theme::base('assets/pages/css/login-2.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/custom.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    @section('login')
    <body class="login" style="background-color: #FFF !important ">
        <!-- BEGIN LOGO -->

        <notification class="notification-alert">
                {{ f('notification.show') }}
        </notification>
            <!-- <table style="  border="1"> -->
        <div class="logo" >
                <tr>
                    <td>
                        <a href="<?php echo URL::site() ?>" >
                            <img src="<?php echo Theme::base('assets/pages/img/kopkar.jpg') ?>" alt="" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href="<?php echo URL::site() ?>">
                        <img src="<?php echo Theme::base('assets/pages/img/sagara-logo.jpg') ?>" alt="" />
                    </a>
                    </td>
                </tr>
        </div>
            </table>
       
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="margin-top: 10px">
            <!-- BEGIN LOGIN FORM -->
            @section('form.login')
            <form class="login-form" action="" method="post">
                <div class="form-title">
                    <span class="form-title">Welcome.</span>
                    <span class="form-subtitle">Please login.</span>
                </div>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" value="<?php echo @$entry['username'] ?>" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn red btn-block uppercase">Login</button>
                </div>
                @section('formact')
                <div class="form-actions">
                    @section('rememberme')
                    <div class="pull-left">
                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="remember" value="1" /> Keep me sign in
                            <span></span>
                        </label>
                    </div>
                    @show
                    @section('forgot')
                    <div class="pull-right forget-password-block">
                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                    </div>
                    @show
                </div>
                @show
            </form>
            @show
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            @section('form.forget')
            <form class="forget-form" action="index.html" method="post">
                <div class="form-title">
                    <span class="form-title">Forget Password ?</span>
                    <span class="form-subtitle">Enter your e-mail to reset it.</span>
                </div>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn btn-default">Back</button>
                    <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
                </div>
            </form>
            @show
            <!-- END FORGOT PASSWORD FORM -->
        </div>
        <!-- <div class="copyright hide"> 2014 © Metronic. Admin Dashboard Template. </div> -->
        <!-- END LOGIN -->
        
        <!-- BEGIN CORE PLUGINS -->
    </body>
    @show

    <script src="<?php echo Theme::base('vendor/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/js.cookie.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/jquery.slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/jquery.blockui.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/jquery-validation/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/jquery-validation/js/additional-methods.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/select2/js/select2.full.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('assets/pages/scripts/login.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('vendor/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo Theme::base('js/metronic/notification.js') ?>" type="text/javascript"></script>

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