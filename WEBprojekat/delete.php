<?php require_once "includes/database.php" ?>


<?php

session_start();
$_SESSION['msg_type']="danger";
$_SESSION['message'] = "Korisnik uspjesno izbrisan iz tabele";

if($conn->connect_error){
    echo "Connection failed";
}
$usname=$_GET["a"];
$deleteqry="DELETE FROM users WHERE Username='$usname'";
echo $usname;
$res=mysqli_query($conn,$deleteqry);

if(!$res){
    echo "NOT UPDATED";
  }

header('Location: admin.php');
echo "USPJESNO";
?>