<?php
require_once("function.php");

$delete=new DB_con();
$id=intval($_GET['id']);
$sql=$delete->delete1t($id);
if($sql)
{
	header('location:ticket_booking.php');
}



?>