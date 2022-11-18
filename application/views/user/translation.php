<?php $this->load->view('user/includes/headlinks'); ?>
<title>Tərcümə | Stimul Education and Consulting</title>
<?php $this->load->view('user/includes/header'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2>Tərcümə</h2>
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
                            <?php foreach ($get_all_translation as $translation_key) { ?>
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="price">
                                                <span><?php echo $translation_key['tr_price']; ?>₼</span>
                                            </div>
                                            <a href="<?php echo base_url('translation_detail/' . $translation_key['tr_id']); ?>"><img class="myimage" src="<?php echo base_url('uploads/translation/' . $translation_key['tr_img']); ?>" alt=""></a>
                                        </div>
                                        <div class="down-content">
                                            <div class="row mydetail">
                                                <div class="myname">
                                                    <a href="<?php echo base_url('translation_detail/' . $translation_key['tr_id']); ?>">
                                                        <h4><?php echo $translation_key['tr_name']; ?></h4>
                                                    </a>
                                                </div>
                                                <div class="mybtn1">
                                                    <a href="<?php echo base_url('translation_detail/' . $translation_key['tr_id']); ?>"><button class="mybutton">ƏTRAFLI</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/includes/footer');?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>