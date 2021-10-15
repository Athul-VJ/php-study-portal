<?php
session_start();
$name=isset($_POST['Name']) ? $_POST['Name'] : '';
   // ;
$_SESSION['name']=$name;
//echo $_SESSION['name'];
//exit;
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
        <p><i>CHOICE IS YOURS</i></p>
              </div> 
       <div class="col-sm-6 headingtwo">
               <form action="../controller/LoginBttnAction.php" method="post">
              <div class="row">
                 
                  <div class="col-sm-6">
                  
                      <div class="col-sm">
                    <label>Username</label>
                          </div>
                      <div class="col-sm">
                        <input class="inptwidth" type="text" name="username" id="UsrNM" value required>
                    </div>
                
                  </div>
                   <div class="col-sm-6">
               
                      <div class="col-sm-6">
                    <label>Password</label>
                          </div>
                      <div class="col-sm-6">
                        <input class="inptwidth" type="password" name="password" required autocomplete="current-password" id="id_password"> <i class="far fa-eye" id="togglePassword" style="margin-left: 138px;
cursor: pointer;
margin-top: -21px;
position: absolute; cursor: pointer;" onclick="psstgl()"></i>
                       
                         </div>
                 <div class="adv" style="margin-left: 35px;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkboxPass">
    <label class="form-check-label" for="exampleCheck1">Remember me</label></div>
                       <div class="col-sm"> 
                                              <a href="index.php">BACK</a> <input type="submit" class="btn btn-primary input" value="login">
                           </div>

                  </div>
           
                   </div>
               </form>
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
    <div class="row container" >
            <div class="col-sm-8">
               <a href="#"> <img src="../png/02-home.png" class="rounded" alt="Cinque Terre" width="100%" height="100%" id="imgtgl"></a>
            </div>
            <style>
              .col-sm-8{
                position: relative;
                top: 50px;
              }
            </style>
            <div class="col-sm-4">

        <div class="container border" style="margin-top: 50%;
margin-left: 50%;
color: #002e5e;">
        <form class="row g-3" action="forgetlast.php" method="post">
  <div class="col-auto">
    <center><label for="staticEmail2" class="visually-hidden">Forget password</label></center><hr style="color: #ffcf06;
border: 1px #ffcf06 solid;">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="ENTER DEATILS PROPERLY!!!">
  </div>
  <div class="col-auto">
    <p id="demoo">admission no/employee no</p>
    <input type="text" class="form-control" id="email" placeholder="id" name="aeno" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="admsn" required>
  </div>
  <div class="col-auto">
         <a href="forget.php"> <button type="button" class="btn btn-primary mb-3">back</button></a>

    <button type="submit" class="btn btn-danger mb-3">submit</button>
   

  </div>
</form>
            </div>    
        </div>

        </div>
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
        </div>
</body>
</html>
