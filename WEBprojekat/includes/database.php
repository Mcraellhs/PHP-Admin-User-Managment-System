<?php 


$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "korisnici";


$conn=mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if($conn){

}
else{
    die("Connection failed!");
}

?>