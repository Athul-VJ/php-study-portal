<?php
include('../model/class.php');
session_start();
$idid=$_REQUEST['idid'];
$name=$_SESSION['username'];
$replay=$_POST['replay'];
$date=date("D:F:j:Y h:iA");
$obj = new Operation();
$obj->replaySystem($idid,$name,$replay,$date);
$result=$obj->executeQuery();
if($result){
    header('location:../view/studenthome.php');
}
?>
