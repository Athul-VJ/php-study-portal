<?php

$name=$_POST['name'];
$clgnm=$_POST['clgnm'];
$yr=$_POST['empno'];
$branch=$_POST['sbjct'];
$admsn=$_POST['phn'];
$username=$_POST['usrnm'];
$password=$_POST['passwd'];
//echo $admsn; testing
include('../model/class.php');
$obj = new Operation();
$obj->techerInsert($name,$clgnm,$yr,$branch,$admsn,$username,$password);
$result=$obj->executeQuery();
if($result){
    header('location:../view/teacherlogin.php');
}
?>
