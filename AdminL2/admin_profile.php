<?php
require_once("function.php");
error_reporting(0);
?>

<?php include('header.php') ?>
<!-- END Header -->

<!-- Page content -->
<div id="page-content">
  <!-- Dashboard Header -->

  <div class="content-header">
    <div class="header-section">
      <h1>
        <small>WELCOME</small> Admin
      </h1>
    </div>
  </div>
  <!-- Search Styles Block -->
  <div class="block">
    <!-- Search Styles Title -->
    <div class="block-title">
      <ul class="nav nav-tabs" data-toggle="tabs">
        <li class="active"><a href="#search-tab-profile">Profile</a></li>
        <li><a href="#search-tab-update">Update Profile</a></li>
        <li><a href="#search-tab-password">Update Password</a></li>
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
<?php
$fetch=new DB_con();
$raw=$fetch->fetchadmindata();
while($row=mysqli_fetch_array($raw))
{
?>

              <!-- agent Info -->
              <div class="block-section text-center">
                <a href="javascript:void(0)">
                  <img class="img-fluid profile-image" src="img/placeholders/avatars/<?php echo htmlentities($row['img']);?>" alt="avatar" class="img-circle">
                </a>
                <h3>
                  <strong><?php echo htmlentities($row['name']);?></strong><br><small></small>
                </h3>
              </div>
              <table class="table table-borderless table-striped table-vcenter ">
                <tbody>
                  <tr>
                    <td class="text-right"><strong>Birthdate</strong></td>
                    <td>October 29, 1991</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Email Id</strong></td>
                    <td>admin@mail.com</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Contact</strong></td>
                    <td>9988776611</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Age</strong></td>
                    <td>age</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Street</strong></td>
                    <td>street</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>City</strong></td>
                    <td>user city</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>State</strong></td>
                    <td>user state</td>
                  </tr>


                </tbody>

              </table>
          <?php }?>
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
          <form action="page_forms_general.html" class="form-bordered " method="post" onsubmit="return false;">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-image"></i></span>
                <span>Change Iamge </span>
                <input type="file" id="example-file-multiple-input" name="example-file-multiple-input">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" id="example-adminname" name="example-adminname" class="form-control" placeholder="Admin Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="date" id="example-birthdate" name="example-birthdate" class="form-control" placeholder="Birthdate">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
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
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" id="example-age" name="example-age" class="form-control" placeholder="Age">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" id="street" name="street" class="form-control" placeholder="Street Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" id="city" name="city" class="form-control" placeholder="City">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" id="state" name="state" class="form-control" placeholder="State">
              </div>
            </div>
            <div class="form-group form-actions">
              <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Update</button>
            </div>
          </form>
          <!-- END Admin Form Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
      <!-- END Images Search -->

      <!-- Images Search -->
      <div class="tab-pane" id="search-tab-password">



        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>UPDATE</strong> Details</h2>
          </div>
          <!-- END Form Elements Title -->


          <!-- Admin Form Content -->
          <form action="page_forms_general.html" class="form-bordered " method="post" onsubmit="return false;">


            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="password" name="oldpassword" class="form-control" placeholder="Old Password">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="npassword" name="Newpassword" class="form-control" placeholder="New Password">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password">
              </div>
            </div>
            <div class="form-group form-actions">
              <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Update</button>
            </div>
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
