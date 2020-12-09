<?php
session_start();

$con=mysqli_connect("localhost", "root", "", "rdc");

if(isset($_POST['login'])){

$username = $_POST['PUsername'];
$password = $_POST["Password"];

$sql = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);


	if($row > 0){

		while ($data  = mysqli_fetch_array($query)) {
			
			$fname  = $data['parentname'];
			$lname  = $data['parentlname'];

		$_SESSION['userid'] = $data['userid']; ;

		
		$_SESSION['parentname'] = $ParentName;
		$_SESSION['username'] = $UserName;
		
        $_SESSION['email'] = $Email;

		header('location:register1.php');	
		}


		
		
	}

	else{
		
		echo "<script>window.alert('Invalid Try Again !!!!');window.location='login.php';</script>";
}

}

?>