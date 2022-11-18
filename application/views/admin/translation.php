<?php $this->load->view('admin/includes/headlinks');?>
<title>Tərcümə</title>
<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/leftbar'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Tərcümə</h4>
            </div>
        </div>

        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="ml-auto">
                                <a href="<?php echo base_url('translation_create');?>"><button class="btn btn-success">Create</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover" style=" overflow: hidden;">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Kursun adı</th>
                                    <th>Qiymət</th>
                                    <th>Categoy</th>
                                    <th>Status</th>
                                    <th>Şəkil</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $say=0; foreach($get_all_translation as $translation_key){ $say++; ?>
                                    <tr>
                                        <td class="text-center"><?php echo $say; ?></td>
                                        <td class="txt-oflo"><?php echo $translation_key['tr_name'];?></td>
                                        <td><span class="text-success"><?php echo $translation_key['tr_price'];?>₼</span></td>
                                        <td><?php echo $translation_key['tr_category'];?></td>
                                        <td><?php echo $translation_key['tr_status']; ?></td>
                                        <td>                                    
                                            <img width="70px" height="50px" src="<?php echo base_url('uploads/translation/'.$translation_key['tr_img']);?>" alt="">
                                        </td>
                                        <td style="width: 150px;">
                                            <a href="<?php echo base_url('translation_view/'.$translation_key['tr_id']);?>"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo base_url('translation_update/'.$translation_key['tr_id']); ?>"><i class="fa fa-pencil" style="margin: 0px 10px;"></i></a>
                                            <a onclick="return confirm ('Are you sure to delete this item?')" href="<?php echo base_url('translation_delete/'.$translation_key['tr_id']); ?>"><i class="fa fa-eraser"></i></a>
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