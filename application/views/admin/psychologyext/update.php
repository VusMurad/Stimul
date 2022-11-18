<?php $this->load->view('admin/includes/headlinks'); ?>
<title>Update | Psixologiya</title>

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
                        <form action="<?php echo base_url($uri = "update_psychology_act/" . $get_single_psychology['p_id']); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">
                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="img"> Şəkli dəyişmək üçün tıklayın <br>
                                        <?php if ($get_single_psychology['p_img']) { ?>
                                            <img width="100%" height="250px" src="<?php echo base_url('uploads/psychology/' . $get_single_psychology['p_img']); ?>" alt="">
                                        <?php } ?>
                                        <input type="file" name="images" id="img" class="form-control" hidden>
                                    </label>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
                                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                        <label for="name">Kursun adı</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $get_single_psychology['p_name']; ?>" required="">
                                    </div><br>

                                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                        <label for="engname">Kursun adı</label>
                                        <input type="text" name="engname" id="engname" class="form-control" value="<?php echo $get_single_psychology['p_name_eng']; ?>" required="">
                                    </div><br>

                                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                        <label for="runame">Kursun adı</label>
                                        <input type="text" name="runame" id="runame" class="form-control" value="<?php echo $get_single_psychology['p_name_ru']; ?> " required="">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="description">Kurs haqqında</label> <br>
                                    <textarea name="description" id="description" cols="20" rows="5" class="form-control" required=""><?php echo $get_single_psychology['p_description']; ?></textarea>
                                </div>
                                <br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="engdescription">Kurs haqqında(eng)</label> <br>
                                    <textarea name="engdescription" id="engdescription" cols="20" rows="5" class="form-control" required=""><?php echo $get_single_psychology['p_description_eng']; ?></textarea>
                                </div>
                                <br>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="rudescription">Kurs haqqında(ru)</label> <br>
                                    <textarea name="rudescription" id="rudescription" cols="20" rows="5" class="form-control" required=""><?php echo $get_single_psychology['p_description_ru']; ?></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">
                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="price">Qiymət</label> <br>
                                    <input type="text" name="price" id="price" placeholder="" class="form-control" value="<?php echo $get_single_psychology['p_price']; ?>" required="">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="category">Category</label><br>
                                    <select name="category" id="category" class="form-control" required="">
                                        <option <?php if ($get_single_psychology['p_category'] == "") {
                                                    echo "SELECTED";
                                                } ?> value="">Select</option>
                                        <option <?php if ($get_single_psychology['p_category'] == "Course") {
                                                    echo "SELECTED";
                                                } ?> value="Course">Course</option>
                                        <option <?php if ($get_single_psychology['p_category'] == "Service") {
                                                    echo "SELECTED";
                                                } ?>value="Service">Service</option>
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="status">Status</label> <br>
                                    <select name="status" id="category" class="form-control" required="">
                                        <option <?php if ($get_single_psychology['p_status'] == "") {
                                                    echo "SELECTED";
                                                } ?> value="">Select</option>
                                        <option <?php if ($get_single_psychology['p_status'] == "Active") {
                                                    echo "SELECTED";
                                                } ?> value="Active">Active</option>
                                        <option <?php if ($get_single_psychology['p_status'] == "Deactive") {
                                                    echo "SELECTED";
                                                } ?> value="Deactive">Deactive</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <a href="<?php echo base_url('psychology'); ?>">
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