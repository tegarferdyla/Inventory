<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard Stok - Gallery Namia</title>
  <!-- <link rel="apple-touch-icon" href="<?php echo base_url('app-assets/images/ico/apple-icon-120.png') ?>"> -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('app-assets/images/ico/favicon.ico') ?>"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/vendors.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/extensions/unslider.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/weather-icons/climacons.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/meteocons/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/charts/morris.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/tables/datatable/datatables.min.css') ?>">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/app.css') ?>">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/menu/menu-types/vertical-menu-modern.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/simple-line-icons/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/pages/timeline.css') ?>">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="index.html">
              <!-- <img class="brand-logo" alt="stack admin logo" src="<?php echo base_url('') ?>app-assets/images/logo/stack-logo-light.png"> -->
              <h2 class="brand-text">Gallery Namia</h2>
            </a>
          </li>
          <!-- <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li> -->
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block" title="Expand"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item nav-search" title="Search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Cari Barang ...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-language nav-item"><a class="nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" title="Indonesia"><i class="flag-icon flag-icon-id"></i><span class="selected-language"></span></a>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" title="Notifikasi"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up">2</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header" >
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                    <span class="notification-tag badge badge-default badge-danger float-right m-0">2 Peringatan</span>
                  </h6>
                </li>
                <li class="scrollable-container media-list">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Stok barang akan habis !</h6>
                        <p class="notification-text font-small-3 text-muted">Baju Anak Baru - Bagus Banget</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-octagon icon-bg-circle bg-red"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red">Stok barang habis !</h6>
                         <p class="notification-text font-small-3 text-muted">Baju Gamis Ala Princess</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url('app-assets/images/portrait/small/'.$user['foto_user']) ?>" alt="avatar"><i></i></span>
                <span class="user-name"><?php echo ucwords($user['nama_user']); ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?php echo base_url('stok/editprofile')?>"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-lock"></i>Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>