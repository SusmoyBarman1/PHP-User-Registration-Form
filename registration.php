<!DOCTYPE html>
<html>

	<head>
		<title>User Registration | PHP</title>
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


		<form action="process.php" method="post" enctype="multipart/form-data">
			
			<div class="container">
				
				<div class="row">

					<div class="col-sm-5">
						<br>
						<h1>Registration</h1><br>
						<h4>Fill up the form with correct values.</h4>
						<h5 style="color:red;">Important fields: *</h5>
						<hr class="mb-7">

						<br>
						<label for="firstname"><h5>First Name *</h5></label>
						<input class="form-control" id="firstname" type="text" name="firstname" required><br>

						<label for="lastname"><h5>Last Name *</h5></label>
						<input class="form-control" id="lastname"  type="text" name="lastname" required>

						<br>
						<label for="email"><h5>Email Address *</h5></label>
						<input class="form-control" id="email"  type="email" name="email" required><br>


						<label for="phonenumber"><h5>Phone Number *</h5></label>
						<input class="form-control" placeholder="01XXXXXXXXX" id="phonenumber"  type="tel" name="phonenumber" required><br>

						<label for="password"><h5>Password *</h5></label>
						<input class="form-control" id="password"  type="password" name="password" required><br>

						<label for="address"><h5>Address *</h5></label>
					 	<input class="form-control" id="address" type="text" name="address" required><br>

					 	<label for="city"><h5>City *</h5></label>
					 	<input class="form-control" id="city" type="text" name="city" required><br>

					 	<label for="province"><h5>Province *</h5></label>
					 	 	
					 	 	<select class="form-control" name="province" id="province" required>
		  						<option value="dha">Dhaka</option>
		  						<option value="chi">Chittagong</option>
		  						<option value="raj">Rajshahi</option>
		  						<option value="khu">Khulna</option>
		  						<option value="bar">Barisal</option>
		  						<option value="syl">Sylhet</option>
		  						<option value="ran">Rangpur</option>
		  						<option value="mym">Mymensingh</option>
							</select><br>

						<label for="country"><h5>Country *</h5></label>
					 	 	<select class="form-control" name="country" id="country" required>
		  						<option value="bangladesh">Bangladesh</option>
		  						<option value="india">India</option>
		  						<option value="srilanka">Sri Lanka</option>
		  						<option value="nepal">Nepal</option>
		  						<option value="others">Others</option>
							</select>
					 	 	<br><br>



					 	<h2><b>Education</b></h2>
					 	<hr class="mb-7">

					 	<label for="school"><h5>School *</h5></label>
					 	<input class="form-control" id="school" type="text" name="school" required><br>

						<label for="program"><h5>Program *</h5></label>
					 	<input class="form-control" id="program" type="text" name="program" required><br>

					 	<label for="educationlevel"><h5>Education Level *</h5></label>
					 	 	<select class="form-control" name="educationlevel" id="educationlevel" required>
		  						<option value="">-select-</option>
		  						<option value="technical">Technical Diploma</option>
		  						<option value="college">College Diploma</option>
		  						<option value="bachelor">Bachelor's Degree</option>
		  						<option value="masters">Master's Degree</option>
		  						<option value="others">Others</option>
							</select>
						<br>

						
						<label for="educationstatus"><h5>Education Status</h5></label>
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
					 	 	
						<label for="graduationdate"><h5>Graduation Date</h5></label>
					 	<input class="form-control" placeholder="DD-MM-YYYY" id="graduationdate" type="text" name="graduationdate">
					 	<br>

					 	<label for="employer"><h5>Employer</h5></label>
					 	<input class="form-control" id="employer" type="text" name="employer">
					 	<br>

					 	<label for="jobtitle"><h5>Job Title</h5></label>
					 	<input class="form-control" id="jobtitle" type="text" name="jobtitle">
					 	<br>

					 	<label for="jobduty"><h5>Job Duty</h5></label>
						<textarea id="jobduty" placeholder="Describe your job duties." name="jobduty" rows="4" cols="50"></textarea>
  						<br><br>

  						<label for="workedyear"><h5>Worked Year</h5></label>
					 	<input class="form-control" id="workedyear" type="number" name="workedyear"> <br>

						<label for="fileToUpload"><h5>Select files</h5></label>
  						<input class="btn btn-outline-success" type="file" name="fileToUpload" id="fileToUpload"><br><br>
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