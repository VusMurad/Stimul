<?php $this->load->view('admin/includes/headlinks'); ?>
<title>View | Əməkdaşlarımız</title>
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
                <h4 class="text-themecolor">Update</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">

                            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                <?php if ($get_single_colleagues['cl_img']) { ?>
                                    <img width="100%" height="250px" src="<?php echo base_url('uploads/colleagues/' . $get_single_colleagues['cl_img']); ?>" alt="">
                                <?php } ?>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="name">Əməkdaşın adı</label>
                                    <input disabled type="text" name="name" id="name" class="form-control" value="<?php echo $get_single_colleagues['cl_name']; ?>" required="">
                                </div><br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="engname">Əməkdaşın adı (eng)</label>
                                    <input disabled type="text" name="engname" id="engname" class="form-control" value="<?php echo $get_single_colleagues['cl_name_eng']; ?>" required="">
                                </div><br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="runame">Əməkdaşın adı (ru)</label>
                                    <input disabled type="text" name="runame" id="runame" class="form-control" value="<?php echo $get_single_colleagues['cl_name_ru']; ?>" required="">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="description">Əməkdaş haqqında</label> <br>
                                <textarea disabled name="description" id="description" cols="10" rows="5" class="form-control" required=""><?php echo $get_single_colleagues['cl_description']; ?></textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="engdescription">Əməkdaş haqqında(eng)</label> <br>
                                <textarea disabled name="engdescription" id="engdescription" cols="10" rows="5" class="form-control" required=""><?php echo $get_single_colleagues['cl_description_eng']; ?></textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="rudescription">Əməkdaş haqqında(ru)</label> <br>
                                <textarea disabled name="rudescription" id="rudescription" cols="10" rows="5" class="form-control" required=""><?php echo $get_single_colleagues['cl_description_ru']; ?></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-6 col-sm-6 col-lg-12 col-md-12 myinput">
                            <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                                <label for="price">Yaradılma tarixi </label> <br>
                                <input type="text" disabled value="<?php echo $get_single_colleagues['cl_create_date'];?>" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                                <label for="category">yenillənmə tarixi</label> <br>
                                <input type="text" disabled value="<?php echo $get_single_colleagues['cl_update_date'];?>" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <a href="<?php echo base_url('colleagues'); ?>">
                                <button type="submit" class="btn btn-primary form-control">Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/scripts'); ?>