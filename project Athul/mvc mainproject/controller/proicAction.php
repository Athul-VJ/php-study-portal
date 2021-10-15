<?php
include('../model/class.php');
session_start();
$id=$_SESSION['userid'];
$job=$_POST['job'];
$about=$_POST['about'];

$name=$_FILES['Image']['name'];
$target_dir = "../Image/";
$target_file = $target_dir.basename($_FILES['Image']['name']);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
$image = basename( $_FILES["Image"]["name"]); 



$extension_array=array("jpg","jpeg","png","gif");


 $obj = new Operation();


    $obj->imgInsert($image,$id,$job,$about);
$result=$obj->executeQuery();
if($result){
    in_array($imageFileType,$extension_array);
        move_uploaded_file($_FILES['Image']['tmp_name'], $target_dir.$name);
    header('location:../view/studenthome.php');
}
?>
