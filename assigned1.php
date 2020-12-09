<?php

include"body/navall.php";

?>


<!DOCTYPE html>
<html>
<head>
  <title> Assigned1</title>




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
    <div class="card card-body">
	  <h1 class="text-center" style=" padding:10px; border-radius:10px; background-color:#ff8080;color:#fff;">Register Commune of Goma </h1>
				
				
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
          <label for="school">Assigned School :</label>
          <input type="text" class="form-control" name="school" id="school" 
          value="<?php if(isset($school)){echo $school;} ?>"
          >
          </div>

          <div class="form-group">
          <label for="sage">Student Age:</label>
          <input type="text" class="form-control" name="sage" id="sage" 
          value="<?php if(isset($sage)){echo $sage;} ?>"
          >
          </div>

          <div class="form-group">
          <label for="saddress">Full Address Querter Community  Avenu:</label>
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
          <label for="snation">Student Nationality :</label>
          <input type="text" class="form-control" name="snation" id="snation" 
          value="<?php if(isset($snation)){echo $snation;} ?>"
          required>
          </div>
          <div class="form-group">
          <label for="ssexe">Student Sexe :</label>
          <input type="text" class="form-control" name="ssexe" id="ssexe" 
          value="<?php if(isset($ssexe)){echo $ssexe;} ?>"
          required>
          </div>
         

          <div class="form-group">
          <button type="submit" id="registerp1" class="col-md-12 btn btn-danger" name="submit">Submit</button>
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
$school = $_POST['school'];
$Age = $_POST['sage'];
$Address = $_POST['saddress'];
$phonecontact = $_POST['scontact'];
$Nationality = $_POST['snation'];
$sexe = $_POST['ssexe'];





//ici ce le code qui est dans la table users de database le meme 



$insert=mysqli_query($db,"INSERT INTO Assigned1(studentfname,studentlname, class,school,age,  address,parentphone,nationality,sexe)
  VALUES('$Studentfname','$Studentlname','$class','$school','$Age ','$Address','$phonecontact','$Nationality','$sexe')");


if(!$insert)
{
echo " <script>alert('Not Inserted');
      </script>";

}else{

echo " <script>window.alert(' Student successful registed');window.location='home.php'</script>";
}

}




 ?>
