<?php
$id=$_REQUEST['id'];
include('class.php');
$obj = new Operation();
$obj->videoDelete($id);
$result=$obj->executeQuery();
if($result){
    header('location:TeacherLM.php');
}
?>
