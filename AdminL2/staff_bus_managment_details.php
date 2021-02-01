<!DOCTYPE html>
<html>
<head>
  <title></title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('staff_header.php') ?>
<!-- END Header -->
<!-- Page content -->
<div id="page-content">
          <!-- Dashboard Header -->

          <div class="content-header">
            <div class="header-section">
              <h1>
                <small>Welcome </small>BUS MANAGMENT
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
           $raw2=$fetch1->fetchrecord4($id);
           $run=mysqli_fetch_array($raw2);
         }
         
         ?>

<table class="table table-borderless table-striped table-vcenter">
                  <tbody>
                    <tr>
                        <td class="text-right"><strong>Bus Agency:</strong></td>
                        <td><?php echo htmlentities($run['busagency']); ?></td>
                      </tr>
                    <tr>
                     


                      <td class="text-right"><strong>Bus Name:</strong></td>
                      <td><?php echo htmlentities($run['bus_name']); ?></td>
                    </tr>

                    <tr>
                        <td class="text-right"><strong>Bus Number:</strong></td>
                        <td><?php echo htmlentities($run['bus_number']); ?></td>
                      </tr>
                    <tr>
                     


                      <td class="text-right"><strong>Bus Type:</strong></td>
                      <td><?php echo htmlentities($run['bus_type']); ?></td>
                    </tr>
                    
                    <tr>
                        <td class="text-right"><strong>Total Seats:</strong></td>
                        <td><?php echo htmlentities($run['total_seats']); ?></td>
                      </tr>
                    <tr>
                     


                      <td class="text-right"><strong>Available Seats:</strong></td>
                      <td><?php echo htmlentities($run['available_seats_']); ?></td>
                    </tr>
                    

                    <tr>
                      <td class="text-right"><strong>Route:</strong></td>
                      <td><?php echo htmlentities($run['route']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Start Point:</strong></td>
                      <td><?php echo htmlentities($run['start_point']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Start Time:</strong></td>
                      <td><?php echo htmlentities($run['start_time']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Drop Point:</strong></td>
                      <td><?php echo htmlentities($run['drop_point']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Drop Time:</strong></td>
                      <td><span class="text-right"> <?php echo htmlentities($run['drop_time']); ?></span></td>
                    </tr>

                    <tr>
                      <td class="text-right"><strong>Ratings:</strong></td>
                      <td><?php echo htmlentities($run['ratings']); ?></td>
                    </tr>


                    <tr>
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
<?php include('staff_footer.php') ?>
</body>
</html>