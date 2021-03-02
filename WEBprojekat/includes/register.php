<?php //require_once "database.php" ?>
<?php


if(isset($_POST['Register'])){
  $name=$_POST['ime'];
  $surname=$_POST['prezime'];
  $username=$_POST['username'];
  $password=$_POST['psw'];
  $repassword=$_POST['psw-repeat'];
  $email=$_POST['email'];
  $default=0;

// $qry="INSERT INTO users(Ime,Prezime,Password,Username,Email,Administrator) VALUES($name,$surname,$password,$username,$email,$default)";
    
    if($password==$repassword){
        
        session_start();
    
$qry="INSERT INTO users(Ime,Prezime,Password,Username,Email,Administrator) ";
$qry .="VALUES ('$name','$surname','$password','$username','$email',$default) ";
   $result=mysqli_query($conn,$qry);
if(!$result){
  echo "NOT INSERTED";
}


$_SESSION['message']="Registracija uspjesna, sacekajte da admin odobri account";
        $_SESSION['msg_type']="success";
    
    }
    
    else{
        
              echo '<script>
document.addEventListener("DOMContentLoaded", ready);

function ready(){

var noise3=document.getElementById("nomatchs");
var loginforma12=document.getElementById("registracija");
noise3.style.display="block";
loginforma12.style.display="flex";
}



</script>
';
        session_start();
        $_SESSION['message']="Passwordi se ne podudaraju";
        $_SESSION['msg_type']="danger";
        
    }
        
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>