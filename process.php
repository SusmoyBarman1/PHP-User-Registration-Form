<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 				= $_POST['firstname'];
	$lastname 				= $_POST['lastname'];
	$email 					= $_POST['email'];
	$phonenumber			= $_POST['phonenumber'];
	$password 				= sha1($_POST['password']);
	$address				= $_POST['address'];
	$city    				= $_POST['city'];
	$province  				= $_POST['province'];
	$country  				= $_POST['country'];
	$school  				= $_POST['school'];
	$program  				= $_POST['program'];
	$educationlevel  		= $_POST['educationlevel'];
	$educationstatus  		= $_POST['educationstatus'];
	$graduationdate  		= $_POST['graduationdate'];
	$employer       		= $_POST['employer'];
	$jobtitle       		= $_POST['jobtitle'];
	$jobduty       	    	= $_POST['jobduty'];
	$workedyear       	    = $_POST['workedyear'];

		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password, address, city, province, country, school, program, educationlevel, educationstatus, graduationdate, employer, jobtitle, jobduty, workedyear ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$stmtinsert = $db->prepare($sql);

		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password, $address, $city, $province, $country, $school, $program, $educationlevel, $educationstatus, $graduationdate, $employer, $jobtitle, $jobduty, $workedyear]);

		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}