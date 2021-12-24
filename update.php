<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useraccounts";

if(isset($_POST["update"])) 
{
	$id = $_GET['updateid'];

	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);

		        $firstname        		= $_POST['firstname'];
		        $phonenumber      		= $_POST['phonenumber'];
		        $password         		= sha1($_POST['password']);
		        $address        		= $_POST['address'];


		        //$sql = "UPDATE 'users' set id=$id, firstname='$firstname', phonenumber=$phonenumber, password='$password', address='$address'";
		        $sql = "UPDATE users SET firstname='$firstname', phonenumber=$phonenumber, password='$password', address='$address' WHERE id = $id";

		        $result = mysqli_query($con, $sql);
		        if($result)
		        {
		        	header('location:crud.php');
		        	echo "Updated successfully";
		        }
		    }
	
?>


<!DOCTYPE html>
<html>

	<head>
		<title>Update Data</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
	<div>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="registration.php"><h4>Registration</h4></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <a class="navbar-brand" href="displayUsers.php"><h4>Users</h4></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <a class="navbar-brand" href="crud.php"><h4>CRUD</h4></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		</nav>


		<form method="post">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-3">
						<br>
						<h1>Update Data</h1>

						<label for="firstname"><b>First Name</b></label>
						<input class="form-control" id="firstname" type="text" name="firstname" required>

						<label for="phonenumber"><b>Phone Number</b></label>
						<input class="form-control" placeholder="01XXXXXXXXX" id="phonenumber"  type="tel" name="phonenumber" required>

						<label for="password"><b>Password</b></label>
						<input class="form-control" id="password"  type="password" name="password" required>

						<label for="address"><b>Address</b></label>
					 	<input class="form-control" id="address" type="text" name="address" required>
					 	<br><br>

						<input class="btn btn-outline-success" type="submit" name="update" value="Update">
						<br>
					 	<br>
					 	<br>
					 	<br>
					</div>
				</div>
			</div>
		</form>
	</div>
	</body>
</html>