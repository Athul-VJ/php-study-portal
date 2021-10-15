<?php
session_start();
include('class.php');
$sender=$_SESSION['username'];
$receiver=$_SESSION['senderid'];
$message=$_POST['demo'];
$obj = new Operation();
$obj->senderFunction($sender,$receiver,$message);
$result=$obj->executeQuery();
if($result){
    header('Location: detailview.php?id='.$receiver);
}

?>

