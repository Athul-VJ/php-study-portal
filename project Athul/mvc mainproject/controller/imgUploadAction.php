<?php
include('../model/class.php');
session_start();
$nameo=$_SESSION['username'];
$status=$_POST['status'];
$date=date("D:F:j:Y h:iA");

$name=$_FILES['Image']['name'];
$target_dir = "../Image/";
$target_file = $target_dir.basename($_FILES['Image']['name']);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
$image = basename( $_FILES["Image"]["name"]); 




$extension_array=array("jpg","jpeg","png","gif");


 $obj = new Operation();


    $obj->statusInsert($nameo,$status,$date,$image);
$result=$obj->executeQuery();
if($result){
    in_array($imageFileType,$extension_array);
        move_uploaded_file($_FILES['Image']['tmp_name'], $target_dir.$name);
    header('Location:../view/studenthome.php');
}
?>