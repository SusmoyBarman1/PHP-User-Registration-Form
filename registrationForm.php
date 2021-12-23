<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Registration Form</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>

	<body>

		<div>
			
			<?php
				if(isset($_POST['create'])){
					echo "User submitted!";
				}
			?>

		</div>


		<div>
			 <form action="registrationForm.php" method="post">
			 	 <div class="container">

			 	 	<div class="row">
			 	 		<div class="col-sm-3">
					 	 	<h1>Create Account</h1>
					 	 	<p>* Required information</p>
					 	 	<h2>Basic Information</h2>

					 	 	<br>

					 	 	<label for="email"><b>Email</b></label>
					 	 	<input class="form-control" type="email" name="email" required>

					 	 	<label for="password"><b>Password</b></label>
					 	 	<input class="form-control" type="password" name="password" required>

					 	 	<label for="firstname"><b>First Name</b></label>
					 	 	<input class="form-control" type="text" name="firstname" required>

					 	 	<label for="lastname"><b>Last Name</b></label>
					 	 	<input class="form-control" type="text" name="lastname" required>

					 	 	<label for="phonenumber"><b>Phone Number</b></label>
					 	 	<input class="form-control" type="text" placeholder="01XXXXXXXXX" name="phonenumber" required>

					 	 	<label for="address"><b>Address</b></label>
					 	 	<input class="form-control" type="text" name="address" required>

					 	 	<label for="city"><b>City</b></label>
					 	 	<input class="form-control" type="text" name="city" required>

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
					 	 	<hr class="mb-3">

					 	 	<label for="school"><b>School</b></label>
					 	 	<input class="form-control" type="text" name="school" required>

							<label for="program"><b>Program</b></label>
					 	 	<input class="form-control" type="text" name="program" required>

					 	 	<label for="educationlevel"><b>Education Level</b></label>
					 	 	<select class="form-control" name="educationlevel" id="educationlevel" required>
		  						<option value="">-select-</option>
		  						<option value="technical">Technical Diploma</option>
		  						<option value="college">College Diploma</option>
		  						<option value="bachelor">Bachelor's Degree</option>
		  						<option value="masters">Master's Degree</option>
		  						<option value="others">Others</option>
							</select>



							<h2>Education Status</h2>
  							
  							<input type="radio" id="graduated" name="education_status" value="graduated">
						  	<label for="graduated">Graduated</label><br>
						  	<input type="radio" id="current" name="education_status" value="current">
						  	<label for="current">Current Enrolled</label><br>  
						  	<input type="radio" id="not_graduate" name="education_status" value="not_graduate">
						  	<label for="not_graduate">Did Not Graduate</label><br><br>


					 	 	<label for="graduationdate"><b>Graduation Date</b></label>
					 	 	<input class="form-control" placeholder="DD-MM-YYYY" type="text" name="graduationdate">


					 	 	<br>
					 	 	<h2>Work Experience</h2>
					 	 	<hr class="mb-3">

					 	 	<label for="employer"><b>Employer</b></label>
					 	 	<input class="form-control" type="text" name="employer">

					 	 	<label for="jobtitle"><b>Job Title</b></label>
					 	 	<input class="form-control" type="text" name="jobtitle">

					 	 	<label for="jobduty"><b>Job Duty</b></label>
							<textarea id="jobduty" placeholder="Describe your job duties." name="jobduty" rows="4" cols="50"></textarea>
  							<br><br>

					 	 	<label for="workedyear"><b>Worked Year</b></label>
					 	 	<input class="form-control" type="text" name="workedyear">

					 	 	<label for="attachment">Attachments</label>
							<input class="form-control" type="file" id="attachment" name="attachment">


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