<?php $this->load->view('admin/includes/headlinks');?>
<title>Create | Customers</title>

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
                <h4 class="text-themecolor">Create</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url($uri = 'customers_create_act'); ?>" method="post" enctype="multipart/form-data">                    

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 myinput">
                                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3">
                                    <label for="name">Müştəri adı</label>
                                    <input type="text" name="name" id="name" class="form-control" required="">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3">
                                    <label for="name">Müştəri adı (eng)</label>
                                    <input type="text" name="engname" id="name" class="form-control" required="">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3">
                                    <label for="name">Müştəri adı (ru)</label>
                                    <input type="text" name="runame" id="customerru" class="form-control" required="">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3" style="margin-left: 50px ;">
                                    <label for="img"> Şəkil <br>
                                        <img width="70px" height="45px;" src="<?php echo base_url("public/admin/assets/myimg/");?>folder.gif" alt="">
                                    </label> <br>
                                    <input type="file" name="images" id="img" class="form-control" hidden>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12" style="margin-top: 15px;">
                                <a href="<?php echo base_url('customers'); ?>">
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