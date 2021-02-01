<?php
error_reporting(0);
session_start();
// // if(!isset($_SESSION['admin'])){
// //   header('location:admin_login.php');
// }



require_once("function.php");

?>
 

<?php include('staff_header.php') ?>
<!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->

                        <div class="content-header">
                            <div class="header-section">

                              <?php
                  $db = new DB_con;
                  $q = "SELECT * FROM staff WHERE id={$_SESSION['id']}";
                  $r = mysqli_query($db->dbh,$q);
                  $d = mysqli_fetch_array($r);


                  ?>
                                <h1>
                                    <small>Welcome </small><?=$d['name']?>
                                </h1>
                            </div>
                        </div>
                      <!-- Simple Widget area -->
                        <div class="row">
                            <!-- <div class="col-sm-6 col-lg-3">
                                <a href="admin_profile.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-user fa-3x"></i>
                                            <center>
                                              <strong>Admin</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>1</strong><br>
                                                    <small>Admin</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
 -->
                            <div class="col-sm-6 col-lg-3">
                                <a href="staff_agent_managment.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-users fa-3x"></i>
                                            <center>
                                              <strong>Agent Management</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>10</strong><br>
                                                    <small>Number of Agents</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="staff_bus_managment.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-truck fa-3x"></i>
                                            <center>
                                              <strong>Bus Management</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>20</strong><br>
                                                    <small>Number of Buses</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="staff_route_management.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-road fa-3x"></i>
                                            <center>
                                              <strong>Route Management</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>17</strong><br>
                                                    <small>Number of Routes</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- <div class="col-sm-6 col-lg-3">
                            <a href="staff.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-users fa-3x"></i>
                                            <center>
                                              <strong>Staff</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>5</strong><br>
                                                    <small>Number of Staff</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> -->

                            <div class="col-sm-6 col-lg-3">
                                <a href="staff_ticket_booking.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-money fa-3x"></i>
                                            <center>
                                              <strong>Ticket Booking</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>23</strong><br>
                                                    <small>Tickets Booked</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="staff_user_managment.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-users fa-3x"></i>
                                            <center>
                                              <strong>User Management</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>50</strong><br>
                                                    <small>Number of Users</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="staff_admin_offer.php" class="widget widget-hover-effect1">
                                    <div class="widget-simple themed-background">
                                      <h4 class="widget-content widget-content-light">
                                          <i class="fa fa-user fa-3x"></i>
                                            <center>
                                              <strong>Offers</strong>
                                            </center>
                                      </h4>
                                    </div>
                                    <div class="widget-extra">
                                        <div class="row text-center">
                                            <div class="col">
                                                <h3>
                                                    <strong>7</strong><br>
                                                    <small>Number of Offers</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <!-- Simple Widgets end -->


                    </div>
                    <!-- END Page Content -->
                    <!-- Footer -->
                <?php include('staff_footer.php') ?>
