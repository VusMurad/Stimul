<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">
                    <b>
                        <img width="50px" src="<?php echo base_url('public/admin/'); ?>assets/myimg/logo.png" alt="homepage" class="dark-logo" />
                        <img src="<?php echo base_url('public/admin/'); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        <!-- <span>Stimul</span> --> 
                    </b>
                    <span>
                        <img width="100px" src="<?php echo base_url('public/admin/'); ?>assets/myimg/logo2.png" alt="homepage" class="dark-logo" />
                        <img src="<?php echo base_url('public/admin/'); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>

            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item hidden-sm-up">
                        <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <div class="align-right ">
                    <a href="<?php echo base_url('log_out');?>" style="margin-right: 40px ;" class="btn waves-effect waves-light btn-danger hidden-md-down">Log out</a>
                </div>
            </div>
        </nav>
    </header>