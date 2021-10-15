<?php
include('../model/class.php');
$obj = new Operation();
 $name=$_POST['fname'];
 $clgnm=$_POST['cname'];
 $year=$_POST['year'];

$branch=$_POST['branch'];
$admssn=$_POST['admsn'];
$email=$_POST['mail'];
$username=$_POST['username'];
$password=$_POST['passwd'];



$obj->insert($name,$clgnm,$year,$branch,$admssn,$email,$username,$password);
$result=$obj->executeQuery();
if($result){
    header('location:../view/index.php');
}
?>