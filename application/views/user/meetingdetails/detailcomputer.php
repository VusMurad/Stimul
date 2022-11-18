<?php $this->load->view('user/includes/headlinks'); ?>
<title><?php echo $get_single_compcourse['c_name']; ?> | Stimul Education & Consulting</title>
<?php $this->load->view('user/includes/header'); ?>
<!-- ***** Header Area End ***** -->

<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- <h6>Get all details</h6> -->
        <h2><?php echo $get_single_compcourse['c_name']; ?></h2>
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
                  <span><?php echo $get_single_compcourse['c_price']; ?></span>
                </div>
                <a><img class="detailimg" src="<?php echo base_url('uploads/compcourse/' . $get_single_compcourse['c_img']); ?>" alt=""></a>
              </div>
              <div class="down-content">
                <a>
                  <h4><?php echo $get_single_compcourse['c_name']; ?></h4>
                </a>
                <p class="description"><?php echo $get_single_compcourse['c_description']; ?></p>
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
                  <!-- <div class="col-lg-12">
                      <div class="share">
                        <h5>Share:</h5>
                        <ul>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Linkedin</a>,</li>
                          <li><a href="#">Behance</a></li>
                        </ul>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="main-button-red mybtn2">
              <a href="<?php echo base_url('computer'); ?>">Bütün komputer kursları</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('user/includes/footer'); ?>
</section>


<?php $this->load->view('user/includes/scriptslink'); ?>