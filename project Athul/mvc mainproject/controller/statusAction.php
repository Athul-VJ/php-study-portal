<?php
include('../model/class.php');
session_start();
$nameo=$_SESSION['username'];
$status=$_POST['status'];
$date=date("D:F:j:Y h:iA");
 $obj = new Operation();

    $obj->statusInsert($nameo,$status,$date,$image);
$result=$obj->executeQuery();
if($result){
    header('location:../view/studenthome.php');
}
?>
