<?php

require_once("connection.php");
$StudentFname = $_POST['StudentFname'];
$StudentLname = $_POST['StudentLname'];  
$StudentAge = $_POST['StudentAge'];
$StudentClass = $_POST['StudentClass'];
$FatherName = $_POST['FatherName'];
$MotherName = $_POST['MotherName'];
$nomPhoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./images/$nomPhoto");
$req="insert into primary(StudentFname,StudentLname,StudentAge,StudentClass,FatherName,MotherName,photo) values ('$StudentFname','$StudentLname','$StudentAge','$StudentClass','$FatherName','$MotherName','$nomPhoto')";
mysql_query($req) or (die(mysql_error()));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<body>
<table border="1">
<tr>
<td>StudentFname</td>
<td><?php echo($StudentFname) ?></td>
</tr>
<tr>
<td>StudentLname</td>
<td><?php echo($StudentLname) ?></td>
</tr>
<tr>
<td>StudentAge</td>
<td><?php echo($StudentAge) ?></td>
</tr>
<tr>
<td>StudentClass</td>
<td><?php echo($StudentClass) ?></td>
</tr>
<tr>
<td>FatherName</td>
<td><?php echo($FatherName) ?></td>
</tr>
<tr>
<td>MotherName</td>
<td><?php echo($MotherName) ?></td>
</tr>
<tr>
<td>Photo</td>
<td><img src="images/<?php echo($nomPhoto)?>"></td>
</tr>
</table>
<a href="displaystudent1.php">display student</a>
</body>
</html>