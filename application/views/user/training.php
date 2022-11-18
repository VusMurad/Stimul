<?php $this->load->view('user/includes/headlinks'); ?>
<title>Təlimlər Education and Consulting</title>
<?php $this->load->view('user/includes/header'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2>TƏlimlər</h2>
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
                            <?php foreach ($get_all_training as $training_key) { ?>
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="price">
                                                <span><?php echo $training_key->trg_price; ?>₼</span>
                                            </div>
                                            <a href="<?php echo base_url('training_detail/' . $training_key->trg_id); ?>"><img class="myimage" src="<?php echo base_url('uploads/training/' . $training_key->trg_img); ?>" alt=""></a>
                                        </div>
                                        <div class="down-content">
                                            <div class="row mydetail">
                                                <div class="myname">
                                                    <a href="<?php echo base_url('training_detail/' . $training_key->trg_id); ?>">
                                                        <h4><?php echo $training_key->trg_name; ?></h4>
                                                    </a>
                                                </div>
                                                <div class="mybtn1">
                                                    <a href="<?php echo base_url('training_detail/' . $training_key->trg_id); ?>"><button class="mybutton">ƏTRAFLI</button></a>
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
                            <!-- <ul class="myactivebtn">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/includes/footer'); ?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>