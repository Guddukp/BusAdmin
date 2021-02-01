<?php
session_start();
$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'bus_reservation');

if(isset($_POST['submit'])){
// checking if user is admin
	$emailid = $_POST['email'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM admin where email='$emailid' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['admin'] = $emailid;
			$_SESSION['id']=$data['id'];
			header('location:dashboard.php');
		}else{
//checking if user is staff
			$sql = "SELECT * FROM staff where email='$emailid' and password='$password' ";
	   $query = mysqli_query($con,$sql);

	   $row = mysqli_num_rows($query);
	   $data1 = mysqli_fetch_array($query);
	  if($row == 1){
			echo "login successful";
			$_SESSION['admin_staff'] = $emailid;
			$_SESSION['id']=$data1['id'];
			header('location:staff_dashboard.php');
		}else
		{
//checking if user is Agent
        $sql = "SELECT * FROM `agent_management` where email='$emailid' and password='$password' ";
	   $query = mysqli_query($con,$sql);

	   $row = mysqli_num_rows($query);
	     if($row == 1){
			echo "login successful";
			$_SESSION['admin_agent'] = $emailid;
			header('location:agent_managment.php');
		}else
		{
              
			echo"<script>alert('Invalid Email or Password');</script>";

        	

      }
      

		
		}
			
		}
    

} 

?>