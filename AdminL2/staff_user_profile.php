<?php
require_once("function.php");
error_reporting(0);
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
                <small>Welcome </small>USER
              </h1>
            </div>
          </div>

          <!-- admin profile -->
          <div class="row a-profile">
            <div class="col-lg-8">
              <!-- admin Info Block -->
              <div class="block">
                <!-- admin Info Title
                <div class="block-title">
                  <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>
                 END admin Info Title -->

                <!-- admin Info -->

 <?php 
         
        $fetch1=new DB_con();
        if(isset($_GET['id']))
        {
          $id=intval($_GET['id']);
          $raw2=$fetch1->fetchrecord1($id);
          $run=mysqli_fetch_array($raw2);
        }
        
        ?>


                <div class="block-section text-center">
                  <a href="">
                    <img style="width:45%;height:45%;" src="img/placeholders/avatars/<?php echo htmlentities($run['image']); ?>" alt="avatar" class="img-circle">
                  </a>
                  <h3>
                    <strong><?php echo htmlentities($run['name']); ?></strong><br><small></small>
                  </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                  <tbody>
                    <tr>
                        <td class="text-right"><strong>Gender</strong></td>
                        <td><?php echo htmlentities($run['gender']); ?></td>
                      </tr>
                    <tr>
                      <td class="text-right"><strong>Email Id</strong></td>
                      <td><?php echo htmlentities($run['email']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Contact</strong></td>
                      <td><?php echo htmlentities($run['contact']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Street</strong></td>
                      <td><?php echo htmlentities($run['street']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>City</strong></td>
                      <td><?php echo htmlentities($run['city']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>State</strong></td>
                      <td><?php echo htmlentities($run['state']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Status</strong></td>
                      <td><span class="label label-success"><i class="fa fa-check"></i> Active</span></td>
                    </tr>
                    <tr>

                  </tbody>
                </table>
                <!-- END admin Info -->
              </div>
            </div>
          </div>
      <!-- admin profile end -->

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
  <script>
    $(function() {
      Index.init();
    });
  </script>

</body>

</html>
