<?php require_once "includes/database.php" ?>


<?php
    session_start();
$_SESSION['msg_type']="success";
$_SESSION['message'] = "Korisnikov nalog uspjesno odobren";

if($conn->connect_error){
    echo "Connection failed";
}
$usname=$_GET["a"];
$odobriqry="UPDATE users SET Administrator=2 WHERE Username='$usname'";
echo $usname;
$res=mysqli_query($conn,$odobriqry);

if(!$res){
    echo "NOT UPDATED";
  }

header('Location: admin.php');
?>