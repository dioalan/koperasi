<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <?php if ($_SESSION['user']['role'][0] == '1') : ?>
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="nav-item start">
        <a href="<?php echo URL::site() ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-home"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/home.png') ?>" alt="" /  >
            <span class="title">Dashboard</span>
            <span class="selected"></span>
            <!-- <span class="arrow open"></span> -->
        </a>
    </li>
   <!--  <li class="heading">
        <h3 class="uppercase" style="color: #FFF !important">Members and User</h3>
    </li> -->
    <li class="nav-item">
        <a href="<?php echo URL::site('user') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/user-group-man-man.png') ?>" alt="" /  >
            <span class="title">Members and User</span>
        </a>
    </li>
   <!--  <li class="nav-item">
        <a href="<?php echo URL::site('user') ?>" class="nav-link nav-toggle">
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/administrator-male.png') ?>" alt="" /  >
            <span class="title">Users</span>
        </a>
    </li> -->
    <li class="heading">
        <h3 class="uppercase" style="color: #FFF !important">Transaction</h3>
    </li>
    <li class="nav-item">
        <a href="<?php echo URL::site('simpanan') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/money-box.png') ?>" alt="" /  >
            <span class="title">Simpan</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo URL::site('withdraw') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/withdrawal.png') ?>" alt="" /  >
            <span class="title">Withdrawl</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo URL::site('pinjaman') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/coins.png') ?>" alt="" /  >
            <span class="title">Pinjam</span>
        </a>
    </li>
    </li>
    <li class="nav-item">
        <a href="<?php echo URL::site('pembayaran') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/cash-in-hand.png') ?>" alt="" /  >
            <span class="title">Pembayaran</span>
        </a>
    </li>
    <li class="heading">
        <h3 class="uppercase" style="color: #FFF !important">Data Transaction</h3>
    </li>
    <li class="nav-item">
        <a href="<?php echo URL::site('data_simpanan') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/money-bag.png') ?>" alt="" /  >
            <span class="title">Data Simpanan</span>
        </a>
    </li>
     <li class="nav-item">
        <a href="<?php echo URL::site('data_pinjaman') ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-puzzle"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/bank-cards.png') ?>" alt="" /  >

            <span class="title">Data Pinjaman</span>
        </a>
    </li>
    <!-- <li class="nav-item">
        <a href="<?php echo URL::site('test') ?>" class="nav-link nav-toggle">
            <i class="icon-puzzle"></i>
            <span class="title">Test</span>
        </a>
    </li> -->
    <li class="heading">
        <h3 class="uppercase" style="color: #FFF !important">System</h3>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URL::site('role'); ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-settings"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/checked-user-male.png') ?>" alt="" /  >
            <span class="title">Role</span>
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URL::site('previleges'); ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-docs"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/lock.png') ?>" alt="" /  >
            <span class="title">Previleges</span>
        </a>
    </li>

    <li class="nav-item  ">
        <a href="<?php echo URL::site('sysparam'); ?>" class="nav-link nav-toggle">
            <!-- <i class="icon-settings"></i> -->
            <img style="width: 40px" src="<?php echo Theme::base('assets/pages/img/settings.png') ?>" alt="" /  >
            <span class="title">System Parameter</span>
        </a>
    </li>
    <?php endif ?>

    <?php if ($_SESSION['user']['role'][0] == '2') : ?>

       
        <li class="heading">
            <h3 class="uppercase" style="color: #FFF !important">Data Transaction</h3>
        </li>
        <li class="nav-item">
            <a href="<?php echo URL::site('data_simpanan') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Data Simpanan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo URL::site('data_pinjaman') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Data Pinjaman</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo URL::site('pembayaran') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Pembayaran</span>
            </a>
        </li>
    <?php endif ?>
    
   
</ul>