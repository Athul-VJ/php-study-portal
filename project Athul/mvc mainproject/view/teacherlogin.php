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
              <form action="../controller/LoginBttnAction.php" method="post">
              <div class="row">
                 
                  <div class="col-sm-6">
                  
                      <div class="col-sm">
                    <label>Username</label>
                          </div>
                      <div class="col-sm">
                        <input class="inptwidth" type="text" name="username" required>
                    </div>
                
                  </div>
                   <div class="col-sm-6">
               
                      <div class="col-sm-6">
                    <label>Password</label>
                          </div>
                      <div class="col-sm-6">
                        <input class="inptwidth" type="password" name="password" required autocomplete="current-password" id="id_password">
                          <i class="far fa-eye" id="togglePassword" style="margin-left: 138px;
cursor: pointer;
margin-top: -21px;
position: absolute; cursor: pointer;" onclick="psstgl()"></i>
                         </div>
                 <div class="adv" style="margin-left: 35px;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkboxPass">
    <label class="form-check-label" for="exampleCheck1">Remember me</label></div>
                       <div class="col-sm">
                                              <a href="forget.php">Forgotten Password</a> <input type="submit" class="btn btn-primary input" value="login">
                           </div>

                  </div>
           
                   </div>
               </form>
      </div>
    
    </div>
    <div class="col-sm-12">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light"style="background-color: #234766 !important;">
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
                <img src="../png/02-home.png" class="rounded" alt="Cinque Terre" width="100%" height="100%">
            </div>
            <style>
              .col-sm-8{
                position: relative;
                top: 50px;
              }
            </style>
            <div class="col-sm-4">

              <h2><u>Create Your Account</u></h2>
            <div class="dropdown">
              <button class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php">student</a>
                <a class="dropdown-item" href="teacherlogin.php">teacher</a>
                
              </div>
            </div>
            <style>
              .dropdown{
                position: relative;
                text-align: right;
                padding: 10px;
              }
            </style>
                <form action="../controller/teacherREgiserAction.php" method="post" onsubmit="return teacherValid()">
            <div class="form-group">
              <input type="text" class="form-control" id="tInputnm" placeholder="name" onchange="tchrnm()" name="name" required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" maxlength="10">
            </div>
    
           <div class="form-group">
              <input type="text" class="form-control" id="Inputemnm" placeholder="employee number" onchange="tchrnm()" name="empno" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
    
            <div class="form-group">
              <input type="text" class="form-control" id="Input2" placeholder="college name" name="clgnm" required>
            </div>
    
            <div class="form-group">
              <input type="text" class="form-control" id="Input3" placeholder="subject" name="sbjct" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="Input4" placeholder="current year" name="phn" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="4">
            </div>
                    <div class="form-group">
              <input type="text" class="form-control" id="Inputtusr" placeholder="username" name="usrnm" readonly="readonly">
            </div>
                    <div class="form-group">
              <input type="password" class="form-control" id="Input6" placeholder="password" name="passwd" required>
            </div>
                    <div class="form-group">
              <input type="password" class="form-control" id="Input7" placeholder="confirmpassword" required>
            </div>
                    
            <button type="submit" class="btn btn-secondary">Sign up and copy username</button>
                    </form>
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
         
          <!-- Copyright -->
        </footer>
            
      </div>
        </div>
         <div class="text-center p-3 col-md-12" style="background-color: #234766 !important;">
            since@2020:
            <a class="text-dark" href="#">orientedweb</a>
          </div>
</body>
</html>