<?php

include"body/navbar.php";
include_once('config.php');
$db = new Database();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Register1</title>
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
	  <h1 class="text-center" style=" padding:10px; border-radius:10px; background-color:#2ECC71;color:#fff;">Register Your Children here </h1>
				
				
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
          <label for="scontact">Student Nationality :</label>
          <input type="text" class="form-control" name="snation" id="snation" 
          value="<?php if(isset($snation)){echo $snation;} ?>"
          required>
          </div>
         

          <div class="form-group">
          <button type="submit" id="registerp1" class="col-md-12 btn btn-success" name="submit">Submit</button>
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
            if(isset($_POST['submit'])){
              
              $StudentFname = $_POST['StudentFname'];
              $StudentLname = $_POST['StudentLname'];
              $StudentClass = $_POST['StudentClass'];
              $StudentAge = $_POST['StudentAge'];
              $StudentFullAdd  =  $_POST['StudentFullAdd'];
              $PContact =  $_POST['PContact'];
              $StudentNationality = $_POST['StudentNationality'];
              

              
                $sql = '
                  INSERT INTO student(StudentFname, StudentLname, StudentClass, StudentAge, StudentFullAdd  , PContact, StudentNationality
)
                  VALUES(?,?,?,?,?,?,?);
                ';

                $result = $db->insertRow($sql, [$StudentFname, $StudentLname, $StudentClass, $StudentAge, $StudentFullAdd , $PContact, $StudentNationality]);
                

              

            

            }
           ?>
