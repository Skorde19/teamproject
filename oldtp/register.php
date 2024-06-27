<?php

if(isset($_POST["register_btn"]))
{
include("connect.php");

$fn=$_POST["fullname"];
$eid=$_POST["email"];
$pwd=$_POST["password"];

$qry="INSERT INTO `register`(`id`, `fullname`, `email`, `password`) VALUES (NULL,'$fn','$eid','$pwd')";

$result=mysqli_query($connect,$qry);

if($result)
{
	echo "Registration Successful!";
}
else
{
	echo "Something went wrong , try again";
}

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sipna COET - Registration</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<style>
	.row{
		height: 100vh;
		align-items: center;
	}
	
	
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-success d-flex justify-content-between align-items-center text-light">
					<h3>Registration form</h3>
					<button class="close" >&times;</button>

					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group ">
								<label>Fullname</label>
								<input type="text" name="fullname " class="form-control">
							</div>
							<div class="form-group">
								<label>College Email</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="Password " class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" name="register_btn" class="form-control btn btn-success">Register</button>
							<div>
							<p> Already have account? <a href="login.php">Sign In</a></p>
						</form>
					</div>
					<div class="card-footer">
						<button class="btn btn-danger">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>