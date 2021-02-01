<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php include('header.php') ?>
<!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->

                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                     <small>WELCOME</small> ROUTE MANAGMENT
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Route</li>
                            <li><a href="">Details</a></li>
                        </ul>
                        <!-- User Datatables Content -->
                         <!-- User Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Datatables</strong> routes</h2>
                            </div>

                            <div class="table-responsive">
                                
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                                    <thead>
                                        <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 51px;">ID</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;">Routes</th> <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">From</th><th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">To</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;">Duration</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $fetchdata = new DB_con();
                                        $raw20 = $fetchdata->fetch_route_data();
                                        while($rw20=mysqli_fetch_array($raw20))
                                        {
                                            ?>

                                    <tr role="row" class="odd">
                                            <td class="text-center sorting_1"><?php echo htmlentities($rw20['id']);?></td>
                                            <td>Route</td>
                                             
                                            <td><?php echo htmlentities($rw20['from']);?></td>
                                            <td><span class="label  "><?php echo htmlentities($rw20['to']);?></span></td>
                                            <td><span class="label  "><?php echo htmlentities($rw20['duration']);?></span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="route_edit.php?id=<?php echo htmlentities($rw20['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
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
                     <!-- End User Datatable -->


                    </div>
                     <!-- End User Datatable -->


                    </div>
                  </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                <?php include('footer.php') ?>


</body>
</html>