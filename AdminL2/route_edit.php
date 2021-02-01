<?php include('header.php') ?>
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

                            <?php 
                                include_once('function.php');
                                $fetch1=new DB_con();
                                if(isset($_GET['id']))
                                {
                                $id=intval($_GET['id']);
                                $raw21=$fetch1->fetch_route_record($id);
                                $run21=mysqli_fetch_array($raw21);
                                }
        
                            ?>
                            <!-- Admin Form Content -->
                            <form class="form-bordered" method="post">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map"></i> From</span>
                                        <input type="text" name="from" id="example-routefrom"   class="form-control" placeholder="From" value="<?php echo htmlentities($run21['from']); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map"></i> To</span>
                                        <input type="text" name="to" id="example-routeto"   class="form-control" placeholder="To" value="<?php echo htmlentities($run21['to']); ?>">
                                    </div>
                                </div>
                                 
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map"></i> Duration </span>
                                        <input type="text" name="duration" id="example-routedistance"   class="form-control" placeholder="Distance" value="<?php echo htmlentities($run21['duration']); ?>">
                                    </div>
                                </div>

                                <div class="form-group form-actions">
                                    <button type="submit" class="btn btn-sm btn-danger" name="submit"><i class="fa fa-power"></i> Update</button>
                                </div>
                                <?php
                                    $conn=mysqli_connect("localhost","root","","bus_reservation");
                                    if(isset($_POST['submit']))
                                    {
                                        $id=intval($_GET['id']);
                                        $from=$_POST['from'];
                                        $to=$_POST['to'];
                                        $stop=$_POST['stop'];
                                        $duration=$_POST['duration'];

                                        $sql1="UPDATE `route_management` SET `from`='$from',`to`='$to',`duration`='$duration' WHERE id='$id'";
                                        $sun=mysqli_query($conn,$sql1);

                                        echo "<script>window.location.href = 'route_edit.php';</script>";
                                    }
                                ?>
                            </form>
                            <!-- END Admin Form Content -->
                        </div>
                        <!-- END Basic Form Elements Block -->
                        </div>
                        <!-- END Basic Form Elements Block -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                <?php include('footer.php') ?>
