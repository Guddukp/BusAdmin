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


      <?php

     Include('sidebar.php');

      ?>

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
        <header class="navbar navbar-default">
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
          <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
            <div class="form-group">
              <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
            </div>
          </form>
          <!-- END Search Form -->
          <!--start body-->

          <!--End body-->

        </header>
        <!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->

                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    ROUTE MANAGEMENT<br><small>you can add, edit and delete your data!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Route</li>
                            <li><a href="">Details</a></li>
                        </ul>

                        <!-- Basic Form Elements Block -->
                        <div class="block">
                            <!-- Basic Form Elements Title -->
                            <div class="block-title">
                                <h2><strong>Add</strong> Details</h2>
                            </div>
                            <!-- END Form Elements Title -->


                            <!-- Admin Form Content -->
                            <form action="page_forms_general.html" class="form-bordered" method="post" onsubmit="return false;">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                        <input type="text" id="example-routefrom" name="example-routefrom" class="form-control" placeholder="From">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                        <input type="email" id="example-routeto" name="example-routeto" class="form-control" placeholder="To">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-stop"></i></span>
                                        <input type="email" id="example-routstop" name="example-routestop" class="form-control" placeholder="Stopes">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                        <input type="email" id="example-routedistance" name="example-routedistance" class="form-control" placeholder="Distance">
                                    </div>
                                </div>

                                <div class="form-group form-actions">
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-power"></i> Update</button>
                                </div>
                            </form>
                            <!-- END Admin Form Content -->
                        </div>
                        <!-- END Basic Form Elements Block -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="#" target="_blank">myteam</a>
                        </div>
                        <div class="pull-left">
                            2020 &copy;
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>



        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/index.js"></script>
        <script>$(function(){ Index.init(); });</script>

    </body>
</html>
