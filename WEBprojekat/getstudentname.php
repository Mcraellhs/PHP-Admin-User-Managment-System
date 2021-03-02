


<?php  
$pom=$_GET['id'];
$sql1="SELECT Ime,Prezime FROM users WHERE user_id='$pom'";


$result1=mysqli_query($conn,$sql1);


if(!$result1){
  echo "NOT WORKING";
}
$pravoime="";
$pravoprezime="";
while($row=mysqli_fetch_array($result1)){

  $pravoprezime=$row['Prezime'];
   $pravoime=$row['Ime'];
}

?>