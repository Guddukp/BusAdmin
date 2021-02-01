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

  <?php include('staff_header.php') ?>
<!-- END Header -->
<!-- Page content -->
<div id="page-content">
          <!-- Dashboard Header -->

          <div class="content-header">
            <div class="header-section">
              <h1>
                <small>WELCOME TO</small> Pending Work Everthing will be Replace 
              </h1>
            </div>
          </div>
          <!-- Search Styles Block -->
          <div class="block">
            <!-- Search Styles Title -->
            <div class="block-title">
              <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#search-tab-profile">Agent Members</a></li>
                <li><a href="#search-tab-update">Add Agent Member</a></li>
              </ul>
            </div>
            <!-- END Search Styles Title -->

            <!-- Search Styles Content -->
            <div class="tab-content">
              <!-- Projects Search -->
              <div class="tab-pane active" id="search-tab-profile">
                <!-- agent profile -->
                <div>
                <div class="row a-profile">
                  <div class="col">
                    <div class="table-responsive">
                      <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                         
                        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 51px;">ID</th>
                              <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;"><i class="fa fa-user"></i></th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="staff: activate to sort column ascending" style="width: 99px;">Name</th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">Email</th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Contact</th>
                              <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
$fetch=new DB_con();
$raw=$fetch->fetchdata();
while($row=mysqli_fetch_array($raw))
{
?>     
        
        

                               <tr role="row" class="odd">
                                            <td class="text-center sorting_1"><?php echo htmlentities($row['id']);?></td>
            <td class="text-center "><img  class="img-fluid card-image"src="img/placeholders/avatars/<?php echo htmlentities($row['image']);?>" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)"><?php echo htmlentities($row['name']);?></a></td>
                                            <td><?php echo htmlentities($row['email']);?></td>
                                            <td class="text-center"><span class="label "><?php echo htmlentities($row['contact']);?></span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="staff_agent_profile.php?id=<?php echo htmlentities($row['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-eye"></i></a>
                                                    <a href="delete.php?id=<?php echo htmlentities($row['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>


<?php }?>

                          </tbody>
                        </table>
                      </div>
                      </div>
                    </div>
                    <!-- End staff Datatable -->
                  </div>
                </div>
                <!-- agent profile end -->
              </div>
              <!-- END Projects Search -->

              <!-- Images Search -->
              <div class="tab-pane" id="search-tab-update">
                <!-- Basic Form Elements Block -->
                <div class="block">
                  <!-- Basic Form Elements Title -->
                  <div class="block-title">
                    <h2><strong>Add</strong> Details</h2>
                  </div>
                  <!-- END Form Elements Title -->


                  <!-- Admin Form Content -->
                  <!-- Admin Form Content -->
                  <form class="form-bordered " method="post">
                            <div class="form-group">
                
                      <div class="profile-images-card">
  <div class="profile-images">
    <img src="img/placeholders/avatars/avatar15@2x.jpg" style="height:200px" id="upload-img">
  </div>
  <div class="custom-file">
    <label for="fileupload">Upload Profile</label>
    <input type="file" id="fileupload" name="image">
  </div>
</div>





 <script src="js/jquery-latest.min.js"></script>
<script>
  $(function(){
    $("#fileupload").change(function(event) {
      var x = URL.createObjectURL(event.target.files[0]);
      $("#upload-img").attr("src",x);
      console.log(event);
    });
  })
</script>

                               


                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                    <input type="text" id="example-staffname" name="name" class="form-control" placeholder="Agent Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                    <input type="text" id="example-email" name="agency" class="form-control" placeholder="Agency">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" id="contact" name="contact" class="form-control" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                    <input type="text" id="example-email" name="subscription" class="form-control" placeholder="Subscription">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                    <input type="text" id="example-email" name="age" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                    <input type="text" id="example-email" name="wallet" class="form-control" placeholder="Wallet">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <input type="text" id="street" name="street" class="form-control" placeholder="New Street">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <input type="text" id="city" name="city" class="form-control" placeholder="Staff City">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <input type="text" id="state" name="state" class="form-control" placeholder="Staff State">
                                </div>
                            </div>

                             
                            <div class="form-group form-actions">
                                <button type="submit"name="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Add</button>
                            </div>

<?php

$conn=mysqli_connect("localhost","root","","bus_reservation");
                                     

      if(isset($_POST['submit']))
      {
        $image=$_POST['image'];
        $name=$_POST['name'];
        $agency=$_POST['agency'];
        $conatct=$_POST['contact'];
        $email=$_POST['email'];
        $subscription=$_POST['subscription'];
        $age=$_POST['age'];
        $wallet=$_POST['wallet'];
        $street=$_POST['street'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $sql1="UPDATE `agent_management` `staff`(`image`, `name`,`agency`,`contact`, `email`,`subscription`,`age`, `wallet`,`street`, `city`, `state`) VALUES ('$image','$name','$agency','$contact','$email','$subscription','$age','$wallet','$street','$city','$state')";
        $sun=mysqli_query($conn,$sql1);
        echo "<script>window.location.href = 'agent_managment.php';</script>";

       }


?>

                  </form>
                  <!-- END Admin Form Content -->
                </div>
                <!-- END Basic Form Elements Block -->
              </div>
              <!-- END Images Search -->

            </div>
            <!-- END Images Search -->

          </div>
          <!-- END Search Styles Content -->
        </div>
    <!-- END Page Content -->


                     

                    <!-- Footer -->
                <?php include('staff_footer.php') ?>


</body>
</html>