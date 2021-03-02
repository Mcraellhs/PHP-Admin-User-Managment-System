<?php require_once "includes/database.php" ?>
<?php
    
    session_start();
$_SESSION['msg_type']="success";
$_SESSION['message'] = "Korisnik uspjesno updatovan";

if(isset($_POST['UPDATE'])){
   $ime=$_POST['ime'];
    $pime=$_POST['prezime'];
    $uime=$_POST['username'];
    $majl=$_POST['email'];
    $admi=$_POST['adm'];
    $psw=$_POST['psw'];
    
    echo $psw;
    echo 'OK BRO';
  
}


?>


<?php

$testupdateqry="UPDATE users SET Administrator='$admi',Ime='$ime',Prezime='$pime',Email='$majl',Password='$psw' WHERE Username='$uime'";

$res=mysqli_query($conn,$testupdateqry);

if(!$res){
    echo "NOT UPDATED";
  }

header('Location: admin.php');


?>