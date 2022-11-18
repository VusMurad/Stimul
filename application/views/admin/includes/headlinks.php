<?php
if (!isset($_SESSION['admin_id'])) {
    $this->session->set_flashdata('error', 'İstifadəçi adı və şifrə daxil edin!');
    redirect(base_url('login'));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Elegant admin lite design, Elegant admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description" content="Elegant Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <!-- <title>Elegant Admin Lite Template by WrapPixel</title> -->
    <link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/admin/'); ?>assets/myimg/logo.png">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url('public/admin/'); ?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="<?php echo base_url('public/admin/'); ?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/admin/'); ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url('public/admin/'); ?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/'); ?>assets/dist/css/pages/admin.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div>