<?php
session_start();
if(isset($_SESSION["sid"]))
{
	header("location:user.php");
}

if(isset($_POST["login_btn"]))
{
	include("connect.php");

	$eid = $_POST["email"];
	$pwd = $_POST["password"];


	$qry = "select * from `register` where email = '$eid' AND password = '$pwd'";

	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	$data = mysqli_fetch_assoc($result);


	if($rows>0)	
	{

		$id = $data["id"];
		session_start();
		$_SESSION["uid"] = $data["id"];

		header("location:user.php");
	}
	else
	{
		echo "Invalid Email OR Password"; 
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sipna COET</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/style.css" rel="stylesheet">

<style>
	.row
	{
		height: 100vh;
		align-items: center;
	}
</style>

</head>
<body>
	<div class="container ">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-primary d-flex justify-content-between align-items-center text-light">
					<h4>Login</h4>
					<button class="close" >&times;</button>
					</div>

					<div class="card-body">
						<form>
							<div class="form-group">
								<label>College Email Id</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary" name="login_btn">Login</button>
							</div>
							<p>Don't have any account?<a href="register.php">Sign Up</a></p>
							<p> <a href="index.php"> Go to Home Page <i class="bi bi-house-add"></i> </a> </p>
						</form>	
					</div>
					<div class="card-footer">
						<button  class=" btn btn-danger" >Cancle</button>
					</div>
				</div>
			</div>
		</div>
	</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>