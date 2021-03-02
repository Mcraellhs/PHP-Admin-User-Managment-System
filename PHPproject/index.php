<!DOCTYPE html>
<?php require_once "includes/database.php" ?>


<?php require_once "includes/register.php" ?>
 <?php require_once "lozinka.php" ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>
<body>
  <?php require_once "includes/login.php" ?>
  
  
<?php 





?>


  <?php
    
    if(isset($_SESSION['message'])):
    
    ?>
    
    <div class="alert alert-<?=$_SESSION['msg_type']?>"> 
    
    <?php
        
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        
        ?>
        
    </div>
    
    <?php endif ?>
   <nav class="navbar navbar-primary bg-primary navbar-expand-lg">
 
  <a class="navbar-brand" href="#" onclick="showlogin()">Prijava</a>
   <a class="navbar-brand" href="#" onclick="showregister()">Registracija</a>
  
  <button class="btn btn-primary" type="submit" onclick="promjenisifru()">Promjena sifre</button>
  
</nav>
  
  <div class="container">
      
      <div class="row">
          
          
          
          
          <div class="col-md-12">
             
              <!----- GUIDE -------->

              <div class="guide1" id="guide2">
              
              <h1 class="text-center">LOGIN GUIDE</h1>

              <p class="text center">
              
              To login as ADMIN use username: <b>admin</b> and password: <b>admin123</b> <br>
              To login as Guest use username: <b>guest</b> and password: <b>123</b> <br> <br>

              Kada se registruje novi account, admin mora odobriti taj account prije koristenja.

              
              
              </p>

              
              </div>
              
              <!---- PROMEJNA SIFRE -->
              
              <div class="lozinka1" id="lozinka2" style="display:none">
              
              <form action="index.php" method="post">
      <input type="text" id="username"  name="usnamenow" placeholder="Username">
      <input type="text" id="psw"  name="sifratrenutna" placeholder="Stara sifra">
      <input type="text" id="psw1"  name="novasifra" placeholder="Nova sifra">
      <input type="submit" value="Promjena" name="Promjena">
    </form>

              
              </div>
          
              
              
              
              
              <!-- mali debuggin ovde -->
              
              <?php 
             /* 
              $sql="SELECT * FROM users";
   $result=mysqli_query($conn, $sql);
   $rowCount=mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){

echo $row['Username'];

}
              */
              ?>
              
              
              
              
              <div class="wrapper fadeInDown" id="ulogovanje">
  <div id="formContent">
   
<div id="formFooter2">
      <a style="color:white">Login</a>
    </div>
    <!-- Login Form -->
    <form action="index.php" method="post">
      <input type="text" id="username"  name="username" placeholder="Username">
      <input type="text" id="psw"  name="psw" placeholder="Password">
      <input type="submit" value="Login" name="Login">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <div class="footercontent" id="footercontents">
          Username i Pasword nisu tacni
      </div>
    </div>

  </div>
</div>
             
             
             
              
                        <div class="wrapper fadeInDown" id="registracija">
  <div id="formContent">
    
    <div id="formFooter2">
      <a style="color:white">Registracija</a>
    </div>
    <form action="index.php" method="post">
      
    <input type="text" placeholder="Unesite ime" name="ime" id="ime" required>
    
    
    <input type="text" placeholder="Unesite prezime" name="prezime" id="prezime" required>
    
    
    <input type="text" placeholder="Unesite username" name="username" id="username" required>

    
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

   
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <input class="mt-5" type="submit" value="Register" name="Register">
    </form>

    <div class="nomatch" id="nomatchs">Passwordi se ne podudaraju</div>
    
    
    

  </div>
</div>
         
              
              
          </div>
          
          
          
          
      </div>
      
      
      
      
  </div>
  <div class="footerdiv" style="margin-top:200px">

  <?php // include 'footer.php' ?> 
  </div>
  
   <script src="app.js"></script> 


</body>
</html>