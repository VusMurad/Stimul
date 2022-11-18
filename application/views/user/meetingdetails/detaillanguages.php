<?php $this->load->view('user/includes/headlinks'); ?>
<title><?php echo $get_single_language['l_name']; ?> | Stimul Education & Consulting</title>
<?php $this->load->view('user/includes/header'); ?>
<!-- ***** Header Area End ***** -->

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Get all details</h6> -->
                <h2><?php echo $get_single_language['l_name']; ?> </h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row mycenter">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <div class="price">
                                    <span><?php echo $get_single_language['l_price']; ?>₼</span>
                                </div>
                                <a><img class="detailimg" src="<?php echo base_url('uploads/languages/' . $get_single_language['l_img']); ?>" alt=""></a>
                            </div>
                            <div class="down-content">
                                <h4><?php echo $get_single_language['l_name']; ?></h4>
                                <p class="description"><?php echo $get_single_language['l_description']; ?></p>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="hours">
                                            <h5>Saatlar</h5>
                                            <p>Bazar ertəsi - Cümə: 09:00 - 21:00<br>Şənbə - Bazar: 09:00 - 20:00 </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="location">
                                            <h5>Ünvan</h5>
                                            <p>Jafar Jabbarli 44,
                                                <br>Caspian Plaza 3, 10th floor Baku, Azerbaijan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red mybtn2">
                            <a href="<?php echo base_url('all_languages'); ?>">Bütün xarici dil kursları</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/includes/footer'); ?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>