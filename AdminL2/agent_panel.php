<?php
session_start();
if(!isset($_SESSION['agent'])){
	header('location:admin_login.php');
}

?>
<?php include('header.php') ?>