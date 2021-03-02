 
  
  <?php
   
 
   if(isset($_POST['Add'])){
   $predmet=$_POST['exam'];
       $datum=$_POST['Datum'];
       
      
       $qry="INSERT INTO predmet(Naziv,Datum) ";
$qry .="VALUES ('$predmet','$datum') ";
       
   $rez=mysqli_query($conn,$qry);
   
       
       
       if(!$rez){
  echo "NOT INSERTED";
}

    echo "PREDMET USPJESNO DODAN" ;  
   }

  
   ?>