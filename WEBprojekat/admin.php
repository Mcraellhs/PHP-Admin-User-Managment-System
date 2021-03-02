<!DOCTYPE html>

<?php require_once "includes/database.php" ?>
<?php require_once "adminfunkcije.php" ?>
<?php require_once "dodajpredmet.php" ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="js/bootstrap.min.js"></script>
    
    
    <!-- bootstrap online skripte -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title>ADMIN</title>
</head>
<body>
  
  <?php

    require_once "getstudentname.php"

    ?>
  
  
  <?php
    session_start();
if(!empty($_SESSION['message'])):
   $message = $_SESSION['message'];
 
   // echo $message;
    
//}
    
    ?>
  
  <div class="alert alert-<?=$_SESSION['msg_type']?>"> 
   <?php
        
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        
        ?>
  
  </div>
  
  <?php endif ?>
 
  
   <nav class="navbar navbar-light bg-light mb-5" style="height:70px;">
  <span class="navbar-brand mb-0 h1"><?php echo $pravoime; echo " "; echo $pravoprezime; ?></span>
  <a href="index.php" class="btn btn-light">Log out</a>
  <button type="button" class="btn btn-light" style="height:100%" onclick="hidetable()">Dodaj ispit</button>
  <button type="button" class="btn btn-light" style="height:100%" onclick="hideall()">Lista Prijava</button>
</nav>
   
   <div class="container">
       
       
       
       <div class="row">
           
           
           <div class="col-md-12">
            
            <div class="prijave" id="prijavs">
               <?php 
                
    $novisql="SELECT users.Ime,users.Prezime,predmet.Naziv,predmet.Datum FROM users  INNER JOIN users_predmet ON users.user_id=users_predmet.user_id INNER JOIN predmet ON users_predmet.predmet_id=predmet.predmet_id";
$novirezultat=mysqli_query($conn,$novisql);


if(!$novirezultat){
  echo "NOT WORKING";
}
         // $novired = mysqli_fetch_assoc($novirezultat);
//echo $novired['Ime'];
                
                ?>
                <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for names.." title="Type in a name">
               <table class="table" id="myTable1">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Predmet</th>
      <th scope="col">Datum Ispita</th>
    </tr>
  </thead>
  <tbody>
   <?php while($novired = mysqli_fetch_assoc($novirezultat)){   ?> 
    <tr>
      <th scope="row">1</th>
      <td><?php echo $novired['Ime'] ?></td>
      <td><?php echo $novired['Prezime'] ?></td>
      <td><?php echo $novired['Naziv'] ?></td>
      <td><?php echo $novired['Datum'] ?></td>
    </tr>
    <?php  }?>
  </tbody>
</table>
               
                
                
                
            </div>
            
            <div class="predmeti" id="predmets">
                
                
                <form action="admin.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group row ">
  
  <div class="col-12">
   Naziv predmeta: <br>
   <input type="text" placeholder="Unesite naziv ispita" name="exam" id="exam" required> <br>
   Datum i Vrijeme: <input class="form-control" type="datetime-local" name="Datum" value="2021-01-10T13:45:00" id="example-datetime-local-input"> <br>
   
    <input class="btn btn-primary" type="submit" value="Add" name="Add">
   
  </div>
</div>
                    
                    
                </form>
            </div>
            
            
            
            
            
             <div class="table-responsive" id="tabelastudenata">
             
             
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
              
    <table id="myTable" class="table table-striped table-bordered ">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Izbor</th>
    </tr>
  </thead>
  <tbody>
   <?php while($row = mysqli_fetch_assoc($result)){   ?> 
    <tr>
      <th><?php echo $increment; $increment++; ?></th>
      <td><?php echo $row['Ime'] ?></td>
      <td><?php echo $row['Prezime'] ?></td>
      <td><?php echo $row['Username'] ?></td>
      <td><?php echo $row['Email'] ?></td>
      <td><?php if($row['Administrator']==0){
    echo '<div class="bg-warning">Neodobren</div>';
}
else if($row['Administrator']==1){
    echo 'Admin';
}
    else{
        echo 'Student';
    }                                                          
                                                            
      ?></td>
      <td><?php  if($row['Administrator']==0) echo "<a href='odobri.php?a={$row['Username']}' class='btn btn-warning'>Odobri</a>"; 
                                                              //{$row['Username']} ?>
                                                              
                                                              
     <?php echo "<a href='delete.php?a={$row['Username']}' class='btn btn-danger'>Delete</a>"  ?>
     <?php echo "<a href='update.php?a={$row['Username']}' class='btn btn-success'>Update</a>"  ?>
                                                              
                                                              </td>
    </tr>
   <?php }?>
  </tbody>
</table>
          
          </div>  
           </div>
       </div>
       
       
       
   </div>
   <?php //include 'footer.php' ?> 
   <script src="admin.js"></script>
</body>
</html>