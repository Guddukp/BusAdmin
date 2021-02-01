<?php
error_reporting(0);
session_start();
require_once("function.php");



?>
 

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">

  <title>Bus Brand</title>

  <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
  <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
  <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
  <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
  <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
  <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
  <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
  <!-- END Icons -->

  <!-- Stylesheets -->
  <!-- Bootstrap is included in its original form, unaltered -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Related styles of various icon packs and plugins -->
  <link rel="stylesheet" href="css/plugins.css">

  <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
  <link rel="stylesheet" href="css/main.css">

  <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

  <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
  <link rel="stylesheet" href="css/themes.css">
  <!-- END Stylesheets -->
   
  


  
  <!-- Modernizr (browser feature detection library) -->
  <script src="js/vendor/modernizr.min.js"></script>
</head>

<body>
  <!-- Page Wrapper -->
  <div id="page-wrapper">

    <!-- Page Container -->
    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


      <!-- Main Sidebar -->
      <div id="sidebar">
        <!-- Wrapper for scrolling functionality -->
        <div id="sidebar-scroll">
          <!-- Sidebar Content -->
          <div class="sidebar-content">

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
              <div class="sidebar-user-avatar">
                <a href="admin_profile.php">
                  <?php
                  $db = new DB_con;
                  $q = "SELECT * FROM admin WHERE id={$_SESSION['id']}";
                  $r = mysqli_query($db->dbh,$q);
                  $d = mysqli_fetch_array($r);


                  ?>
            <img src="img/placeholders/avatars/<?=$d['img']?>" alt="avatar">
                </a>
              </div>
              <div class="sidebar-user-name">
                <h3><?=$d['name']?></h3>
                </div>
            </div>
            <!-- END User Info -->




            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">

              <li>
                <a href="dashboard.php" class=" active"><i class="fas fa-columns sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
              </li>
              <br>
              <li>
                <a href="agent_managment.php" class=" active"><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Agent Management</span></a>
              </li>
              <br>
              <li>
                <a href="bus_managment.php" class=" active"><i class="fa fa-truck sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Bus Management</span></a>
              </li>
              <br>
              <li>
                <a href="route_management.php" class=" active"><i class="fa fa-road sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Route Management</span></a>
              </li>
              <br>
              <li>
                <a href="staff.php" class=" active"><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Staff</span></a>
              </li>
              <br>
              <li>
                <a href="ticket_booking.php" class=" active"><i class="fa fa-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Ticket Booking</span></a>
              </li>
              <br>
              <li>
                <a href="user_managment.php" class=" active"><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Management</span></a>
              </li>
              <br>
              <li>
                <a href="admin_offer.php" class=" active"><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Offers</span></a>
              </li>
              <br>
              <li>
                <a href="logout.php" class=" active"><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a>
              </li>
            </ul>

            <!-- END Sidebar Navigation -->


          </div>
          <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
      </div>
      <!-- END Main Sidebar -->


      <!-- Main Container -->
      <div id="main-container">
        <!-- Header -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
        <header class="container-fluid  navbar navbar-default">
          <!-- Left Header Navigation -->
          <ul class="nav navbar-nav-custom">
            <!-- Main Sidebar Toggle Button -->
            <li>
              <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                <i class="fa fa-bars fa-fw"></i>
              </a>
            </li>
            <!-- END Main Sidebar Toggle Button -->


          </ul>
          <!-- END Left Header Navigation -->

          <!-- Search Form -->
          <form  method="post" class="container-fluid  navbar-form-custom">
            <div class="form-group">
             <!--  <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search.."> -->
            </div>
          </form>
          <!-- END Search Form -->
          <!--start body-->

          <!--End body-->

        </header>
        <!-- END Header -->
