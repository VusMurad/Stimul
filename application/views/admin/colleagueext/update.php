<?php $this->load->view('admin/includes/headlinks'); ?>
<title>Update | Komputer kursları</title>
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
                        <form action="<?php echo base_url($uri = 'colleagues_update_act/' . $get_single_colleagues['cl_id']); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="img"> Şəkli dəyişmək üçün tıklayın
                                        <?php if ($get_single_colleagues['cl_img']) { ?>
                                            <img width="100%" height="250px" src="<?php echo base_url('uploads/colleagues/' . $get_single_colleagues['cl_img']); ?>" alt="">
                                        <?php } ?>
                                        <input type="file" name="images" id="img" class="form-control" hidden>
                                    </label>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
                                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                        <label for="name">Əməkdaşın adı</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $get_single_colleagues['cl_name']; ?>" required="">
                                    </div><br>

                                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                        <label for="engname">Əməkdaşın adı (eng)</label>
                                        <input type="text" name="engname" id="engname" class="form-control" value="<?php echo $get_single_colleagues['cl_name_eng']; ?>" required="">
                                    </div><br>

                                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                        <label for="runame">Əməkdaşın adı (ru)</label>
                                        <input type="text" name="runame" id="runame" class="form-control" value="<?php echo $get_single_colleagues['cl_name_ru']; ?>" required="">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="description">Əməkdaş haqqında</label> <br>
                                    <textarea name="description" id="description" cols="10" rows="5" class="form-control" required=""><?php echo $get_single_colleagues['cl_description']; ?></textarea>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="engdescription">Əməkdaş haqqında(eng)</label> <br>
                                    <textarea name="engdescription" id="engdescription" cols="10" rows="5" class="form-control" required=""><?php echo $get_single_colleagues['cl_description_eng']; ?></textarea>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="rudescription">Əməkdaş haqqında(ru)</label> <br>
                                    <textarea name="rudescription" id="rudescription" cols="10" rows="5" class="form-control" required=""><?php echo $get_single_colleagues['cl_description_ru']; ?></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <a href="<?php echo base_url('colleagues'); ?>">
                                    <button type="submit" class="btn btn-primary form-control">Update</button>
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/scripts'); ?>