@extends('layout')

@section('content')
    <div>
        @section('page.title')
        <h1 class="page-title"> Admin Dashboard
            <small>statistics, charts, recent events and reports</small>
        </h1>
        @show
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <?php 
        $model_member = Norm::factory('User')->find();
        $vararray = array();
        foreach ($model_member as $key => $value) {
            $arr = $value['role'][0];
            
            if ($arr == '2') {
                $vararray[] = $arr;
            }
        }
        $total_member = count($vararray);

        $model_simpanan = Norm::factory('DataSimpanan')->find(array());
        $total_simpanan = 0;

        foreach ($model_simpanan as $key => $value) {
            $total_simpanan = $total_simpanan + $value['jumlah_wajib'] + $value['jumlah_sukarela'] + $value['jumlah_qurban'] + $value['jumlah_umrah'] + $value['jumlah_haji'];
        }

        $model_pinjaman = Norm::factory('DataPinjaman')->find(array('status'=>'Pinjaman'));
        $total_pinjaman = 0;
        foreach ($model_pinjaman as $key => $value) {
            $total_pinjaman = $total_pinjaman + $value['credit'];
        }

        $model_hutang = Norm::factory('DataPinjaman')->find(array('status'=>'Pinjaman'));
        $total_hutang = 0;
        foreach ($model_hutang as $key => $value) {
            $total_hutang = $total_hutang + $value['jumlah_pinjam'];
        }

    




         ?>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="details">
                        <div class="number">Rp.
                            <span data-counter="counterup" data-value="1349"><?php echo number_format($total_hutang)?></span>
                        </div>
                        <div class="desc"> Total Hutang </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="details">
                        <div class="number">Rp.
                            <span data-counter="counterup" data-value="12,5"><?php echo number_format($total_pinjaman); ?></span></div>
                        <div class="desc"> Total Credit </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="details">
                        <div class="number">Rp.
                            <span data-counter="counterup" data-value="549"><?php echo number_format($total_simpanan); ?></span>
                        </div>
                        <div class="desc"> Total Simpanan </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="89"></span><?php echo $total_member; ?></div>
                        <div class="desc"> Total Member </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
               <!--  <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                            <span class="caption-helper">weekly stats...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn red btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">New</label>
                                <label class="btn red btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div> -->
                <!-- END PORTLET-->
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
               <!--  <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-hide hide"></i>
                            <span class="caption-subject font-hide bold uppercase">Chats</span>
                        </div>
                        <div class="actions">
                            <div class="portlet-input input-inline">
                                <div class="input-icon right">
                                    <i class="icon-magnifier"></i>
                                    <input type="text" class="form-control input-circle" placeholder="search..."> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body" id="chats">
                        <div class="scroller" style="height: 325px;" data-always-visible="1" data-rail-visible1="1">
                            <ul class="chats">
                                <li class="out">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/layouts/layout/img/avatar2.jpg') ?>" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                        <span class="datetime"> at 20:11 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/layouts/layout/img/avatar2.jpg') ?>" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                        <span class="datetime"> at 20:11 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/layouts/layout/img/avatar1.jpg') ?>" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:30 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/layouts/layout/img/avatar1.jpg') ?>" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:30 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/') ?>layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:33 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/') ?>layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:35 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/') ?>layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:40 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/') ?>layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:40 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="<?php echo Theme::base('assets/') ?>layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:54 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-form">
                            <div class="input-cont">
                                <input class="form-control" type="text" placeholder="Type a message here..." /> </div>
                            <div class="btn-cont">
                                <span class="arrow"> </span>
                                <a href="" class="btn blue icn-only">
                                    <i class="fa fa-check icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- END PORTLET-->
            </div>
        </div>
       
    </div>
@endsection

@section('customjs')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Theme::base('assets/pages/scripts/dashboard.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection

@section('contextual')
@endsection



