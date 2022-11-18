<?php $this->load->view('admin/includes/headlinks') ?>
    <title>Create | Tərcümə</title>
<?php ; ?>
<?php $this->load->view('admin/includes/header'); ?>
<style>
    .myinput{
        display: flex;
        justify-content: left; 
    }
</style>
<?php $this->load->view('admin/includes/leftbar'); ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Create</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url($uri = 'colleagues_create_act'); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput" >                 
                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="name">Əməkdaşın adı</label>
                                    <input type="text" name="name" id="name" class="form-control" required="">
                                </div>          

                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="engname">Əməkdaşın adı (eng)</label>
                                    <input type="text" name="engname" id="engname" class="form-control" required="">
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
                                    <label for="runame">Əməkdaşın adı (ru)</label>
                                    <input type="text" name="runame" id="runame" class="form-control" required="">
                                </div>
                            </div>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12" > 
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="description">Əməkdaş haqqında</label> <br>
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control" required=""></textarea>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="engdescription">Əməkdaş haqqında (eng)</label> <br>
                                    <textarea name="engdescription" id="engdescription" cols="30" rows="5" class="form-control" required=""></textarea>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                    <label for="rudescription">Əməkdaş haqqında (ru)</label> <br>
                                    <textarea name="rudescription" id="rudescription" cols="30" rows="5" class="form-control" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput" >     

                                <div class="col-xs-12 col-sm-12 col-lg-1 col-md-1">
                                    <label style="margin-left: 10px ;" for="img"> Şəkil <br>
                                        <img width="70px" height="45px;" src=" <?php echo base_url("public/admin/assets/myimg/"); ?>folder.gif" alt="">
                                    </label> <br>
                                    <input type="file" name="images" id="img" class="form-control" hidden>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <a href="<?php echo base_url('colleagues');?>">
                                    <button type="submit" class="btn btn-primary form-control">Send</button>
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