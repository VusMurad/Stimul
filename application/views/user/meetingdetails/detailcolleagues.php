<?php $this->load->view('user/includes/headlinks'); ?>
<title><?php echo $get_single_colleagues['cl_name']; ?> | Stimul Education & Consulting</title>
<?php $this->load->view('user/includes/header');  ?>
<!-- ***** Header Area End ***** -->

<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- <h6>Get all details</h6> -->
        <h2>Əməkdaşlarımız</h2>
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
                <a><img class="detailimg mycolleagues" src="<?php echo base_url('uploads/colleagues/' . $get_single_colleagues['cl_img']); ?>" alt=""></a>
              </div>
              <div class="down-content">
                <a>
                  <h4><?php echo $get_single_colleagues['cl_name']; ?></h4>
                </a>
                <p class="description"><?php echo $get_single_colleagues['cl_description']; ?></p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="main-button-red mybtn2">
              <a href="<?php echo base_url('all_colleagues'); ?>">Geri</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('user/includes/footer'); ?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>