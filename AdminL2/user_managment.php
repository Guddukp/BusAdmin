<?php
require_once("function.php");
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

<?php include('header.php') ?>
<!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->

                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                     <small>WELCOME</small> USER MANAGMENT
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li class="mr-1">User</li>
                            <li><a href="">Details</a></li>
                        </ul>
                        <!-- User Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Datatables</strong> users</h2>
                            </div>

                            <div class="table-responsive">
                                
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                                    <thead>
                                        <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 51px;">ID</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;"><i class="gi gi-user"></i></th><th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="user: activate to sort column ascending" style="width: 99px;">user</th><th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">Email</th><th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Contact</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Actions</th></tr>
                                    </thead>
                                    <tbody>



       <?php
$fetch=new DB_con();
$raw=$fetch->fetchdata1();
while($row=mysqli_fetch_array($raw))
{

?>


                                    <tr role="row" class="odd">
                                            <td class="text-center sorting_1"><?php echo htmlentities($row['id']);?></td>
                                            <td class="text-center"><img class="img-fluid card-image" src="img/placeholders/avatars/<?php echo htmlentities($row['image']);?>" alt="avatar" class="img-circle "></td>
                                            <td><a href="javascript:void(0)"><?php echo htmlentities($row['name']);?></a></td>
                                            <td><?php echo htmlentities($row['email']);?></td>
                                            <td><span class=""><?php echo htmlentities($row['contact']);?></span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="user_profile.php?id=<?php echo htmlentities($row['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-eye"></i></a>
                                                    <a href="staff_delete1.php?id=<?php echo htmlentities($row['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
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
                  </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                <?php include('footer.php') ?>


</body>
</html>