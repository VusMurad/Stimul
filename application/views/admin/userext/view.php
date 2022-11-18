<?php $this->load->view('admin/includes/headlinks'); ?>
<title>View | User reguest</title>
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

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="name">Ad</label><br>
                                <input type="text" disabled value="<?php echo $get_single_message['us_name']; ?>" class="form-control">
                            </div><br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="engname">Soyad</label><br>
                                <input type="text" disabled value="<?php echo $get_single_message['us_surname']; ?>" class="form-control">
                            </div><br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="runame">Email</label><br>
                                <input type="text" disabled value="<?php echo $get_single_message['us_email']; ?>" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="description">Əlavə qeyd</label> <br>
                                <textarea disabled cols="30" rows="10" class="form-control"><?php echo $get_single_message['us_message']; ?></textarea>
                            </div>
                            <br>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">
                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <label for="price">Nömrə </label> <br>
                                <input type="text" disabled value="<?php echo $get_single_message['us_phone']; ?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <label for="category">Tədrisin növü</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_message['us_select']; ?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <label for="status">Göndərilmə tarixi</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_message['us_create_date']; ?>" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <a href="<?php echo base_url('user_reguest'); ?>">
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