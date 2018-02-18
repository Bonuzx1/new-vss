<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'config.php';
if(is_logged_in()){
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VSS <?php if (isset($_SESSION['isadminn']) && $_SESSION['isadminn']==0) { echo "Vendor"; } else{ echo "Admin"; } ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?dashboard">
          
          <?php if ($_SESSION['isadminn'] == 1) { ?>
          VSS Admin</a>
          <?php } else { ?>
            VSS Vendor </a>
          <?php } ?>
        </div>
        <?php echo $_SESSION['isadminn']; ?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <!--my nav link goes here-->
              <li><a href="index.php?dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <?php if ($_SESSION['isadminn'] == 1) { ?>
              <li><a href="index.php?users"><i class="fa fa-users"></i> Users</a></li>
              <li><a href="index.php?voucher"><i class="fa fa-credit-card"></i> Vouchers</a></li>
              <li><a href="index.php?orders"><i class="fa fa-money"></i> Orders</a></li>
              <?php } else { ?>
                  <li><a href="index.php?voucher=new"><i class="fa fa-users"></i> Purchase Voucher</a></li>
                  <li><a href="index.php?orders"><i class="fa fa-users"></i> Order History</a></li>

              <?php } ?>
              
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Check this  <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Checking</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <!--user dropdown-->
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username']?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?profile"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="index.php?setting"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><?php if ($_SESSION['isadminn'] == 1) { echo 'VSS Admin';  } else { echo 'VSS Vendor'; } ?> <small>Dashboard</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php?dashboard"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Welcome</li>
            </ol>
          </div>
        </div><!-- /.row -->