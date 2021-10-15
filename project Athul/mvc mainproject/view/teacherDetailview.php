<!DOCTYPE html>
<?php
session_start();
?>
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
<body>
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
              </div>
    <div class="col-sm-12 fixed" >
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
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
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
        </div>  
   <br>
    <div class="container row">
        <div class="col-sm-6">
    <?php
        $name=$_REQUEST['id'];
            $_SESSION['senderid']=$name;
        include('../model/class.php');
        $obj = new Operation();
        $obj->studentView($name);
        $result=$obj->executeQuery();
        $row=$result->fetch_assoc();
    ?>
    
     <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
     
    <div class="col-md-4">
         <?php if($row['image']) {?>
      <img src="../Image/<?= $row['image'] ?>" style="height: 245px;
width: 202px;">
        <?php } else{ ?>
        <img style="height: 184px;
width: 202px;" src="../png/user.png">
        <?php } ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $row['name'] ?></h5>
        <p class="card-text">College name :<?= $row['clgnm'] ?>(<?= $row['yr'] ?>) <?= $row['branch'] ?> Branch</p>
          <div class="row" style="padding-left: 16px;">
         <div> <p>E-mail:******@gmail.com</p></div>
              </div>
          <p>Job: <?= $row['job'] ?></p>
        <p class="card-text"><small class="text-muted">we'll never share your personal data to anyone without your permission</small></p>
      </div>
    </div>
  </div>
</div>   
        
    </div>  
        <div class="col-sm-6">
        <h5><center><u>About ME</u></center></h5>
            
            
            
            
            <?php if($row['about']==1){ ?>
            <p><?= $row['about'] ?></p>
            <?php } else {?>
            <p><i>user not udated yet...</i></p>
          <?php } ?>
            <p><b>Job:</b></p> <?php if($row['job']==1){ ?>
            <p><?= $row['job'] ?></p>
            <?php } else {?>
            <p><i>user not udated yet...</i></p>
          <?php } ?>
            
            
            
        </div>
                <div class="accordion" id="accordionExample">
  </div>
  <div class="card" style="width: 717px;
margin-left: 540px;
margin-top: -88px;
overflow: hidden;
                           margin-bottom: 18px;
">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <center><h5>Messages</h5></center>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

          <form method="post" action="../controller/detailviewAction.php">
              <div class="row">
                  <?php if($_SESSION['image']){?>
                  <div class="form-group">
                  <img src="../Image/<?= $_SESSION['image'] ?>" style="height: 60px;
width: 60px;
margin-top: 28px;
margin-left: 27px;" alt="warn" class="rounded-circle">
                  </div>   
                  <?php }else{?> 
                  <div class="form-group">
                  <img src="../png/user.png" style="height: 60px;
width: 60px;
margin-top: 28px;
margin-left: 27px;" alt="warn" class="rounded-circle">
                  </div> 
                  
                  <?php } ?>
                  
                  
          <div class="form-group">
    <label for="exampleFormControlTextarea1"><b><?= $_SESSION['username'] ?></b></label>
    <textarea name="message" style="border-radius: 14px;" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
         <div class="form-group">
                  <button type="submit" class="btn btn-outline-dark" style="margin-left: 13px;
margin-top: 39px">send</button>
                  </div> 
  
         
                  
                  </div>
          </form>
          <hr style="color:black;">
          
          <div class="custom" style="background-color: lightgray;
padding: 23px;
border-radius: 14px;">
              <?php
$sender=$_SESSION['username'];
$receiver=$name;

$obj = new Operation();
$obj->messagereceive($sender,$receiver);
$results=$obj->executeQuery();
        $count=$results->num_rows;
if($count){
    while($rows=$results->fetch_assoc()){?>
        
              <p><?php if($sender==$rows['sn']) {?> <p><b>YOU</b> <?php }else{?> <b><?= $rows['sn'] ?></b> <?php } ?>: <i style="background-color: darkgray;
border-radius: 16px;
padding: 6px;
font-family: initial;"><?= $rows['sm'] ?></i></p>
  <?php  }
}  else{
    echo "Nothing in your chatbox...";
}
              
              ?>
          
          </div>
         
          
           </div>
    </div>
  </div>
        
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