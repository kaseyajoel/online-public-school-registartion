
<?php
include"body/navall.php";
?>
<?php

 $conn=mysqli_connect("localhost", "root", "", "rdc"); 

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $Schoolname = $_POST['Schoolname'];
 $schoolquarter = $_POST['schoolquarter'];
 $schoolavenue = $_POST['schoolavenue'];
 $numberofclass = $_POST['numberofclass'];
 $matricule = $_POST['matricule'];
 $schoolgmail = $_POST['schoolgmail'];
 $q = " update studenttable set id=$id, Schoolname='$Schoolname', schoolquarter='$schoolquarter',schoolavenue='$schoolavenue',numberofclass='$numberofclass',matricule='$matricule',schoolgmail='$schoolgmail' where id=$id ";

 $query = mysqli_query($conn,$q);
/*ici le header location: (ici tu met la page ds laquel tu veux partir)*/
 header('location:goma.php');
 }

?>


<link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
  
  <style type="text/css"> 
h1 {color: sienna}
p {
  margin-left:20px
}
 
  
}
 </style>
 <div class="col-md-5 m-auto">
    <br>
    <div class="card card-body">
    <h1 class="text-center" style=" padding:10px; border-radius:10px; background-color:#0000FF;color:#fff;">Update Operation </h1>
        
        
       <form action="" method="post">
        <div class="form-group">
   
        <label> Student ID: </label>
          <input type="text" name="id" class="form-control"required>
          </div>

          <div class="form-group">
         <label> Student FirstName: </label>
          <input type="text" name="studentfname" class="form-control"required>
          </div>    
              
          <div class="form-group">
          <label> Student LastName: </label>
          <input type="text" name="studentlname" class="form-control"required>
          </div>

          <div class="form-group">
          <label> Student Class: </label>
          <input type="text" name="class" class="form-control"required>
          </div>

          <div class="form-group">
          <label> Student Age: </label>
          <input type="text" name="age" class="form-control"required>
          </div>

          <div class="form-group">
         <label> Full Address of Student: </label>
         <input type="text" name="address" class="form-control"required>
          </div>
      
      <div class="form-group">
          <label> Parent PhoneNumber: </label>
          <input type="text" name="parentphone" class="form-control"required>
          </div>
          <div class="form-group">
          <label> Nationality: </label>
          <input type="text" name="nationality" class="form-control"required>
          </div>
         

          <div class="form-group">
          <button type="submit" id="registerp1" class="col-md-12 btn btn-primary" name="done">Submit</button>
        </div>
          </button>          
          </form>   
          </div>
          </div>
          </div>