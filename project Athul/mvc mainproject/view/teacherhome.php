<!DOCTYPE html>
<?php

session_start();
include('../model/class.php');
                $obj = new Operation();
$id=$_SESSION['userid'];

$obj->propic($id);
$results=$obj->executeQuery();
$rows=$results->fetch_assoc();
$proimg=$rows['image'];
?>
<?php
        $username=$_SESSION['username']; 
         $obj = new Operation();       
        $obj->messagesFunction($username);
          $resultt=$obj->executeQuery(); 
                $notify=$resultt->num_rows; 
                
                ?>
<script>
    function msgld(){
var msg='<?php echo $notify; ?>'
           // alert(msg);
            if(msg>0){
                document.getElementById("msgcnt").innerHTML=msg;
            }else{
                               document.getElementById("msgcnt").innerHTML="";
 
            }}
    </script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"
    ></script>
     <script src="action.js"></script> 
</head>
<body onload="msgld()">
    <div class="col-sm-12">
   <div class="col-sm-12 row">
<div class="col-sm-6 Hdrone">
        <h1>COLLEGE WEB</h1>
        <p>learn it well...</p>
              </div> 
       <div class="col-sm-6 headingtwo">
          <a href="../controller/logout.php"><img src="../png/PNGIX.com_logout-button-png_3396763.png" style="width: 68px;
float: right;
margin-right: 85px;
margin-top: 39px;"></a>     
      </div>
    
    </div>
    <div class="col-sm-12">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #234766 !important;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../png/01-logo.png" alt="logo" style="width:250px;">
          </a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            
             
         
              </div>
         
      
        
      </nav>
              </div>
    <div class="col-sm-12 fixed" >
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="teacherhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacherProfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TeacherLM.php">Leraning Metrials</a>
      </li>
         
    </ul>
      
    <form class="form-inline my-2 my-lg-0" method="post" action="teacherSearch.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
        <div class="col-sm-12  container row">
            <div class="col-sm-2">
                <?php if($proimg){?>
     <img src="../Image/<?= $proimg ?>" style="height: 60px;
                                            width:60px;
margin-top: 47px;
margin-left: 47px;" alt="warn" class="rounded-circle">
                <?php }else{ ?><img src="../png/user.png" style="height: 60px;
                                            width:60px;
margin-top: 47px;
margin-left: 47px;" alt="warn" class="rounded-circle">
                <?php } ?>
                
                <br><b><p style="font-size: 21px;
margin-top: 9px;
margin-left: 15px;"><?= $_SESSION['username'] ?>(<small>Teacher</small>) </p></b>
              <center>  <p><?= $_SESSION['branch'] ?></p></center>
                </div>
           
    <div class="col-sm-10 form-group">
         
        
      
             </div>
 <hr>
       </div> 
        <hr>
        <div class="accordion" id="accordionExample">
  </div>
  <div class="card" style="width: 317px;
margin-left: 851px;
margin-top: -91px;
overflow: hidden;
">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <center><h5>Messages<span class="badge badge-dark " id="msgcnt"></span></h5></center>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
     <?php
        $username=$_SESSION['username']; 
         $obj = new Operation();       
        $obj->messagesFunction($username);
          $resultt=$obj->executeQuery(); 
                if($resultt->num_rows){
        while($roww=$resultt->fetch_assoc())        
        {?>
<!--          teacherDetailview.php-->
          <a href="../controller/TeachermsgAction.php?id=<?= $roww['id'] ?>"><p><small>you have messages from</small> <?= $roww['id'] ?></p></a><hr><br> 
          <?php
                }}else{?> <small><i>you have no messages yet</i></small><?php } ?>
          
      </div>
    </div>
  </div>
        
        
      <?php
       
                $obj->statusDisplay();
                $result=$obj->executeQuery();
                while($row=$result->fetch_assoc()){
        ?>
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Posted By <a href="teacherDetailview.php?id=<?= $row['name'] ?>"> <?= $row['name'] ?></a></h4><small><?= $row['date'] ?></small><br>
     
       <?php if($row['image']) {?>
      
      <img style="height: 273px;" src="../Image/<?= $row['image'] ?>" class="img-fluid" alt="Responsive image">
      
      
      <?php } ?>
      
  <p style="color:black;"><b> <?= $row['status'] ?> </b></p>
  <hr>
   <form class="form-inline" method="post" action="../controller/teacherReplayAction.php?idid=<?php echo $row['id']; ?>">
     <textarea class="form-control" rows="2" id="comment" name="replay" required></textarea> <button type="submit" class="btn btn-primary mb-2" style="margin-left: 24px;
    font-style: italic;
">replay</button>
        </form>
      <hr>
     <?php if($row['replay']) {?>
      <div style="border: black;
width: auto;
height: auto;
background-color: aliceblue;
margin: 10px;
font-size: medium;"><p><u><b>Replies</b></u></p><br>
          <h6><i>replied by <?= $row['rname'] ?></i></h6> <small>on</small><p><?= $row['rdate'] ?></p>
     <br><p><b><?= $row['replay'] ?></b></p></div>
      <?php } ?>
</div>
        
        
        </div>
        
        <br><br>
        <?php
                }
        ?>
        
        
        
        </div>
    <hr>
        <div class="footerclass col-sm-12">
        <footer class="bg-light text-center text-lg-start">
          <!-- Grid container -->
          <div class=" p-4">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"><u>About us</u></h5>
        
                <p>
                 this is our first project for college students for online education sysytem
                </p>
              </div>
              <!--Grid column-->
        
              <!--Grid column-->
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"><u>Contact us</u></h5>
        
                <p>
                  For more details contact us on linkedin <a href="">linkedin.com</a> follow on instagram <a href="">instagram.com</a>
                   visit our website <a href=""> orientedwebsince2020@gmail.com </a>
                </p>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Grid container -->
        
          <!-- Copyright -->
          <div class="text-center p-3 col-md-12" style="background-color: #234766 !important;">
            since@2020:
            <a class="text-dark" href="#">orientedweb</a>
          </div>
          <!-- Copyright -->
        </footer>
      </div>
        
</body>
</html>