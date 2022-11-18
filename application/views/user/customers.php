<?php $this->load->view('user/includes/headlinks'); ?>
<title>Müştərilər | Stimul Education and Consulting</title>
<?php $this->load->view('user/includes/header'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2>Müştərilər</h2>
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
                            <?php foreach ($get_all_customers as $customers_key) {; ?>
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a><img height="200px" src="<?php echo base_url('uploads/customers/' . $customers_key['cs_img']); ?>" alt=""></a>
                                        </div>
                                        <div class="down-content myname" style="height: 100px;">
                                            <h4><?php echo $customers_key['cs_name']; ?></h4>
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