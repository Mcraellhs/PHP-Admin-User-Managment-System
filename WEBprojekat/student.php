<!DOCTYPE html>
<?php require_once "includes/database.php" ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="student.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'includes/changepw.php' ?>
    <?php

    require_once "getstudentname.php"

    ?>
    
    <?php
    
    $sqlpredmet="SELECT Naziv,Datum,predmet_id FROM predmet";
$resql=mysqli_query($conn,$sqlpredmet);
    
    ?>
    
    <nav class="navbar  mb-5" style="height:70px; background-color:#009688; color:white;">
  <span class="navbar-brand mb-0 h1"><?php echo $pravoime; echo " "; echo $pravoprezime; ?></span>
   <a href="index.php" class="btn btn-info">Home</a>
 <button type="button" class="btn btn-info" style="height:100%" onclick="changepw()">Promijeni Sifru</button>
 
 <a href="index.php" class="btn btn-info">Log Out</a>
  
  
</nav>
   
    
    <div class="container">
        
        <div class="row"><h1 style="margin:0 auto;" class="mb-5">Dobro dosli u Student Panel</h1></div>
          <div class="pwform mb-5" id="pwforma">
              
              
               <form action="student.php?id=<?php echo $_GET['id']; ?>" method="post">
      <input type="text" id="username"  name="stara" placeholder="Stara sifra">
      <input type="text" id="psw"  name="psw" placeholder="Nova sifra">
            <input type="text" id="psw"  name="repsw" placeholder="Ponovi sifru">
      <input type="submit" value="Change" name="Change">
    </form>

               
               
               
               
           </div> 
        <div class="col-md-12" id="stdiv">
            
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
  <table class="table" id="myTable">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ispit</th>
      <th scope="col">Datum</th>
      <th scope="col">Prijavi</th>
    </tr>
  </thead>
  <tbody>
   <?php while($red = mysqli_fetch_assoc($resql)){   ?> 
    <tr>
      <th scope="row">1</th>
      <td><?php echo $red['Naziv'] ?></td>
      <td><?php echo $red['Datum'] ?></td>
      <td><?php echo "<a href='prijaviispit.php?a={$red['predmet_id']}&b={$pom}' target='_blank' onClick='this.disable=true'  class='btn btn-success'>Prijavi</a>" ?></td>
    </tr>
   
    <?php }?>
  </tbody>
</table>          
            
            
            
        </div>
        
        
        
    </div>
    <?php // include 'footer.php' ?> 
    <script src="student.js"></script>
</body>
</html>