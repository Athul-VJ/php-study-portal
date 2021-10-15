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
        <a class="nav-link" href="studentProfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="TeacherLM.php">Leraning Metrials</a>
      </li>
         
    </ul>
      
    <form class="form-inline my-2 my-lg-0" method="post" action="studentSearch.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
        </div>  
   
    <div class="container" style="background-color: black;
color: white;
font-family: initial;
padding: 11px;">
    <?php
$id=$_REQUEST['id'];
include('../model/class.php');
$obj = new Operation();
$obj->maximise($id);
$result=$obj->executeQuery();
        $row=$result->fetch_assoc();
        ?>
    <small style="float:right;"><i>POSTED BY:<?= $row['username'] ?></i></small>
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="../uploads/<?= $row['video_url'] ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1"frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
</div>
    <p><b><u><?= $row['branch'] ?></u></b></p>
    <h6>semester: <p><b><?= $row['sem'] ?></b></p></h6>
           <h6>subject: <p><b><?= $row['subject'] ?></b></p></h6> 
        
    </div><br>
    <br><hr>
    
    
    <a href="detailview.php?id=<?= $row['username'] ?>"><button type="button" class="btn btn-danger" style="margin-left: 950px;" data-toggle="tooltip" data-placement="top" title="if you have doubt ask the quastions about this video">message</button></a>
    
    
    
    
    
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