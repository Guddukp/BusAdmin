<?php
require_once("function.php");

$delete=new DB_con();
$id=intval($_GET['id']);
$sql=$delete->delete1t($id);
if($sql)
{
	header('location:staff_ticket_booking.php');
}



?>