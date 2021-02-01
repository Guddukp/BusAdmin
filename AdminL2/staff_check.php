<div class="block" >
                <!-- staff Info Title
                <div class="block-title">
                  <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>
                 END admin Info Title -->

                <!-- staff Info -->


                
                <?php 
         include_once('function.php');
        $fetch1=new DB_con();
        if(isset($_GET['id']))
        {
          $id=intval($_GET['id']);
          $raw2=$fetch1->fetch_staff_record($id);
          $run=mysqli_fetch_array($raw2);

          if($run)
{
  header('location:staff_profile.php');
}
        }
        
        ?>





                <div class="block-section text-center">
                  <a href="javascript:void(0)">
                    <img style="width:50%;height:50%;" src="img/placeholders/avatars/<?php echo htmlentities($run['image']); ?>" alt="avatar" class="img-circle">
                  </a>
                  <h3>
                    <strong><?php echo htmlentities($run['name']); ?></strong><br><small></small>
                  </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                  <tbody>

                    <tr>
                      <td class="text-right"><strong>Birthdate</strong></td>
                      <td><?php echo htmlentities($run['birthdate']); ?></td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Position</strong></td>
                        <td><?php echo htmlentities($run['position']); ?></td>
                      </tr>
                    <tr>
                      <td class="text-right"><strong>Email Id</strong></td>
                      <td><?php echo htmlentities($run['email']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Contact</strong></td>
                      <td><?php echo htmlentities($run['contact']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Language</strong></td>
                      <td>English (UK)</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Street</strong></td>
                      <td><?php echo htmlentities($run['street']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>City</strong></td>
                      <td><?php echo htmlentities($run['city']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>State</strong></td>
                      <td><?php echo htmlentities($run['state']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Status</strong></td>
                      <td><span class="label label-success"><i class="fa fa-check"></i> Active</span></td>
                    </tr>

                  </tbody>
                </table>



                <!-- END staff Info -->
              </div>
