<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?php echo base_url('home'); ?>" class="logo">
                        <img src="<?php echo base_url('public/user/assets/images/'); ?>logomain.png" alt="">
                        <!-- Stimul -->
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" >
                        <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)"><?php echo $this->lang->line('courses'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('all_languages'); ?>"><?php echo $this->lang->line('foreing'); ?></a></li>
                                <li><a href="<?php echo base_url('all_psychology'); ?>"><?php echo $this->lang->line('psychology'); ?></a></li>
                                <li><a href="<?php echo base_url('all_toefl'); ?>"><?php echo $this->lang->line('toefl'); ?></a></li>
                                <li><a href="<?php echo base_url('all_acca'); ?>"><?php echo $this->lang->line('acca'); ?></a></li>
                                <li><a href="<?php echo base_url('all_design'); ?>"><?php echo $this->lang->line('design'); ?></a></li>
                                <li><a href="<?php echo base_url('computer'); ?>"><?php echo $this->lang->line('computer'); ?></a></li>
                                <li><a href="<?php echo base_url('all_prepearing'); ?>"><?php echo $this->lang->line('prepearing'); ?></a></li>
                                <li><a href="<?php echo base_url('all_yos'); ?>"><?php echo $this->lang->line('yos'); ?></a></li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a href="javascript:void(0)"><?php echo $this->lang->line('services'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('all_translation'); ?>"><?php echo $this->lang->line('translate'); ?></a></li>
                                <li><a href="<?php echo base_url('all_training'); ?>"><?php echo $this->lang->line('training'); ?></a></li>
                                <li><a href="<?php echo base_url('all_study_abr'); ?>"><?php echo $this->lang->line('study'); ?></a></li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a href="javascript:void(0)"><?php echo $this->lang->line('contact'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('call_us'); ?>"><?php echo $this->lang->line('office'); ?></a></li>
                                <li><a href="<?php echo base_url('call_us_education'); ?>"><?php echo $this->lang->line('abroffice'); ?></a></li>
                                <li><a href="<?php echo base_url('call_us_kids'); ?>"><?php echo $this->lang->line('kidsoffice'); ?></a></li>
                                <li><a href="<?php echo base_url('call_us_consulting'); ?>"><?php echo $this->lang->line('consoffice'); ?></a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)"><?php echo $this->lang->line('about'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('all_colleagues'); ?>"><?php echo $this->lang->line('colleagues'); ?></a></li>
                                <li><a href="<?php echo base_url('all_customers'); ?>"><?php echo $this->lang->line('customers'); ?></a></li>
                                <!-- <li><a href="<?php echo base_url('all_customers'); ?>"><?php echo $this->lang->line('customers'); ?></a></li> -->
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url('register'); ?>"><?php echo $this->lang->line('register'); ?></a></li>
                        <li><a href="<?php echo base_url('gallery'); ?>"><?php echo $this->lang->line('gallery'); ?></a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<button class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fa fa-arrow-up"></i>
</button>