<?php include('header.php') ?>
<!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->

                        <div class="content-header">
                            <div class="header-section">
                              <h1>
                                <!-- <i class="fa fa-table"></i> -->
                                <small>Welcome </small>TICKET BOOKING
                              </h1>
                            </div>
                          </div>


                        <!-- Basic Form Elements Block -->
                        <!-- Datatables Content -->
          <div class="block full">
            <div class="block-title">
              <h2><strong>Ticket</strong> Booking</h2>
            </div>
            <div class="table-responsive">
              <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">ID</th>
                     
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Bus No.</th>
                    <th>Route</th>
                    <th>Seat No.</th>
                    <th>Amount</th>
                    <th>Journey Date</th>
                    <th>Arrival Time</th>
                    <th>Departure Time</th>
                    <th>Booked Date</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $fetchdata = new DB_con();
                    $raw1 = $fetchdata->fetch_ticket_data();
                    while($rw=mysqli_fetch_array($raw1))
                    {
                  ?>
                  <tr>
                    <td class="text-center"><?php echo htmlentities($rw['id']);?></td>
                     
                    <td><a href="javascript:void(0)"><?php echo htmlentities($rw['name']);?></a></td>
                    <td><?php echo htmlentities($rw['contact']);?></td>
                    <td><?php echo htmlentities($rw['busnum']);?></td>
                    <td><?php echo htmlentities($rw['route']);?></td>
                    <td><?php echo htmlentities($rw['seatnum']);?></td>
                    <td><?php echo htmlentities($rw['price']);?></td>
                    <td><?php echo htmlentities($rw['jdate']);?></td>
                    <td><?php echo htmlentities($rw['atime']);?></td>
                    <td><?php echo htmlentities($rw['dtime']);?></td>
                    <td><?php echo htmlentities($rw['bdate']);?></td>
                    <td class="text-center">
                      <div class="btn-group">
          
                        <a href="delete2.php?id=<?php echo htmlentities($rw['id']); ?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

<?php 
                    }
?>
                </tbody>
              </table>
              
            </div>
          </div>
                        <!-- END Basic Form Elements Block -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                <?php include('footer.php') ?>
