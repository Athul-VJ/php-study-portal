<?php
$json= $_REQUEST['q'];

$data = json_decode($json);
$fpass=$data->fpass;
//echo $fpass;
//$id=$data->vid;
$id=$data->id;
//echo $id;
include('../model/class.php');
$obj = new Operation();
$obj->passWprd($fpass,$id);
$result=$obj->executeQuery();
echo "ok";

?>