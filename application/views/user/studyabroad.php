<?php $this->load->view('user/includes/headlinks'); ?>
<title>Xaricdə təhsil | Stimul Education and Consulting</title>
<?php $this->load->view('user/includes/header'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2>Xaricdə təhsil </h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row grid">
                            <?php foreach ($get_all_study as $study_key) { ?>
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="price">
                                                <span><?php echo $study_key->s_price; ?>₼</span>
                                            </div>
                                            <a href="<?php echo base_url('study_abr_detail/' . $study_key->s_id); ?>"><img class="myimage" src="<?php echo base_url('uploads/studyabroad/' . $study_key->s_img); ?>" alt=""></a>
                                        </div>
                                        <div class="down-content">
                                            <div class="row mydetail">
                                                <div class="myname">
                                                    <a href="<?php echo base_url('study_abr_detail/' . $study_key->s_id); ?>">
                                                        <h4><?php echo $study_key->s_name; ?></h4>
                                                    </a>
                                                </div>
                                                <div class="mybtn1">
                                                    <a href="<?php echo base_url('study_abr_detail/' . $study_key->s_id); ?>"><button class="mybutton">ƏTRAFLI</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pagination">
                            <?php echo $links; ?>
                            <ul class="myactivebtn">
                                <!-- <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/includes/footer'); ?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>