<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useraccounts";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD Operation</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>

	<body>

		<div class="container">
			
			<button class="btn btn-outline-success my-5"><a href="registration.php"><b>Add User</b></a>
			</button>

			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Number</th>
			      <th scope="col">Email</th>
			      <th scope="col">Password</th>
			      <th scope="col">Operation</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			  	<?php

			  		$sql = "SELECT * FROM users";
			  		$result = mysqli_query($con, $sql);

			  		if($result)
			  		{
			  			while ($row = mysqli_fetch_assoc($result)) 
			  			{
			  				$id = $row['id'];
			  				$firstname = $row['firstname'];
			  				$phonenumber = $row['phonenumber'];
			  				$email = $row['email'];
			  				$pass = $row['password'];

			  				echo ' <tr>
			  				<th scope="row">'.$id.'</th>
			  					<td>'.$firstname.'</td>
			  					<td>'.$phonenumber.'</td>
			  					<td>'.$email.'</td>
			  					<td>'.$pass.'</td>
			  					<td>

						  		<button class="btn btn-outline-success"><a href="update.php?updateid='.$id.'"><b>Update</b></a></button>

						  		<button class="btn btn-outline-danger"><a href="delete.php?deleteid='.$id.'"><b>Delete</b></a></button>
						  	</td>
			  				</tr>';
			  			}
			  		}
			  	?>
			  	
			  </tbody>
			</table>
		</div>

	</body>
</html>