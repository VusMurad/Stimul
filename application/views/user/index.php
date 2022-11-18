<?php $this->load->view('user/includes/headlinks'); ?>
<title>Stimul | Education and Consulting</title>
<?php $this->load->view('user/includes/header'); ?>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="<?php echo base_url('public/user/'); ?>assets/images/course-video.mp4" type="video/mp4" />
  </video>
  <div class="video-overlay header-text" style="padding-top:350px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
            <h6></h6>
            <h2>Stimula xoş gəldiniz!</h2>
            <p> Bizim hədəfimiz Azərbaycan Respublikasında müştərilərimizin müasir avadanlıqlar, yüksək keyfiyyətli məhsul və xidmətlərlə təmin olunmalarına yardım edən aparıcı bir şirkət qurulmasıdır. Bizim hər bir müştərimiz professional və keyfiyyətli təhsil və xidmətlərlə təmin ediləcəyinə əmin ola bilər.</p>
            <div>
              <div style="padding-top: 10px;"><a href="<?php echo base_url('register'); ?>"> <button class="mybutton"> Bizə qatılın!</button></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-service-item owl-carousel myfirstcarousel">
          <div class="item myfirstcarousel">
            <div class="icon">
              <img src="<?php echo base_url('public/user/'); ?>assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content ">
              <a href="<?php echo base_url('all_psychology'); ?>">
                <h4 class="mycolor">Psixologiya</h4>
              </a>
            </div>
          </div>
          <div class="item myfirstcarousel">
            <div class="icon">
              <img src="<?php echo base_url('public/user/'); ?>assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
              <a href="<?php echo base_url('all_design'); ?>">
                <h4 class="mycolor">Dizayn kursları</h4>
              </a>
              <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
            </div>
          </div>
          <div class="item myfirstcarousel">
            <div class="icon">
              <img src="<?php echo base_url('public/user/'); ?>assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
              <a href="<?php echo base_url('all_training'); ?>">
                <h4 class="mycolor">Təlimlər</h4>
              </a>
              <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
            </div>
          </div>
          <div class="item myfirstcarousel">
            <div class="icon">
              <img src="<?php echo base_url('public/user/'); ?>assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
              <a href="<?php echo base_url('computer'); ?>">
                <h4 class="mycolor">Komputer kursları</h4>
              </a>
              <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
            </div>
          </div>
          <div class="item myfirstcarousel">
            <div class="icon">
              <img src="<?php echo base_url('public/user/'); ?>assets/images/service-icon-01.png" alt="">
            </div>
            <div class="down-content">
              <a href="<?php echo base_url('all_translation'); ?>">
                <h4 class="mycolor">Tərcümə</h4>
              </a>
              <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="upcoming-meetings " id="meetings">
  <div class="container">
    <div class="row trainings ">
      <div class="col-lg-12 ">
        <div class="section-heading">
          <h2>Xaricdə təhsil</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">
          <?php foreach ($get_all_study2 as $study_key) { ?>
            <div class="col-lg-4">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span><?php echo $study_key['s_price']; ?>₼</span>
                  </div>
                  <a href="<?php echo base_url('study_abr_detail/' . $study_key['s_id']); ?>"><img class="mysmalls" height="250px" src="<?php echo base_url('uploads/studyabroad/' . $study_key['s_img']); ?>" alt=""></a>
                </div>
                <div class="down-content ">
                  <div class="row myclass">
                    <div class=" flex1">
                      <a href="<?php echo base_url('study_abr_detail/' . $study_key['s_id']); ?>">
                        <h4><?php echo $study_key['s_name']; ?></h4>
                      </a>
                    </div>
                    <div class="flex2">
                      <div>
                        <a href="<?php echo base_url('study_abr_detail/' . $study_key['s_id']); ?>"><button class="mybutton">ƏTRAFLI</button></a>
                      </div>
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
</section>

<section class="apply-now" id="apply">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 align-self-center">
        <div class="row">
          <div class="col-lg-12">
            <div class="item">
              <h3>Özünüzü bizimlə inkişaf etdirin...</h3>
              <p>
                <b>Stimul sizlər üçün bir çox tədris metodlarını araşdıraraq müəyyən imkanlarını genişləndirmişdir. Siz də kurslarımıza qatılaraq daha yaxşı və effektiv üsullarla istədiyiniz sahədə mütəxəssiz ola bilərsiniz.</b>
              </p>
              <div class="main-button-red">
                <div><a href="<?php echo base_url('register'); ?>">Bizə qatılın!</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="item">
              <h3>Xaricdə təhsil almaq imkanı...</h3>
              <p>
                <b>Stimul sizlərə Avropanın ən nüfuzlu dövlət universitetlərində ödənişsiz və təqaüdlü bakalavr və magistr təhsili almaq imkanı təqdim edir. Bakalavr müddəti 3 və 4 il magistr müddəti isə 2 ildir. </b>
              </p>
              <div class="main-button-yellow">
                <div><a href="<?php echo base_url('register'); ?>">Xaricdə təhsil alın!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="our-courses" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2 style="text-align: center;">Xarici dil kursları</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-courses-item owl-carousel">
          <?php foreach ($get_all_languages2 as $language_key) { ?>
            <div class="item">
              <a href="<?php echo base_url('languages_detail/' . $language_key['l_id']); ?>"><img class="mysmalls2" height="200px" src="<?php echo base_url('uploads/languages/' . $language_key['l_img']); ?>" alt="Bridge"></a>
              <div class="down-content ">
                <div style="height: 70px;">
                  <h4><?php echo $language_key['l_name']; ?></h4>
                </div>
                <div class="info myinfo">
                  <div class="row">
                    <div class="col-8">
                      <a href="<?php echo base_url('languages_detail/' . $language_key['l_id']); ?>"><button class="mybutton">ƏTRAFLI</button></a>
                    </div>
                    <div class="col-4">
                      <span><?php echo $language_key['l_price']; ?>₼</span>
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
</section>

<section class="our-courses" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2 style="text-align: center;">Komputer kursları</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-courses-item owl-carousel">
          <?php foreach ($get_all_compcourse2 as $compcourse) { ?>
            <div class="item">
              <a href="<?php echo base_url('computer_detail/' . $compcourse['c_id']); ?>"><img class="mysmalls2"  src="<?php echo base_url('uploads/compcourse/' . $compcourse['c_img']); ?>"></a>
              <div class="down-content">
                <div style="height: 70px;">
                  <h4><?php echo $compcourse['c_name']; ?></h4>
                </div>
                <div class="info myinfo">
                  <div class="row">
                    <div class="col-8">
                      <a href="<?php echo base_url('computer_detail/' . $compcourse['c_id']); ?>"><button class="mybutton">ƏTRAFLI</button></a>
                    </div>
                    <div class="col-4">
                      <span><?php echo $compcourse['c_price']; ?>₼</span>
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
</section>

<section class="upcoming-meetings2" id="meetings">
  <div class="container">
    <div class="row trainings ">
      <div class="col-lg-12 ">
        <div class="section-heading">
          <h2>Təlimlər</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">
          <?php foreach ($get_all_training2 as $training_key) { ?>
            <div class="col-lg-4">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span><?php echo $training_key['trg_id']; ?>₼</span>
                  </div>
                  <a href="<?php echo base_url('training_detail/' . $training_key['trg_id']); ?>"><img class="mysmalls" height="250px" src="<?php echo base_url('uploads/training/' . $training_key['trg_img']); ?>" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content ">
                  <div class="row myclass">
                    <div class=" flex1">
                      <a href="<?php echo base_url('training_detail/' . $training_key['trg_id']); ?>">
                        <h4><?php echo $training_key['trg_name']; ?></h4>
                      </a>
                    </div>
                    <div class="flex2">
                      <div>
                        <a href="<?php echo base_url('training_detail/' . $training_key['trg_id']); ?>"><button class="mybutton">ƏTRAFLI</button></a>
                      </div>
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
</section>

<section class="our-facts">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-12">
            <!-- <h2>Kursumuz haqqında faktlar</h2> -->
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="count-area-content percentage">
                  <div class="count-digit">94</div>
                  <div class="count-title">Uğurlu tələbələrimiz</div>
                </div>
              </div>
              <div class="col-12">
                <div class="count-area-content">
                  <div class="count-digit">126</div>
                  <div class="count-title">Müəllim sayımız</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="count-area-content new-students">
                  <div class="count-digit">2345</div>
                  <div class="count-title">Yeni tələbələrimiz</div>
                </div>
              </div>
              <div class="col-12">
                <div class="count-area-content">
                  <div class="count-digit">32</div>
                  <div class="count-title">Mükafatlarımız</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="video">
          <a href="https://youtu.be/PySVLysxluc?t=15" target="_blank"><img height="200px" src="<?php echo base_url('public/user/') ?>assets/images/play-icon.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mycarousel">
        <div id="customers-testimonials" class="owl-carousel">
          <?php foreach ($get_all_students as $student_key) { ?>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle mycarouselimg" src="<?php echo base_url('uploads/students/' . $student_key['st_img']); ?>" alt=""><br>
                <p><?php echo $student_key['st_description'] ?></p>
              </div>
              <div class="testimonial-name"><?php echo $student_key['st_name']; ?></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="meetings-page mymap" id="meetings">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="meeting-single-item">
              <div class="down-content">
                <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.060831672318!2d49.82649351489358!3d40.38534436547255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9bdc74118b%3A0xc8377414faa8f86b!2sSTIMUL%20Education%20%26%20Consulting!5e0!3m2!1str!2s!4v1661516237787!5m2!1str!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="row" style="margin-top: 30px;">
                  <div class="col-lg-6">
                    <div class="hours">
                      <h5>Saatlar</h5>
                      <p>Monday - Friday: 09:00 AM - 21:00 PM<br>Saturday - Sunday: 09:00 AM - 20:00 PM</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="location">
                      <h5>Ünvan</h5> <br>
                      <span><i class="fa fa-map-marker"></i> Jafar Jabbarli 44, Caspian Plaza 3, 10th floor Baku, Azerbaijan</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('user/includes/footer'); ?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>