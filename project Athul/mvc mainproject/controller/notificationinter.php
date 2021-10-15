<?php
include('class.php');
session_start();
$na=$_SESSION['username'];
//echo $na;
//exit;
$obj = new Operation();
$obj->notifyreset($na);
$obj->executeQuery();
header('Location:notification.php');


?>