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
                <small>WELCOME TO</small> OFFER SECTION
              </h1>
            </div>
          </div>
          <!-- Search Styles Block -->
          <div class="block">
            <!-- Search Styles Title -->
            <div class="block-title">
              <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#search-tab-profile">OFFERS</a></li>
                <li><a href="#search-tab-update">ADD NEW OFFER</a></li>
              </ul>
            </div>
            <!-- END Search Styles Title -->

            <!-- Search Styles Content -->
            <div class="tab-content">
              <!-- Projects Search -->
              <div class="tab-pane active" id="search-tab-profile">
                <!-- agent profile -->
                <div class="row a-profile">
                  <div class="col">
                    <div class="table-responsive">
                      <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                         
                        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                          <thead>
                            <tr role="row">
                              <th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 51px;">ID</th>
                              <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;">Image</th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="staff: activate to sort column ascending" style="width: 99px;">Offer</th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Date Posted</th>
                              <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Actions</th>
                            </tr>
                          </thead>
                          <tbody>


       <?php
$fetch=new DB_con();
$raw=$fetch->fetchdata2();
while($row=mysqli_fetch_array($raw))
{
?>




                            <tr role="row" class="odd">
                              <td class="text-center sorting_1"><?php echo htmlentities($row['id']);?></td>
                              <td class="text-center"><img class="img-fluid card-image" src="img/placeholders/avatars/<?php echo htmlentities($row['image']);?>" alt="avatar" class="img-circle"></td>
                              <td><a href="javascript:void(0)"><?php echo htmlentities($row['offer_name']);?></a></td>
                              <td><span class="label"><?php echo htmlentities($row['posted_date']);?></span></td>
                              <td class="text-center">
                                <div class="btn-group">
                                  <a href="admin_offer_view.php?id=<?php echo htmlentities($row['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-eye"></i></a>
                                  <a href="delete4.php?id=<?php echo htmlentities($row['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                              </td>
                            </tr>
<?php }?>

                          </tbody>
                        </table>
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
                    <h2>Details</h2>
                  </div>
                  <!-- END Form Elements Title -->


                  <!-- Admin Form Content -->
                  <form  class="form-bordered " method="post" >
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
                        <input type="text" id="example-offername" name="offername" class="form-control" placeholder="Offer">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        <input type="text" id="example-description" name="description" class="form-control" placeholder="Description">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="date" id="example-postdate" name="postdate" class="form-control" placeholder="Date Posted">
                      </div>
                    </div>

                    <div class="form-group form-actions">
                      <button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> ADD</button>
                    </div>


        <?php
        $insert1=new DB_con();
        if(isset($_POST['submit']))
        {
          $image=$_POST['image'];
          $offer_name=$_POST['offername'];
          $discription=$_POST['description'];
          $posted_date=$_POST['postdate'];
          $sql1=$insert1->insert2($image,$offer_name,$posted_date,$discription);
             echo "<script>window.location.href = 'admin_offer.php';</script>";



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
<?php include('footer.php') ?>



</body>
</html>