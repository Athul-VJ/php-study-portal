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
        <a class="nav-link " href="teacherProfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="TeacherLM.php">Leraning Metrials</a>
      </li>
         
    </ul>
      
   <form class="form-inline my-2 my-lg-0" method="post" action="teacherSearch.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
        </div>  
   
<div class="col-sm-12">
    
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white"><u>My Uploads</u></h4>
      <span class="text-muted"><i>You can upload your videos here</i></span>
       
      <form action="../controller/TeacherVideoAction.php" method="post" enctype="multipart/form-data">
          <?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
        <div class="input-group">
  <div class="custom-file">
    <input type="file" name="my_video" class="custom-file-input" id="inputGroupFile04" required>
    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
  </div><br>
 <select class="custom-select" id="Inputthree" name="branch" required>
              <option selected>select Branch</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Computer Technology">Computer Technology</option>
              <option value="Mechanical engineering">Mechanical engineering</option>
            </select>
            
            <select class="custom-select" id="Inputthree" name="sem" required>
              <option selected>semester</option>
              <option value="first">first</option>
              <option value="second">second</option>
              <option value="third">third</option>
            </select>
             <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
            <button class="btn btn-outline-secondary" type="submit" value="Upload">Upload</button>
</div>
        
 </form>
     <div class="row">   
      <?php
        $username=$_SESSION['username'];
        include('../model/class.php');
        $obj = new Operation();
        $obj->videoDisplay($username);
        $result=$obj->executeQuery();
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc()){
        ?>
            
        <div class="col-sm-4 col-lg-3 col-md-3">
          
        <div class="custom" style="background-color: black;
height: 266px;
margin-top: 45px;">
  <iframe style="height: 154px;
width: 262px;
margin-left: 6px;
margin-top: 16px;" class="embed-responsive-item" src="../uploads/<?= $row['video_url'] ?>"></iframe>
            <center><p style="color:white"><b>Semester : </b> <?= $row['sem'] ?></p></center><center><p style="color:white"><b>Subject : </b><?= $row['subject'] ?></p></center>
            <span><a href="VideoDeleteAction.php?id=<?= $row['id'] ?>"><img style="height: 23px;
margin-top: -33px;
margin-left: 4px;" src="../png/imgbin_delete-icon-multimedia-icon-bin-icon-png.png"></a></span>
            
</div>
        </div>
        
        <?php }}?>
        </div>
      </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   My Videos </button>
  </nav>
</div>  
<div class="row">
    <?php
    $obj->AllVideos();
    $result=$obj->executeQuery();
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc()){
        ?>
            
        <div class="col-sm-4 col-lg-3 col-md-3">
         <a href="TeachermaximizeVideo.php?id=<?= $row['id'] ?>">   
        <div class="custom" style="background-color: black;
height: 266px;
margin-top: 45px;">
  <iframe style="height: 154px;
width: 262px;
margin-left: 6px;
margin-top: 16px;" class="embed-responsive-item" src="../uploads/<?= $row['video_url'] ?>"></iframe>
            <center><p style="color:white"><b>Semester : </b> <?= $row['sem'] ?></p></center><center><p style="color:white"><b>Subject : </b><?= $row['subject'] ?></p></center>
            
</div>
             </a>
            
        </div>
        
        <?php }}?>

    
    
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