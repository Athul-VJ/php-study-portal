<?php
session_start();
include('../model/class.php');
$sender=$_SESSION['username'];
$receiver=$_SESSION['senderid'];
$message=$_POST['message'];
$obj = new Operation();
$obj->senderFunction($sender,$receiver,$message);
$result=$obj->executeQuery();
if($result){
    header('Location:../view/studentDetailview.php?id='.$receiver);
}

?>
