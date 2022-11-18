<?php $this->load->view('admin/includes/headlinks'); ?>
<title>All Courses</title>
<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/leftbar'); ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">All Courses</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">All Courses</li>
                    </ol>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="all_course_create_act" method="post">

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4" style="float: left ;">
                                    <label for="name">Kursun adı </label> <br>
                                    <input type="text" name="name" id="name" value="" placeholder="" class="form-control">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4" style="float: left ;">
                                    <label for="engname">Kursun adı (eng)</label> <br>
                                    <input type="text" name="engname" id="engname" value="" placeholder="" class="form-control">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4" style="float: left ;">
                                    <label for="runame">Kursun adı(ru)</label> <br>
                                    <input type="text" name="runam" id="runame" value="" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="description">Kurs haqqında</label> <br>
                                <textarea name="description" id="description" cols="10" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="engdescription">Kurs haqqında(eng)</label> <br>
                                <textarea name="engdescription" id="engdescription" cols="10" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <label for="rudescription">Kurs haqqında(ru)</label> <br>
                                <textarea name="rudescription" id="rudescription" cols="10" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4" style="float: left ;">
                                    <label for="price">Qiymət </label> <br>
                                    <input type="text" name="price" id="price" value="" placeholder="" class="form-control">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4" style="float: left ;">
                                    <label for="category">Category</label> <br>
                                    <select name="category" id="category" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Course">Course</option>
                                        <option value="Service">Service</option>
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4" style="float: left ;">
                                    <label for="status">Status</label> <br>
                                    <select name="status" id="category" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                    </select> <br><br>
                                </div> 

                                

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <a href="">
                                        <button class="btn btn-primary form-control">Send</button>
                                    </a>
                                </div>


                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php $this->load->view('admin/includes/scripts'); ?>