<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/admin/'); ?>assets/myimg/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('public/user/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/'); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url('public/user/'); ?>assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="<?php echo base_url('public/user/'); ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url('public/user/'); ?>assets/css/lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url('public/user/'); ?>assets/css/mycss.css">
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

    <!-- Sub Header -->
    <div class="sub-header" style="overflow:hidden ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">
                        <div class="left-content">
                            <ul>
                                <li><a href="https://www.facebook.com/Stimul.edu.az/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/STIMUL_AZ" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/stimul.az/" target="_blank"><i class="fa fa-instagram" target="_blank"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-linkedin" target="_blank"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <select class="myselect" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                            <option value="azerbaijan" <?php if ($this->session->userdata('site_lang') == 'azerbaijan') echo 'selected="selected"'; ?>>Az</option>
                            <option value="english" <?php if ($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>En</option>
                            <option value="russian" <?php if ($this->session->userdata('site_lang') == 'russian') echo 'selected="selected"'; ?>>Ru</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>