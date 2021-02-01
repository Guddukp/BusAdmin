<?php
require_once("function.php");

$delete=new DB_con();
$id=intval($_GET['id']);
$sql=$delete->delete2($id);
if($sql)
{
	header('location:admin_offer.php');
}



?>