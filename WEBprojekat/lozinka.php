<?php 









if(isset($_POST['Promjena'])){
    $usname9=$_POST['usnamenow'];
    $newpw=$_POST['sifratrenutna'];
    $repw=$_POST['novasifra'];
    
    
    
    
    
 $nbqry9="UPDATE users SET Password='$repw' WHERE Username='$usname9'";
    
   $nbqryres6=mysqli_query($conn, $nbqry9);
    
if(!$nbqryres6){
  echo "NIJe MOGUCE";
}

 session_start();
        $_SESSION['message']="Sifra uspjesno promjenjena";
        $_SESSION['msg_type']="success";
        
}
?>





