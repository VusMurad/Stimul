<?php $this->load->view('admin/includes/headlinks'); ?>
<title>Colleagues</title>
<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/leftbar'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Colleagues</h4>
            </div>
        </div>

        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } ?>

        <div class="row">
            <!-- column -->
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="ml-auto">
                                <a href="<?php echo base_url('colleagues_create');?>"><button class="btn btn-success">Create</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" style=" overflow: hidden;">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Əməkdaşın adı</th>
                                    <th>Əməkdaşın adı (eng)</th>
                                    <th>Əməkdaşın adı (ru)</th>
                                    <th>Şəkil</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $say = 0; foreach ($get_all_colleagues as $colleagues_key) {$say++; ?>

                                <tr>
                                    <td class="text-center"><?php echo $say; ?></td>
                                    <td class="txt-oflo"><?php echo $colleagues_key['cl_name'];?></td>
                                    <td class="txt-oflo"><?php echo $colleagues_key['cl_name_eng'];?></td>
                                    <td class="txt-oflo"><?php echo $colleagues_key['cl_name_ru'];?></td>
                                    
                                    <td>
                                        <img width="70px" height="50px" src="<?php echo base_url('uploads/colleagues/'.$colleagues_key['cl_img']);?>" alt="">
                                    </td>
                                    <td style="width: 150px;">
                                        <a href="<?php echo base_url('colleagues_view/'.$colleagues_key['cl_id']);?>"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo base_url('colleagues_update/'.$colleagues_key['cl_id']);?>"><i class="fa fa-pencil" style="margin: 0px 10px;"></i></a>
                                        <a onclick="return confirm ('Are you sure to delete this item?')" href="<?php echo base_url('colleagues_delete/'.$colleagues_key['cl_id']);?>"><i class="fa fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/scripts'); ?>