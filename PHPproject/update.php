<?php require_once "includes/database.php" ?>


<?php


if($conn->connect_error){
    echo "Connection failed";
}
$usname=$_GET["a"];
$updateqry="SELECT Ime,Prezime,Password,Email,Administrator FROM users WHERE Username='$usname'";

$res=mysqli_query($conn,$updateqry);
$row = mysqli_fetch_assoc($res);
echo $row['Ime'];
if(!$res){
    echo "NOT UPDATED";}
  
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    
    <div class="container">
        
        <div class="row">
            
            
            
            <div class="col-md-5">
                
                <form action="test.php" method="post">
      Ime:  <br>
    <input type="text"  name="ime" id="ime" value=<?php echo $row['Ime'] ?> >
    
    Prezime:
    <input type="text"  name="prezime" id="prezime" value=<?php echo $row['Prezime'] ?>>
    
    Username:
    <input type="text"  name="username" id="username" value=<?php echo $usname ?> >
<br>
    Email:  <br>
    <input type="text"  name="email" id="email" value=<?php echo $row['Email'] ?>>
<br>
    Password:
    <input type="text"  name="psw" id="psw" value=<?php echo $row['Password'] ?> >
    
    Status(1-admin, 0-Neodobren, Ostalo-Student):
    <input type="text"  name="adm" id="adm" value=<?php echo $row['Administrator'] ?> >

    
    
      <input class="mt-5" type="submit" value="UPDATE" name="UPDATE">
    </form>
                
            </div>
            
            
            
        </div>
        
    </div>
    
    
</body>
</html>