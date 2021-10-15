<!DOCTYPE html>
<?php
session_start();
include('../model/class.php');
$obj = new Operation();
$na=$_SESSION['username'];
$obj->statusnotify($na);
$not=$obj->executeQuery();
$cnt=$not->num_rows;
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
<body onload="lood()">
    <script>
        function lood(){
        
var nmbr='<?= $cnt ?>';
//        alert(nmbr);
    if(nmbr>0){
        document.getElementById("notti").innerHTML=nmbr;
    }else{
        document.getElementById("notti").innerHTML="";
        }
    }
</script>
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
        <a class="nav-link" href="studenthome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="studentProfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="StudentLm.php">Leraning Metrials</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="../controller/notificationAction.php">Notifications<span class="badge badge-dark " id="notti"></span></a>
      </li>
    </ul>
      
    <form class="form-inline my-2 my-lg-0" method="post" action="studentSearch.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
        </div>  
    <div class="col-sm-12 container" style="padding: 50px;
font-style: italic;
border: dashed;">
    
    <form method="post" action="../controller/proicAction.php" name="addfrm" enctype="multipart/form-data">
  <div class="form-group" style="margin-top: 30px;">
    <label for="exampleFormControlFile1">Upload Your profile picture</label>
    <input type="file" name="Image" class="form-control-file" id="exampleFormControlFile1" required>
  </div>
<input class="form-control" type="text" placeholder="Your Job " style="margin-top: 30px;" name="job">
 <textarea class="form-control" rows="2" id="comment" name="about" style="margin-top: 30px;" placeholder="About me"></textarea>

<button type="submit" class="btn btn-secondary" style="margin-top: 30px;">Upload</button>
        
        </form>
    
    
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