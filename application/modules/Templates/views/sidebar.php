<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Menu</li>
                        <li class="sidebar-item <?= ($this->uri->segment(1) === 'dashboard') ? 'active' : '' ?>">
                            <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <?php if ($this->fungsi->user_login()->role == 2) { ?>
                            <li class="sidebar-item <?= ($this->uri->segment(1) === 'nasabah') ? 'active' : '' ?>">
                                <a href="<?= base_url('nasabah') ?>" class='sidebar-link'>
                                    <i data-feather="users" width="20"></i>
                                    <span>Data Nasabah</span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->role == 1) { ?>
                            <li class='sidebar-title'>Admin Area</li>

                            <li class="sidebar-item <?= ($this->uri->segment(1) === 'user') ? 'active' : '' ?>">
                                <a href="<?= base_url('user') ?>" class='sidebar-link'>
                                    <i data-feather="sliders" width="20"></i>
                                    <span>Management User</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <!-- <div class="avatar mr-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div> -->
                                <div class="d-none d-md-block d-lg-inline-block">Hi, <?= $this->fungsi->user_login()->name ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>