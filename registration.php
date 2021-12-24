<!DOCTYPE html>
<html>

	<head>
		<title>User Registration | PHP</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
	<div>

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


		<form action="process.php" method="post" enctype="multipart/form-data">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-3">

						<h1>Registration</h1>
						<p>Fill up the form with correct values.</p>
						<hr class="mb-3">
						<label for="firstname"><b>First Name</b></label>
						<input class="form-control" id="firstname" type="text" name="firstname" required>
						<label for="lastname"><b>Last Name</b></label>
						<input class="form-control" id="lastname"  type="text" name="lastname" required>
						<label for="email"><b>Email Address</b></label>
						<input class="form-control" id="email"  type="email" name="email" required>
						<label for="phonenumber"><b>Phone Number</b></label>
						<input class="form-control" id="phonenumber"  type="tel" name="phonenumber" required>
						<label for="password"><b>Password</b></label>
						<input class="form-control" id="password"  type="password" name="password" required>
						<label for="address"><b>Address</b></label>
					 	<input class="form-control" id="address" type="text" name="address" required>
					 	<label for="city"><b>City</b></label>
					 	<input class="form-control" id="city" type="text" name="city" required>
					 	<label for="province"><b>Province</b></label>
					 	 	
					 	 	<select class="form-control" name="province" id="province" required>
		  						<option value="dha">Dhaka</option>
		  						<option value="chi">Chittagong</option>
		  						<option value="raj">Rajshahi</option>
		  						<option value="khu">Khulna</option>
		  						<option value="bar">Barisal</option>
		  						<option value="syl">Sylhet</option>
		  						<option value="ran">Rangpur</option>
		  						<option value="mym">Mymensingh</option>
							</select>
						<label for="country"><b>Country</b></label>
					 	 	<select class="form-control" name="country" id="country" required>
		  						<option value="bangladesh">Bangladesh</option>
		  						<option value="india">India</option>
		  						<option value="srilanka">Sri Lanka</option>
		  						<option value="nepal">Nepal</option>
		  						<option value="others">Others</option>
							</select>
					 	 	<br>
					 	<h2>Education</h2>
					 	<br>
					 	<label for="school"><b>School</b></label>
					 	<input class="form-control" id="school" type="text" name="school" required>
						<label for="program"><b>Program</b></label>
					 	<input class="form-control" id="program" type="text" name="program" required>
					 	<label for="educationlevel"><b>Education Level</b></label>
					 	 	<select class="form-control" name="educationlevel" id="educationlevel" required>
		  						<option value="">-select-</option>
		  						<option value="technical">Technical Diploma</option>
		  						<option value="college">College Diploma</option>
		  						<option value="bachelor">Bachelor's Degree</option>
		  						<option value="masters">Master's Degree</option>
		  						<option value="others">Others</option>
							</select>
						<br><br>
						<h2>Education Status</h2>
						<br>
						
						<label for="educationstatus"><b>Education Status</b></label>
					 	 	<select class="form-control" name="educationstatus" id="educationstatus">
		  						<option value="">-select-</option>
		  						<option value="graduated">Graduated</option>
		  						<option value="current">Current Enrolled</option>
		  						<option value="not_graduate">Did Not Graduate</option>
							</select>
  							
						<br>
						<br>
					 	<h2>Work Experience</h2>
					 	<hr class="mb-3">
					 	 	
						<label for="graduationdate"><b>Graduation Date</b></label>
					 	<input class="form-control" placeholder="DD-MM-YYYY" id="graduationdate" type="text" name="graduationdate">
					 	<br>
					 	<label for="employer"><b>Employer</b></label>
					 	<input class="form-control" id="employer" type="text" name="employer">
					 	<br>
					 	<label for="jobtitle"><b>Job Title</b></label>
					 	<input class="form-control" id="jobtitle" type="text" name="jobtitle">
					 	<br>
					 	<label for="jobduty"><b>Job Duty</b></label>
						<textarea id="jobduty" placeholder="Describe your job duties." name="jobduty" rows="4" cols="50"></textarea>
  						<br><br>
  						<label for="workedyear"><b>Worked Year</b></label>
					 	<input class="form-control" id="workedyear" type="number" name="workedyear"> <br>
						<label for="fileToUpload">Select files: </label>
  						<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
						<br>
					 	<input class="btn btn-outline-danger" type="reset" value="Reset">
				
						<input class="btn btn-outline-success" type="submit" name="create" value="Apply">
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