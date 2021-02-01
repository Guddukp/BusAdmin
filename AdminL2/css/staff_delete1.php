<?php
require_once("function.php");

$delete=new DB_con();
$id=intval($_GET['id']);
$sql=$delete->delete1($id);
if($sql)
{
	header('location:user_managment.php');
}



?>