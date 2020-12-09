<?php

include"body/header.php";
//.include_once('config.php');
//$db = new Database();
?>


<?php
session_start();
$conn=mysqli_connect("localhost", "root", "", "rdc");

$selectname="select * from users where userid='".$_SESSION['userid']."'";
$result=mysqli_query($conn,$selectname);

$row=mysqli_fetch_array($result);

  $name=$row['parentname'];
  
    
    ?>

<!DOCTYPE html>
<html>
<head>
  <title> Welcome <?php echo $row['parentname'] ?> </title>




  <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
  
  <style type="text/css"> 
h1 {color: sienna}
p {
  margin-left:20px
}
 

 .body { background-image: url("img/photo7.jpg"); 

  
}
 </style>

</head>
					 <body>
 				<div class="container">
<div class="row mt-5"><!--ici ce pour laisser l'espace entre navbar et le form si tu ecrit -6 ce pour ke le form soit atacher au navbar---------------->



  <div class="col-md-6 m-auto">
    <h5 >Welcome:       <strong style="color: green;"><?php echo $row['parentname'] ?> </strong></h5>
    <div class="card card-body">
	  <h1 class="text-center" style=" padding:10px; border-radius:10px; background-color:#0000FF;color:#fff;">Register Your Children here </h1>
				
				
			 <form action="" method="post">
				<div class="form-group">
   
        
          <label for="sfName">Student First Name:</label>
          <input type="text" class="form-control" name="sfName" id="sfName" 
           value="<?php if(isset($sfName)){echo $sfName;} ?>"
          required autofocus>
          </div>

          <div class="form-group">
          <label for="slName">Student Last Name:</label>
          <input type="text" class="form-control" name="slName" id="slName" 
          value="<?php if(isset($slName)){echo $slName;} ?>"
          required>
          </div>    
              
          <div class="form-group">
          <label for="sclass">Student Class :</label>
          <input type="text" class="form-control" name="sclass" id="sclass" 
          value="<?php if(isset($sclass)){echo $sclass;} ?>"
          >
          </div>

          <div class="form-group">
          <label for="sage">Student Age:</label>
          <input type="text" class="form-control" name="sage" id="sage" 
          value="<?php if(isset($sage)){echo $sage;} ?>"
          >
          </div>
          <div class="form-group">
          <label for="saddress">Full Address:</label>
          <input type="text" class="form-control" name="saddress" id="saddress" 
          value="<?php if(isset($saddress)){echo $saddress;} ?>"
          >
          </div>

          <div class="form-group">
          <label for="scontact">Parent PhoneNumber :</label>
          <input type="text" class="form-control" name="scontact" id="scontact" 
          value="<?php if(isset($scontact)){echo $scontact;} ?>"
          required>
          </div>
          <div class="form-group">
          <label for="ssexe">Student Sex :</label>
          <input type="text" class="form-control" name="ssexe" id="ssexe" 
          value="<?php if(isset($ssexe)){echo $ssexe;} ?>"
          required>
          </div>
		  
		  <div class="form-group">
          <label for="scontact">Student Nationality :</label>
          <input type="text" class="form-control" name="snation" id="snation" 
          value="<?php if(isset($snation)){echo $snation;} ?>"
          required>
          </div>
          
         

          <div class="form-group">
          <button type="submit" id="registerp1" class="col-md-12 btn btn-primary" name="submit">Submit</button>
        </div>
          </button>          
          </form>   
          </div>
          </div>
          </div>
    
    
  <br />
  <br />
  <br />
  <br />

    

    <script src="bootstrap2/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap2/jquery/popper.min.js"></script>
<script src="bootstrap2/jquery/bootstrap.min.js"></script>

  </body>
</html>


<?php 

          
$db=mysqli_connect("localhost","root","","rdc");

//ici ce code de forme qui est ds le forme la ou il ya name NB mais le fname ce un variable que je donner 

if (isset($_POST['submit'])) {
$Studentfname = $_POST['sfName'];
$Studentlname = $_POST['slName'];
$class = $_POST['sclass'];
$Age = $_POST['sage'];
$Address = $_POST['saddress'];
$phonecontact = $_POST['scontact'];
$sexe = $_POST['ssexe'];
$Nationality = $_POST['snation'];






//ici ce le code qui est dans la table users de database le meme 



$insert=mysqli_query($db,"INSERT INTO studenttable(studentfname,studentlname, class,age,  address,parentphone,sexe,nationality)
  VALUES('$Studentfname','$Studentlname','$class','$Age ','$Address','$phonecontact','$sexe','$Nationality')");


if(!$insert)
{
echo " <script>alert('Not Inserted');
      </script>";

}else{

echo " <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
});window.location='home.php'</script>";
}

}
 ?>
