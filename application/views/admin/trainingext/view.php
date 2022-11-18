<?php $this->load->view('admin/includes/headlinks');?>
<title>View | Təlimlər</title>

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
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <img width="100%" height="250px" src="<?php echo base_url('uploads/training/' . $get_single_training['trg_img']); ?>" alt="">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="name">Kursun adı</label><br>
                                    <input type="text" disabled value="<?php echo $get_single_training['trg_name']; ?>" class="form-control">
                                </div><br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="engname">Kursun adı(eng)</label><br>
                                    <input type="text" disabled value="<?php echo $get_single_training['trg_name_eng']; ?>" class="form-control">
                                </div><br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="runame">Kursun adı(ru)</label><br>
                                    <input type="text" disabled value="<?php echo $get_single_training['trg_name_ru']; ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="description">Kurs haqqında</label> <br>
                                <textarea disabled cols="30" rows="10" class="form-control"><?php echo $get_single_training['trg_description']; ?></textarea>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="engdescription">Kurs haqqında(eng)</label> <br>
                                <textarea disabled cols="30" rows="10" class="form-control"><?php echo $get_single_training['trg_description_eng']; ?></textarea>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="rudescription">Kurs haqqında(ru)</label> <br>
                                <textarea disabled cols="30" rows="10" class="form-control"><?php echo $get_single_training['trg_description_ru']; ?></textarea>
                            </div>
                            <br>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-lg-12 col-md-12 myinput">
                            <div class="col-xs-6 col-sm-6 col-lg-4 col-md-4">
                                <label for="price">Qiymət </label> <br>
                                <input type="text" disabled value="<?php echo $get_single_training['trg_price']; ?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <label for="category">Category</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_training['trg_category']; ?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <label for="status">Status</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_training['trg_status']; ?>" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-6 col-sm-6 col-lg-12 col-md-12 myinput">
                            <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                                <label for="price">Yaradılma tarixi </label> <br>
                                <input type="text" disabled value="<?php echo $get_single_training['trg_create_date']; ?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                                <label for="category">Yenilənmə tarixi</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_training['trg_update_date']; ?>" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <a href="<?php echo base_url('training'); ?>">
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