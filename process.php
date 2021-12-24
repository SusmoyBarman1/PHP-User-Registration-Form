<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>


  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="registration.php">Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="demo.php">Users<span class="sr-only">(current)</span></a>
            </li>
        </div>
      </nav>

		<?php
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file)) 
		{
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "pdf" ) 
		{
		    echo "Sorry, only pdf files are allowed.";
		    $uploadOk = 0;
		}

		// Check if image file is a actual image or fake image
		if(isset($_POST["create"])) 
		{
		    if($uploadOk == 1)
		    {
		        $firstname        = $_POST['firstname'];
		        $lastname         = $_POST['lastname'];
		        $email          = $_POST['email'];
		        $phonenumber      = $_POST['phonenumber'];
		        $password         = sha1($_POST['password']);
		        $address        = $_POST['address'];
		        $city           = $_POST['city'];
		        $province         = $_POST['province'];
		        $country          = $_POST['country'];
		        $school         = $_POST['school'];
		        $program          = $_POST['program'];
		        $educationlevel     = $_POST['educationlevel'];
		        $educationstatus      = $_POST['educationstatus'];
		        $graduationdate     = $_POST['graduationdate'];
		        $employer           = $_POST['employer'];
		        $jobtitle           = $_POST['jobtitle'];
		        $jobduty              = $_POST['jobduty'];
		        $workedyear             = $_POST['workedyear'];


		        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password, address, city, province, country, school, program, educationlevel, educationstatus, graduationdate, employer, jobtitle, jobduty, workedyear, filename ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		        $stmtinsert = $db->prepare($sql);

		        $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password, $address, $city, $province, $country, $school, $program, $educationlevel, $educationstatus, $graduationdate, $employer, $jobtitle, $jobduty, $workedyear, $_FILES["fileToUpload"]["name"]]);
		    }
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		    // if everything is ok, try to upload file
		} 
		else 
		{
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		    {
		        //echo "\nYou are registered!";
		    	header('location:displayUsers.php');
		    } 
		    else 
		    {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		?>
	</body>
</html>
