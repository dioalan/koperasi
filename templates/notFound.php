<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>
            Page not found
        </title>
        <meta name="description" content="{{ f('pagetitle', 'Great App') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- GLOBAL MANDATORY -->
        <link href="<?php echo Theme::base('lato/css/lato-webfont.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('js/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('js/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('vendor/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('vendor/bootstrap-switch/dist/css/bootstrap2/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css" />

        <!-- <link href="<?php //echo Theme::base('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" /> -->
        <link href="<?php echo Theme::base('assets/global/css/plugins.min.css') ?>" rel="stylesheet" type="text/css" />

        <!-- <link href="<?php //echo Theme::base('assets/pages/css/error.min.css') ?>" rel="stylesheet" type="text/css" /> -->

        <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        <style>
            * {
              margin: 0;
              padding: 0;
            }

            body {
                font-family: "Lato", sans-serif!important;
              background: #123752;
              height: 100%;
              position: relative;
              font-size: 14px;
            }
            .caption{
                text-align: center;
                color: #ddd;
                top: calc(50% - 75px);
                position: absolute;
                width: 100%;
                z-index: 2;
            }
            .caption h1{
                font-size: 10em;
                font-weight: 900;
            }
            .caption a.small{
                font-size: 1em;
            }
            #robot {
              position: relative;
              height: 78vh;
              width: 20vh;
              margin: 0 auto;
              -webkit-animation: robot 1.8s infinite ease-in-out;
                      animation: robot 1.8s infinite ease-in-out;
              z-index: 2;
            }
            #robot div {
              position: absolute;
              -webkit-transform-origin: 50% 0;
                      transform-origin: 50% 0;
            }
            #robot .r div {
              background: #29516D;
            }
            #robot .l div {
              background: #326384;
            }
            #robot .leg.r, #robot .arm.l {
              -webkit-animation: trans 1.8s 0.9s infinite ease-in-out;
                      animation: trans 1.8s 0.9s infinite ease-in-out;
            }
            #robot .leg.l, #robot .arm.r {
              -webkit-animation: trans 1.8s infinite ease-in-out;
                      animation: trans 1.8s infinite ease-in-out;
            }
            #robot .head {
              top: 10vh;
              left: 5vh;
              width: 9vh;
              height: 10vh;
              margin: 0 auto;
              -webkit-transform-origin: 20% 150%;
                      transform-origin: 20% 150%;
              -webkit-animation: head 1.8s infinite ease-in-out;
                      animation: head 1.8s infinite ease-in-out;
              background: #326384;
            }
            #robot .arm {
              left: 5vh;
              top: 20.5vh;
              width: 8vh;
              height: 5.5vh;
            }
            #robot .arm div {
              top: 100%;
              left: 0;
              width: 100%;
              height: 10vh;
              box-sizing: border-box;
              -webkit-transform: rotate(5deg);
                      transform: rotate(5deg);
              -webkit-animation: arms 1.8s infinite ease-in-out;
                      animation: arms 1.8s infinite ease-in-out;
            }
            #robot .arm.l div {
              -webkit-animation-delay: -0.9s;
                      animation-delay: -0.9s;
            }
            #robot .leg {
              top: 45vh;
              left: 5vh;
              width: 8vh;
              height: 4vh;
            }
            #robot .leg div {
              width: 100%;
              height: 15vh;
              top: 100%;
              -webkit-animation: legs1 1.8s infinite ease-in-out;
                      animation: legs1 1.8s infinite ease-in-out;
            }
            #robot .leg div div {
              -webkit-animation: legs2 1.8s infinite ease-in-out;
                      animation: legs2 1.8s infinite ease-in-out;
            }
            #robot .leg.r div {
              -webkit-animation-delay: -0.9s;
                      animation-delay: -0.9s;
            }

            .shadow {
              position: relative;
              width: 22vh;
              height: 3vh;
              margin: 0 auto;
              border-radius: 50%;
              background: #05314f;
              -webkit-animation: shadow 1.8s infinite ease-in-out;
                      animation: shadow 1.8s infinite ease-in-out;
              z-index: 1;
            }

            /**************************************************************************************/
            @-webkit-keyframes robot {
              0%,    50%,    100% {
                -webkit-transform: translateY(0vh) rotate(0.2deg);
                        transform: translateY(0vh) rotate(0.2deg);
              }
              15%,    65% {
                -webkit-transform: translateY(0.15vh) rotate(-0.2deg);
                        transform: translateY(0.15vh) rotate(-0.2deg);
              }
            }
            @keyframes robot {
              0%,    50%,    100% {
                -webkit-transform: translateY(0vh) rotate(0.2deg);
                        transform: translateY(0vh) rotate(0.2deg);
              }
              15%,    65% {
                -webkit-transform: translateY(0.15vh) rotate(-0.2deg);
                        transform: translateY(0.15vh) rotate(-0.2deg);
              }
            }
            @-webkit-keyframes trans {
              0%, 100% {
                -webkit-transform: translateX(0vh);
                        transform: translateX(0vh);
              }
              50% {
                -webkit-transform: translateX(1.2vh);
                        transform: translateX(1.2vh);
              }
            }
            @keyframes trans {
              0%, 100% {
                -webkit-transform: translateX(0vh);
                        transform: translateX(0vh);
              }
              50% {
                -webkit-transform: translateX(1.2vh);
                        transform: translateX(1.2vh);
              }
            }
            @-webkit-keyframes head {
              0%, 100% {
                -webkit-transform: rotate(-1deg);
                        transform: rotate(-1deg);
              }
              25%, 75% {
                -webkit-transform: rotate(2deg);
                        transform: rotate(2deg);
              }
              50% {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
              }
            }
            @keyframes head {
              0%, 100% {
                -webkit-transform: rotate(-1deg);
                        transform: rotate(-1deg);
              }
              25%, 75% {
                -webkit-transform: rotate(2deg);
                        transform: rotate(2deg);
              }
              50% {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
              }
            }
            @-webkit-keyframes arms {
              0%, 100% {
                -webkit-transform: rotate(2deg);
                        transform: rotate(2deg);
              }
              50% {
                -webkit-transform: rotate(-10deg);
                        transform: rotate(-10deg);
              }
            }
            @keyframes arms {
              0%, 100% {
                -webkit-transform: rotate(2deg);
                        transform: rotate(2deg);
              }
              50% {
                -webkit-transform: rotate(-10deg);
                        transform: rotate(-10deg);
              }
            }
            @-webkit-keyframes legs1 {
              0%, 100% {
                -webkit-transform: rotate(10deg);
                        transform: rotate(10deg);
              }
              45% {
                -webkit-transform: rotate(-15deg);
                        transform: rotate(-15deg);
              }
            }
            @keyframes legs1 {
              0%, 100% {
                -webkit-transform: rotate(10deg);
                        transform: rotate(10deg);
              }
              45% {
                -webkit-transform: rotate(-15deg);
                        transform: rotate(-15deg);
              }
            }
            @-webkit-keyframes legs2 {
              0%, 100% {
                -webkit-transform: rotate(2deg);
                        transform: rotate(2deg);
              }
              33% {
                -webkit-transform: rotate(20deg);
                        transform: rotate(20deg);
              }
              50% {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
              }
            }
            @keyframes legs2 {
              0%, 100% {
                -webkit-transform: rotate(2deg);
                        transform: rotate(2deg);
              }
              33% {
                -webkit-transform: rotate(20deg);
                        transform: rotate(20deg);
              }
              50% {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
              }
            }
            @-webkit-keyframes shadow {
              0%,    50%,    100% {
                -webkit-transform: scale(1.02);
                        transform: scale(1.02);
              }
              25%,    75% {
                -webkit-transform: scale(0.98);
                        transform: scale(0.98);
              }
            }
            @keyframes shadow {
              0%,    50%,    100% {
                -webkit-transform: scale(1.02);
                        transform: scale(1.02);
              }
              25%,    75% {
                -webkit-transform: scale(0.98);
                        transform: scale(0.98);
              }
            }
            a {
              color: #ddd;
              font-family: sans-serif;
              text-transform: uppercase;
              display: block;
              text-align: center;
              font-weight: bold;
            }
            a:hover {
              color: #fff;
              font-family: sans-serif;
              text-transform: uppercase;
              display: block;
              text-align: center;
              font-weight: bold;
              text-decoration: none;
            }

        </style>
        </head>
    <!-- END HEAD -->

    <body class=" page-404-3">
        <div id="robot">
          <div class="head"></div>
          <div class="arm l"><div><div></div></div></div>
          <div class="leg l"><div><div></div></div></div>
          <div class="leg r"><div><div></div></div></div>
          <div class="arm r"><div><div></div></div></div>
        </div>
        <div class="shadow"></div>
        <div class="caption">
            <h1>404</h1>
            <a href="<?php echo Theme::base() ?>" class="small">BACK TO HOME PAGE</a>
        </div>
  </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo Theme::base('vendor/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/js.cookie.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/jquery.slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('js/jquery.blockui.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo Theme::base('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            
        </script>
    </body>

</html>