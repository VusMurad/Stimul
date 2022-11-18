<?php $this->load->view('admin/includes/headlinks'); ?>
<title>View | Gallery</title>

<?php $this->load->view('admin/includes/header'); ?>
<style>
    .myinput {
        display: flex;
        justify-content: left;
    }
</style>
<?php $this->load->view('admin/includes/leftbar'); ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">View</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">

                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <?php if ($get_single_img['g_img']) { ?>
                                    <img width="100%" height="250px" src="<?php echo base_url('uploads/gallery/' . $get_single_img['g_img']); ?>" alt="">
                                <?php } ?>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="name">Kursun adı</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $get_single_img['g_name']; ?>" disabled required="">
                                </div><br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="engname">Kursun adı</label>
                                    <input type="text" name="engname" id="engname" class="form-control" value="<?php echo $get_single_img['g_name_eng']; ?>" disabled required="">
                                </div><br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="runame">Kursun adı</label>
                                    <input type="text" name="runame" id="runame" class="form-control" value="<?php echo $get_single_img['g_name_ru']; ?>" disabled required="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-xs-6 col-sm-6 col-lg-12 col-md-12 myinput">
                            <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                                <label for="price">Yaradılma tarixi </label> <br>
                                <input type="text" disabled value="<?php echo $get_single_img['g_create_date']; ?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                                <label for="category">yenillənmə tarixi</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_img['g_update_date']; ?>" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12" style="margin-top: 15px;">
                            <a href="<?php echo base_url('a_gallery'); ?>">
                                <button class="btn btn-primary form-control">Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/scripts'); ?>