<?php
Session_start();
include('../model/class.php');

$username = $_POST['username'];
$password = $_POST['password'];



$_SESSION['username']=$username;
//echo $username;
//echo $password;
$obj = new Operation();


$obj->login($username,$password);


$result=$obj->executeQuery();



$count=$result->num_rows;
$row=$result->fetch_assoc();
$_SESSION['userid']=$row["id"];
$_SESSION['branch']=$row["branch"];
$_SESSION['image']=$row["image"];

    if($count==1){
       $str=substr($username, 0, 1);
        $a= ctype_digit($str);
        if($a){
header('location:../view/teacherhome.php');
     if(isset($_POST['checkboxPass'])){
       setcookie("remind","$username",time()+(604800),"/","","0");  
         
     }       
}
else{
header('location:../view/studenthome.php');
    if(isset($_POST['checkboxPass'])){
       setcookie("remind","$username",time()+(604800),"/","","0");  
     }  
}
        
    }else{
        header('location:../view/index.php?id=1');
    }
    ?>