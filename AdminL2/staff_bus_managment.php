<?php
    require_once("function.php");
    error_reporting(0);
?>


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
            <!-- <i class="fa fa-table"></i> -->
                <small>Welcome </small>BUS MANAGMENT
              </h1>
            </div>
          </div>
          <!-- new section add here -->
          <!-- User Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Datatables</strong> Bus</h2>
                            </div>

                            <div class="table-responsive">
                                
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                                    <thead>
                                    <tr role="row">
                                          <th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 51px;">ID</th>
                                          <!-- <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;"><i class="gi gi-user"></i></th> -->
                                          <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="bus: activate to sort column ascending" style="width: 99px;">Bus Agency</th>
                                            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="bus: activate to sort column ascending" style="width: 99px;">Bus Name</th>


                                          <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">Bus Number</th>
                                          <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Bus Type</th>
                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Total Seats</th>
                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Available Seats</th>
                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Route</th>

                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Start Point</th>

                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Start Time</th>

                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Drop Point</th>

                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Drop Time</th>





                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Ratings</th>
                                          <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                $fetchdata = new DB_con();
                                $raw1 = $fetchdata->fetchdata4();
                                while($rw=mysqli_fetch_array($raw1))
                                {
                                    ?>
                                  <tr role="row" class="odd">
                                            <td class="text-center sorting_1">1</td>
                                            <!-- <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td> -->
                                            <td style="text-align:center"><a href="javascript:void(0)" ><?php echo htmlentities($rw['busagency']);?></a></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['bus_name']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['bus_number']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['bus_type']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['total_seats']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['available_seats_']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['route']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['start_point']);?></td>
                                            <td style="text-align:center"><span class=""><?php echo htmlentities($rw['start_time']);?></span></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['drop_point']);?></td>
                                            <td style="text-align:center"><?php echo htmlentities($rw['drop_time']);?></td>
                                            <td style="text-align:center">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star-half" aria-hidden="true"></i>
                                            </td>


                                            <td class="text-center">
                                                <div class="btn-group">
                                                     <a href="staff_bus_managment_details.php?id=<?php echo htmlentities($rw['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="View"><i class="fa fa-eye"></i></a> 
                                                    <a href="staff_delete5.php?id=<?php echo htmlentities($rw['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                       <?php }?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     <!-- End User Datatable -->


                    </div>
                    <!-- Ende User Datatable -->
        </div>
        <!-- END Page Content -->

        <!-- Footer -->
    <?php include('staff_footer.php') ?>


</body>
</html>