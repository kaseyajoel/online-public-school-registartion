
<?php 
	include"body/navbar.php";//end if isset log in
 ?>
 <head>
 	<link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
<!---------ici ce pour avoir le cadran de login----------------------->
<div class="row mt-5">
	<div class="col-md-6 m-auto">
		<div class="card card-body">
			<h1 class="text-center">Parent Login</h1>
			<form method="POST" action="loginconnect.php">
				<div class="form-group">
					<label> UserName</label>
					<input class="form-control" name="PUsername"></input>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="Password" id="Password" required>
				
				</div>
				<div class="form-group">
					<button type="submit" class="col-md-12 btn btn-primary" name="login">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!---------ici ce la fin avoir le cadran de login----------------------->

<script src="bootstrap2/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap2/jquery/popper.min.js"></script>
<script src="bootstrap2/jquery/bootstrap.min.js"></script>