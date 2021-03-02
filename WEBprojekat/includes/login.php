
 
<?php  ?>
   <?php
     
$randomwar=0;

   if(isset($_POST['Login'])){
    $usernameizforme=$_POST['username'];
    $passwordizforme=$_POST['psw'];
  //  echo $usernameizforme;
    //echo $passwordizforme;
       
      
       
    $sql="SELECT Username,Administrator,Password FROM users";
    $storeArray=Array();
    $storeArrayStatus=Array();
    $storeArrayPassword=Array();
    $res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){

  $storeArray[]=$row['Username'];
  $storeArrayStatus[]=$row['Administrator'];
  $storeArrayPassword[]=$row['Password'];


}

for($i=0;$i<count($storeArrayStatus);$i++){
  if($usernameizforme==$storeArray[$i] && $passwordizforme ==$storeArrayPassword[$i]){
   if($storeArrayStatus[$i]==1){
    //include_once('admin.php');
       
            $sql1="SELECT user_id FROM users WHERE Username='$usernameizforme'";


$result1=mysqli_query($conn,$sql1);
        
        $row1=mysqli_fetch_array($result1);
        $sendid=$row1['user_id'];
       
       header('Location: admin.php?id='."$sendid");
       
    exit();

   }
    else if($storeArrayStatus[$i]!=0 ){
        
        $sql1="SELECT user_id FROM users WHERE Username='$usernameizforme'";


$result1=mysqli_query($conn,$sql1);
        
        $row1=mysqli_fetch_array($result1);
        $sendid=$row1['user_id'];
        
      header('Location: student.php?id='."$sendid");
    exit();
    }
    else
    {
        session_start();
        $_SESSION['message']="Vas account nije jos odobren";
        $_SESSION['msg_type']="warning";
        
        $randomwar=1;
        
      //echo "Your account is not yet accepted by admin";
    }
  }
  
}
       if($randomwar==0){
       echo '<script>
document.addEventListener("DOMContentLoaded", ready);

function ready(){

var noise=document.getElementById("footercontents");
var loginforma1=document.getElementById("ulogovanje");
noise.style.display="block";
loginforma1.style.display="flex";
}



</script>
';
       }
  } 
  
   ?>