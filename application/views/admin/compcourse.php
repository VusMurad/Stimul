<?php $this->load->view('admin/includes/headlinks');?>
<title>Komputer kursları</title>

<?php $this->load->view('admin/includes/header'); ?>
<?php $this->load->view('admin/includes/leftbar'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Komputer kursları</h4>
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
                                <a href="<?php echo base_url("computercourses_create");?>"><button class="btn btn-success">Create</button></a>
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
                                <?php $say=0; foreach($get_all_compcourses as $comp_course){ $say++; ?>
                                    <tr>
                                    <td class="text-center"><?php echo $say; ?></td>
                                    <td class="txt-oflo"><?php echo $comp_course['c_name']; ?></td>
                                    <td><span class="text-success"> <?php echo $comp_course['c_price']; ?>₼</span></td>
                                    <td><?php echo $comp_course['c_category']; ?></td>
                                    <td><?php echo $comp_course['c_status']; ?></td>
                                    <td>                                    
                                        <img width="70px" height="50px" src="<?php echo base_url('uploads/compcourse/'.$comp_course['c_img']); ?>" alt="">
                                    </td>
                                    <td style="width: 150px;">
                                        <a href="<?php echo base_url('comp_view/').$comp_course['c_id'];?>"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo base_url('update_comp/').$comp_course['c_id'];?>"><i class="fa fa-pencil" style="margin: 0px 10px;"></i></a>
                                        <a onclick="return confirm ('Are you sure to delete this item?')" href="<?php echo base_url('delete_comp_act/').$comp_course['c_id']; ?>"><i class="fa fa-eraser"></i></a>
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