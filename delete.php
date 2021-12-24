<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useraccounts";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];

	$sql = "DELETE FROM users WHERE id=$id";
	$result = mysqli_query($con, $sql);

	if($result)
	{
		header('location:crud.php');
	}
	else
	{
		die(mysql_error($con));
	}
}

?>