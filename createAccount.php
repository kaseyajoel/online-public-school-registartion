
	<?php

include"body/navbar.php";
//include_once('config.php');
//$db = new Database();

?>

 <head>
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
    <div class="row mt-5">
    <div class="col-md-6 m-auto">

    <div class="card card-body">
	 <h1 class="text-center" style=" padding:10px; border-radius:10px; background-color:#2ECC71;color:#fff;">Parent Create Acccount here</h1>
				
				
		 <form name="createaccount" action="createaccount.php" method="POST">
		 <label for="pfName">Parent Name:</label>
		 <input type="text" class="form-control" name="PName" id="PName" required autofocus>
		 <label for="plName">Last Name:</label>
		 <input type="text" class="form-control" name="PLName" id="PLName"  required="">
					
		<label for="pgmail">Gmail Address:</label>
		<input type="text" class="form-control" name="PGmail" id="PGmail" required="">
					
		<label for="pgmail">Parent Full Address:</label>
		<input type="text" class="form-control" name="PFullAdd" id="PFullAdd" required="">
					
		<label for="pcontact">Phone Contact:</label>
		<input type="text" class="form-control" name="PContact" id="PContact" required="">

	    <label for="username">Username:</label>
		<input type="text" class="form-control" name="PUsername" id="PUsername" required="">
		<div class="col-md-6">
					
		<label for="pass2">Password:</label>
		<input type="password" class="form-control" name="Password" id="Password" required>
		</div>
		<br>
        <button type="submit"  class="col-md-12 btn btn-success" name="submit">Submit</button>
         </div>	
         </form></div> </div> </div>

 			<div class="col-md-4"></div>
 			</div>

			<footer style="background-color: white;">
			<center>
			&copy; All rights reserved
			</center>
			</footer>
		
		


<script src="bootstrap2/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap2/jquery/popper.min.js"></script>
<script src="bootstrap2/jquery/bootstrap.min.js"></script>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boat Reservation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>



	<body>
<br />
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4">
 				<?php 
					
$db=mysqli_connect("localhost","root","","rdc");

//ici ce code de forme qui est ds le forme la ou il ya name NB mais le fname ce un variable que je donner 

if (isset($_POST['submit'])) {
$fname = $_POST['PName'];
$lname = $_POST['PLName'];
$Email = $_POST['PGmail'];
$Address = $_POST['PFullAdd'];
$TelephoneContact = $_POST['PContact'];
$UserName = $_POST['PUsername'];
$Password = $_POST['Password'];



$sql = "SELECT * FROM users WHERE email = '$Email'";
$query = mysqli_query($db, $sql);
$row = mysqli_num_rows($query);

if ($row>0) {
echo " <script>window.alert('Email exist ');window.location='createaccount.php'</script>";
}

$sqlS = "SELECT * FROM users WHERE  phonecontact	='$TelephoneContact'";
$queryS = mysqli_query($db, $sqlS);
$rowS = mysqli_num_rows($queryS);

if ($rowS>0) {
echo " <script>window.alert('TELEPHONE exist  ');window.location='createaccount.php'</script>";
}

//ici ce le code qui est dans la table users de database le meme 

else
	{

$insert=mysqli_query($db,"INSERT INTO users(parentname,parentlname,email,address,phonecontact,username,	password)
  VALUES('$fname','$lname','$Email','$Address','$TelephoneContact','$UserName','$Password')");

}
if(!$insert)
{
echo " <script>alert('Not Inserted');
      </script>";

}else{

echo " <script>window.alert('successful registed');window.location='login.php'</script>";
}

}

	
					 ?>


	</body>