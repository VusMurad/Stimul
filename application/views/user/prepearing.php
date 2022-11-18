<?php $this->load->view('user/includes/headlinks'); ?>
<title>Hazırlıq kursları | Stimul Education and Consulting</title>
<?php $this->load->view('user/includes/header'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2>Hazırlıq kursları</h2>
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
                            <?php foreach ($get_all_prepearing as $prepearing_key) { ?>
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="price">
                                                <span><?php echo $prepearing_key->pr_price; ?>₼</span>
                                            </div>
                                            <a href="<?php echo base_url('prepearing_detail/' . $prepearing_key->pr_id); ?>"><img class="myimage" src="<?php echo base_url('uploads/prepearing/' . $prepearing_key->pr_img); ?>" alt=""></a>
                                        </div>
                                        <div class="down-content">
                                            <div class="row mydetail">
                                                <div class="myname">
                                                    <a href="<?php echo base_url('prepearing_detail/' . $prepearing_key->pr_id); ?>">
                                                        <h4><?php echo $prepearing_key->pr_name; ?></h4>
                                                    </a>
                                                </div>
                                                <div class="mybtn1">
                                                    <a href="<?php echo base_url('prepearing_detail/' . $prepearing_key->pr_id); ?>"><button class="mybutton">ƏTRAFLI</button></a>
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