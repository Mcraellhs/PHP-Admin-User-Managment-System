<?php require_once "includes/database.php" ?>
<?php 



$predmetID=$_GET['a'];
 $studentID=$_GET['b'];


$qry1="INSERT INTO users_predmet(user_id,predmet_id) ";
$qry1 .="VALUES ('$studentID','$predmetID') ";


  $result3=mysqli_query($conn,$qry1);
if(!$result3){
  echo "NOT INSERTED";
}

else{
    echo "DEAL DONE";
}


?>