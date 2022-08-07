<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> <?= $title?> | CORANMAS </title>

	<!-- Bootstrap -->
	<link href="<?= base_url();?>assets/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url();?>assets/css/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= base_url();?>assets/css/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="<?= base_url();?>assets/css/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="<?= base_url();?>assets/css/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="<?= base_url();?>assets/css/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="<?= base_url();?>assets/css/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url();?>assets/css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="<?= base_url();?>assets/css/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="<?= base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?= base_url();?>assets/css/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
</head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url();?>" class="site_title"><i class="fa fa-user"></i> <span>Selamat Datang</span></a>
            </div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url();?>">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url();?>form/create">General Form</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url();?>form/statistik">Chart JS</a></li>
                    </ul>
                  </li>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
