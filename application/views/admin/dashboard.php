<?php $this->load->view('admin/includes/headlinks'); ?>
<title>Dashboard</title>
<?php $this->load->view('admin/includes/header'); ?>
<?php $this->load->view('admin/includes/leftbar'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="padding-top: 30px!important;">
                <div class="card oh">
                    <div class="card-body">
                        <div class="d-flex m-b-30 align-items-center no-block">
                            <h5 class="card-title ">İllik</h5>
                            <div class="ml-auto">
                                <ul class="list-inline font-12">
                                    <li><i class="fa fa-circle text-info"></i> Kurs</li>
                                    <li><i class="fa fa-circle text-primary"></i>Xidmət</li>
                                </ul>
                            </div>
                        </div>
                        <div id="morris-area-chart" style="height: 350px;"></div>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row text-center m-b-20">
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h2 class="m-b-0 font-light">500</h2><span class="text-muted">Ümumi</span>
                            </div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h2 class="m-b-0 font-light">350</h2><span class="text-muted">Kurs</span>
                            </div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h2 class="m-b-0 font-light">150</h2><span class="text-muted">Xidmət</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12" style="padding-top: 30px!important;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Courses</h4>
                    </div>
                    <ul class="feeds p-b-20 mycourse">
                        <li>
                            <div class="bg-info"><i class="fa fa-book"></i></div> <a href="<?php echo base_url('languages'); ?>">Languages</a>

                        </li>
                        <li>
                            <div class="bg-success"><i class="fa fa-laptop"></i></div> <a href="<?php echo base_url('computercourses'); ?>">Computer Courses</a>
                        </li>
                        <li>
                            <div class="bg-warning"><i class="fa fa-book"></i></div> <a href="<?php echo base_url('psychology'); ?>">Psychology</a>

                        </li>
                        <li>
                            <div class="bg-danger"><i class="fa fa-book"></i></div> <a href="<?php echo base_url('toefl'); ?>">TOEFL, IELTS, SAT, GMAT</a>
                        <li>
                            <div class="bg-dark"><i class="fa fa-book"></i></div> <a href="<?php echo base_url('acca'); ?>">ACCA, CIA, DipIFR, CFA</a>

                        </li>
                        <li>
                            <div class="bg-info"><i class="fa fa-paint-brush"></i></div><a href="<?php echo base_url('design'); ?>">Design courses</a>

                        </li>
                        <li>
                            <div class="bg-danger"><i class="fa fa-book"></i></div><a href="<?php echo base_url('prepearing'); ?>">Prepearing courses</a>
                        </li>
                        <li>
                            <div class="bg-dark"><i class="fa fa-book"></i></div><a href="<?php echo base_url('yos'); ?>">YÖS, TYS, ALES, YDS</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- </div>  -->
    </div>
</div>
</div>
<?php $this->load->view('admin/includes/scripts'); ?>