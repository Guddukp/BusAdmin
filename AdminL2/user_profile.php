<?php
require_once("function.php");
error_reporting(0);
?>

<?php include('header.php') ?>
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
                    <img src="img/placeholders/avatars/<?php echo htmlentities($run['image']); ?>" alt="avatar" class="img-circle profile-image">
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
    <?php include('footer.php') ?>
