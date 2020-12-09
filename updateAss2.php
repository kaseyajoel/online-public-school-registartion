
<?php
include"body/navall.php";
?>
<?php

 $conn=mysqli_connect("localhost", "root", "", "rdc"); 

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $studentfname = $_POST['studentfname'];
 $studentlname = $_POST['StudentLname'];
 $class = $_POST['class'];
 $age = $_POST['age'];
 $address = $_POST['address'];
 $parentphone = $_POST['parentphone'];
 $nationality = $_POST['nationality'];
 $q = " update studenttable set stdid=$stdid, studentfname='$studentfname', studentlname='$StudentLname',class='$class',age='$age',address='$address',parentphone='$parentphone',nationality='$nationality' where id=$id ";

 $query = mysqli_query($conn,$q);
/*ici le header location: (ici tu met la page ds laquel tu veux partir)*/
 header('location:displayass2.php');
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
          <input type="text" name="stdid" class="form-control"required>
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
          <button type="submit" id="assigned2" class="col-md-12 btn btn-primary" name="done">Submit</button>
        </div>
          </button>          
          </form>   
          </div>
          </div>
          </div>