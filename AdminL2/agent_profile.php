
<?php
error_reporting(0);
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
                                    <small>WELCOME</small> AGENT PROFILE
                                </h1>
                            </div>
                        </div>
                    <!-- Search Styles Block -->
           <div class="block">
            <!-- Search Styles Title -->
            <div class="block-title">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active"><a href="#search-tab-profile">Profile</a></li>
                    <li><a href="#search-tab-update">Update</a></li>

                </ul>
            </div>
            <!-- END Search Styles Title -->

            <!-- Search Styles Content -->
            <div class="tab-content">
                <!-- Projects Search -->
                <div class="tab-pane active" id="search-tab-profile">
                     <!-- agent profile -->
          <div class="row a-profile">
            <div class="col-lg-8">
              <!-- agent Info Block -->
              <div class="block">
                <!-- agent Info Title
                <div class="block-title">
                  <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>
                 END admin Info Title -->


                <!-- agent Info -->
                <?php 
         include_once('function.php');
        $fetch1=new DB_con();
        if(isset($_GET['id']))
        {
          $id=intval($_GET['id']);
          $raw2=$fetch1->fetchrecord($id);
          $run=mysqli_fetch_array($raw2);
        }
        
        ?>
                <div class="block-section text-center">
                  <a href="javascript:void(0)">
                    <img class="img-fluid profile-image" src="img/placeholders/avatars/<?php echo htmlentities($run['image']); ?>" alt="avatar" class="img-circle">
                  </a>
                  <h3>
                    <strong><?php echo htmlentities($run['name']); ?></strong><br><small></small>
                  </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter ">

                 
                    <tbody>
                      <tr>
                          <td class="text-right"><strong>Agency:</strong></td>
                          <td><?php echo htmlentities($run['agency']); ?></td>
                      </tr>
                      <tr>
                          <td class="text-right"><strong>Contact:</strong></td>
                          <td><?php echo htmlentities($run['contact']); ?></td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>Email:</strong></td>
                        <td><?php echo htmlentities($run['email']); ?></td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>Age:</strong></td>
                        <td><?php echo htmlentities($run['age']); ?></td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>Wallet:</strong></td>
                        <td> <?php echo htmlentities($run['wallet']); ?>₹ </td>
                      </tr>
                      <tr>
                          <td class="text-right"><strong>Street:</strong></td>
                          <td><?php echo htmlentities($run['street']); ?></td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>City:</strong></td>
                        <td><?php echo htmlentities($run['city']); ?></td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>State:</strong></td>
                        <td><?php echo htmlentities($run['state']); ?></td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>Status:</strong></td>
                        <td><span class="label label-success"><i class="fa fa-check"></i> Active</span></td>
                      </tr>

                      



                    </tbody>

                  </table>


                <!-- END agent Info -->
              </div>
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
                            <h2><strong>UPDATE</strong> Details</h2>
                        </div>
                        <!-- END Form Elements Title -->


                        <!-- Admin Form Content -->
                        <form  class="form-bordered " method="post">
                                <div class="form-group">
                                    

                      <div class="profile-images-card">
  <div class="profile-images">
    <img src="img/placeholders/avatars/avatar15@2x.jpg" style="height:200px" id="upload-img">
  </div>
  <div class="custom-file">
    <label for="fileupload">Upload Profile</label>
    <input type="file" id="fileupload" value="<?php echo htmlentities($run['image']); ?>" name="image">
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
                                        <input type="text" value="<?php echo htmlentities($run['name']); ?>" id="example-staffname" name="agent_name" class="form-control" placeholder="Agent Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['agency']); ?>"  name="agency" class="form-control" placeholder="Agency">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['contact']); ?>" id="contact" name="contact" class="form-control" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                        <input type="email" value="<?php echo htmlentities($run['email']); ?>" id="example-email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['age']); ?>" id="example-email" name="age" class="form-control" placeholder="Age">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['wallet']); ?>" id="example-email" name="wallet" class="form-control" placeholder="Wallet">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['street']); ?>" id="street" name="street" class="form-control" placeholder="New Street">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['city']); ?>" id="city" name="city" class="form-control" placeholder="Staff City">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        <input type="text" value="<?php echo htmlentities($run['state']); ?>" id="state" name="state" class="form-control" placeholder="Staff State">
                                    </div>
                                </div>

                              <!--  <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                        <input type="password" id="c-password" name="c-password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>--->


                                <div class="form-group form-actions">
                                    <button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Update</button>
                                </div>

<?php

    $conn=mysqli_connect("localhost","root","","bus_reservation");
    if(isset($_POST['submit']))

    {
      $id= intval ($_GET['id']);
      $image=$_POST['image'];
      $name=$_POST['agent_name'];
      $agency=$_POST['agency'];
      $contact=$_POST['contact'];
      $email=$_POST['email'];
      $age=$_POST['age'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $state=$_POST['state'];
     $sql1="UPDATE `agent_management` SET `image`='$image',`name`='$name',`agency`='$agency',`contact`='$contact',`email`='$email',`subscription`='$subscription',`age`='$age',`wallet`='$wallet',`street`='$street',`city`='$city',`state`='$state' WHERE id='$id'";
        $sun=mysqli_query($conn,$sql1);

      if($sun)
      {
        echo "<script>window.location.href = 'agent_profile.php?id={$_GET['id']}';</script>";

      } else
      {
        echo "<script>alert('not updated');</script>";
      }
    }
    ?>





                            </form>


                        <!-- END Admin Form Content -->
                    </div>
                    <!-- END Basic Form Elements Block -->
                </div>
                <!-- END Images Search -->

            </div>
            <!-- END Search Styles Content -->
        </div>
        <!-- END Search Styles Block -->


                    </div>








                    <!-- END Page Content -->

                    <!-- Footer -->
                <?php include('footer.php') ?>


</body>
</html>
