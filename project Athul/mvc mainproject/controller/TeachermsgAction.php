<?php
include('../model/class.php');
session_start();
$na=$_SESSION['username'];
$id=$_REQUEST['id'];
//echo $na;
//exit;
$obj = new Operation();
$obj->msgSeenAction($na);
$obj->executeQuery();
header('Location:../view/teacherDetailview.php?id='.$id);

?>
