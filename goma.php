
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
 <h1 class="text-warning text-center" > Display Schools Community of Goma </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
  <th>ID</th>
 <th>School Name</th>
 <th>School Quarter</th>
 <th>School Address</th>
 <th>Number of Class</th>
 <th>School Code</th>
 <th>School Contact</th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
$conn=mysqli_connect("localhost", "root", "", "rdc"); 
 $q = "select * from goma ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['Schoolname'];  ?> </td>
 <td> <?php echo $res['schoolquarter'];  ?> </td>
 <td> <?php echo $res['schoolavenue'];  ?> </td>
 <td> <?php echo $res['numberofclass'];  ?> </td>
 <td> <?php echo $res['matricule'];  ?> </td>
 <td> <?php echo $res['schoolgmail'];  ?> </td>
 
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

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