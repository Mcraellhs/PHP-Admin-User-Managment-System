<?php


if(isset($_POST['Change'])){
    $currentpw=$_POST['stara'];
    $newpw=$_POST['psw'];
    $repw=$_POST['repsw'];
    
    $opetid=$_GET['id'];
    
    
    
 $nbqry="SELECT Password FROM users WHERE user_id='$opetid'";
    
   $nbqryres=mysqli_query($conn, $nbqry);
    
   $rowqry=mysqli_fetch_array($nbqryres);
    
    
 
    if($currentpw==$rowqry['Password'] && $newpw==$repw){
        
        
        $nextqry="UPDATE users SET Password='$newpw' WHERE user_id='$opetid'";
        
        $newresult=mysqli_query($conn, $nextqry);
        
        echo "PASSWORD UPDATED";
        
    }
    else{
        
        echo "SIFRE SE NE PODUDARAJU";
    }

}
?>