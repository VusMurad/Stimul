<?php $this->load->view('admin/includes/headlinks'); ?>
<title>Dashboard</title>
<?php $this->load->view('admin/includes/header'); ?>

<?php $this->load->view('admin/includes/leftbar'); ?>


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
        </div>

        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <!-- <div>
                                <h5 class="card-title">Sales Overview</h5>
                                <h6 class="card-subtitle">Check the monthly sales </h6>
                            </div> -->
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Adı</th>
                                        <th>Soyad</th>
                                        <th>Email</th>
                                        <th>Nömrə</th>
                                        <th>Tədrisin növü</th>
                                        <!-- <th>Əlavə qeyd</th> -->
                                        <th>Göndərilmə tarixi</th>
                                        <th>Operation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $say = 0;
                                    foreach ($get_all_message as $message_key) {
                                        $say++ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $say; ?></td>
                                            <td class="txt-oflo"><?php echo $message_key['us_name']; ?></td>
                                            <td class="txt-oflo"><?php echo $message_key['us_surname']; ?></td>
                                            <td><?php echo $message_key['us_email']; ?></td>
                                            <td><?php echo $message_key['us_phone']; ?></td>
                                            <td><?php echo $message_key['us_select']; ?></td>
                                            <!-- <td><?php echo $message_key['us_message']; ?></td> -->
                                            <td><?php echo $message_key['us_create_date']; ?></td>
                                            <td style="width: 150px;">
                                                <a style="margin-right: 10px ;" href="<?php echo base_url('user_reguest_view/' . $message_key['us_id']); ?>"><i class="fa fa-eye"></i></a>

                                                <a onclick="return confirm ('Are you sure to delete this item?')" href="<?php echo base_url('user_reguest_delete/' . $message_key['us_id']); ?>"><i class="fa fa-eraser"></i></a>
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