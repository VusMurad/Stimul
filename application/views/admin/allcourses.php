<?php $this->load->view('admin/includes/headlinks');?>
<title>ACCA, CIA, DipIFR, CFA</title>

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
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">

                            <div class="ml-auto">
                                <a href="allcourses_create"><button class="btn btn-success">Create</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Kursun adı</th>
                                    <th>Kursun adı(eng)</th>
                                    <th>Kursun adı(ru)</th>
                                    <th>Kurs haqqında</th>
                                    <th>Kurs haqqında(eng)</th>
                                    <th>Kurs haqqında(ru)</th>
                                    <th>Qiymət</th>
                                    <th>Categoy</th>
                                    <th>Status</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td class="txt-oflo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ullam? Quas accusantium aliquid quod reprehenderit delectus est vero minima modi at iure labore, quis ipsa, sint assumenda numquam aut optio.</td>
                                    <td class="txt-oflo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ullam? Quas accusantium aliquid quod reprehenderit delectus est vero minima modi at iure labore, quis ipsa, sint assumenda numquam aut optio.</td>
                                    <td class="txt-oflo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ullam? Quas accusantium aliquid quod reprehenderit delectus est vero minima modi at iure labore, quis ipsa, sint assumenda numquam aut optio.</td>
                                    <td><span class="text-success">$24</span></td>
                                    <td>Course</td>
                                    <td>Active</td>
                                    <td style="width: 150px;">
                                        <a href=""><i class="fa fa-eye"></i></a>
                                        <a href=""><i class="fa fa-pencil" style="margin: 0px 10px;"></i></a>
                                        <a href=""><i class="fa fa-eraser"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/scripts'); ?>