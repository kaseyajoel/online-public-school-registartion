
<?php
include"body/navall.php";
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
  <script src="bootstrap2/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap2/jquery/popper.min.js"></script>
<script src="bootstrap2/jquery/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
    <!-----code de metre le search box a droite------------->
    <style type="text/css">

.srch 
{
padding-left: 1000px; 
}
</style>
    <!-----code de search ------------->

 <br><br><div class="srch">
<form class="navbar-form" method="post" name="form">
<input class="form-control" type="text" name="search" placeholder="search books..." required="">
<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
<span class="glyphicon glyphicon-search">       
</span>     
</button>
</form>
</div>
<!--ici ce le code qui done la couleur au text display ds h1----------->
 <h1 class="text-warning text-center" > Display Pupils Registed By Parents </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
  <th>ID</th>
 <th>Student Firstname</th>
 <th>Student LastName</th>
 <th>Student Class</th>
 <th>Student Age</th>
 <th>Full Address</th>
 <th>Parent Phone</th>
 <th>Student Sexe</th>
 <th>Nationality</th>
 <th> Date </th>
 
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
$conn=mysqli_connect("localhost", "root", "", "rdc"); 
 $q = "select * from studenttable ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['stdid'];  ?> </td>
 <td> <?php echo $res['studentfname'];  ?> </td>
 <td> <?php echo $res['studentlname'];  ?> </td>
 <td> <?php echo $res['class'];  ?> </td>
 <td> <?php echo $res['age'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['parentphone'];  ?> </td>
 <td> <?php echo $res['sexe'];  ?> </td>
 <td> <?php echo $res['nationality'];  ?> </td>
 <td> <?php echo $res['dat'];  ?> </td>
 
 <td> <button class="btn-danger btn"> <a href="delete.php?stdid=<?php echo $res['stdid']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?stdid=<?php echo $res['stdid']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>