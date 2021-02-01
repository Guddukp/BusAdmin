<?php
require_once("function.php");

$delete=new DB_con();
$id=intval($_GET['id']);
$sql=$delete->delete($id);
if($sql)
{
	header('location:agent_managment.php');
}



?>