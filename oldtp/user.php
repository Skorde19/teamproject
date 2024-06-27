<?php

include("connection.php");

session_start();

if(!isset($_SESSION["sid"]))
{
	header("location:login.php");
}


$id = $_SESSION["sid"];

$qry = "select * from student where id = '$id'";		

$result = mysqli_query($connect, $qry);

$data = mysqli_fetch_assoc($result);


 $photo = $data["photo"];

 $photopath = "uploads/$photo";



if(isset($_POST["changepwd_btn"]))
{
	$cpwd = $_POST["cpwd"];

	if($cpwd==$data["password"])
	{
		$npwd = $_POST["npwd"];
		$rpwd = $_POST["rpwd"];
		if($npwd==$rpwd)
		{
			$qry = "UPDATE `student` SET `password`='$npwd' WHERE id = '$id'";
			$result = mysqli_query($connect, $qry);
			if($result)
			{
				?> <script> alert("Password Change Successfully"); </script> <?php
			}
		}
		else
		{
			?> <script> alert("Password do not match"); </script> <?php
		}

	}
	else
	{
		?> <script> alert("Wrong current password"); </script> <?php
	}
}


if(isset($_POST["editprof_btn"]))
{
	$fn = $_POST["fullname"];
	$eid = $_POST["email"];
	$cont = $_POST["contact"];

	$qry = "UPDATE `student` SET `fullname`='$fn',`email`='$eid',`contact`='$cont' WHERE id = '$id'";

	$result = mysqli_query($connect, $qry);
	if($result)
	{
		?> <script> alert("Profile Updated"); </script> <?php
	}
	else
	{
		?> <script> alert("Something went wrong"); </script> <?php
	}

}





?>

<?php include("nav.php") ?>



	<div class="row">
		<div class="col-md-3"> 
			<ul class="list-group">
			   <li class="list-group-item"><a href="#userdetails" data-toggle="tab"> User Details </a></li>
			  <li class="list-group-item"><a href="#editprofile" data-toggle="tab">  Edit Profile </a> </li>
			  <li class="list-group-item"><a href="#changepwd" data-toggle="tab">  Change Password </a> </li>

			  <li class="list-group-item"><a href="#" class="text-danger" onclick="deleteacc()">  Delete Account </a> </li>


			  <li class="list-group-item"><a href="logout.php">  Logout </a> </li>
			</ul>
		</div>
		<div class="col-md-9">

			<div class="tab-content">

				<div id="userdetails" class="tab-pane active">
					
					<table class="table table-bordered">
						<tr>
							<th> Photo </th>
							<td> <img src="<?php echo $photopath ?>" style="width: 100px"> </td>
						</tr>
						<tr>
							<th> Fullname </th>
							<td> <?php echo $data["fullname"]; ?></td>
						</tr>
						<tr>
							<th> Email </th>
							<td> <?php echo $data["email"]; ?> </td>
						</tr>
						<tr>
							<th> Contact </th>
							<td> <?php echo $data["contact"]; ?> </td>
						</tr>
					</table>


				</div>




				<div id="editprofile" class="tab-pane">
					<div class="row">
						<div class="col-md-6 mx-auto">
							<h4> Edit Profile </h4>
							<form method="post">
								<input type="text" class="form-control" name="fullname" value="<?php echo $data['fullname'] ?>">
								<input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">
								<input type="tel" class="form-control" name="contact" value="<?php echo $data['contact'] ?>">
								<button type="submit" name="editprof_btn" class="btn btn-success"> Update </button>
							</form>
						</div>
					</div>
				</div>					




				<div id="changepwd" class="tab-pane">
					<div class="row">
						<div class="col-md-6 mx-auto">
							<h4> Change Password </h4>

							<form method="post">
								<input type="password" placeholder="Current Password" class="form-control" name="cpwd">
								<input type="password" placeholder="New Password" class="form-control" name="npwd" minlength="6" maxlength="10">
								<input type="password" placeholder="Re-Enter Password" class="form-control" name="rpwd" minlength="6" maxlength="10">
								<button type="submit" name="changepwd_btn" class="btn btn-success"> Change Password </button>
							</form>
						</div>
					</div>
				</div>
			</div>



		</div>	

	</div>





<Script>
	function deleteacc()
	{
		var confirmation = confirm("Are you sure you want to delete your account?");
		if (confirmation) {
                window.location.href = "deleteaccount.php?id=<?php echo $id ?>"; 
            }
	}
</Script>





