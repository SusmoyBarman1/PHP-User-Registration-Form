<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

	<head>
		<title>User Registration | PHP</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

	<div>
		<?php
		
		?>	
	</div>

	<div>
		<form action="registration.php" method="post" enctype="multipart/form-data">
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
				
						<input class="btn btn-outline-success" type="submit" id="register" name="create" value="Apply">
						<br>
					 	<br>
					 	<br>
					 	<br>

					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		$(function(){
			$('#register').click(function(e){

				var valid = this.form.checkValidity();

				if(valid){


				var firstname 		     = $('#firstname').val();
				var lastname		     = $('#lastname').val();
				var email 			     = $('#email').val();
				var phonenumber 	     = $('#phonenumber').val();
				var password 		     = $('#password').val();
				var address 		     = $('#address').val();
				var city 	    	     = $('#city').val();
				var province       	     = $('#province').val();
				var country     	     = $('#country').val();
				var school      	     = $('#school').val();
				var program              = $('#program').val();
				var educationlevel       = $('#educationlevel').val();
				var educationstatus      = $('#educationstatus').val();
				var graduationdate       = $('#graduationdate').val();
				var employer             = $('#employer').val();
				var jobtitle             = $('#jobtitle').val();
				var jobduty              = $('#jobduty').val();
				var workedyear           = $('#workedyear').val();
				

					e.preventDefault();	

					$.ajax({
						type: 'POST',
						url: 'process.php',
						data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password, address: address, city: city, province: province, country: country, school: school, program: program, educationlevel: educationlevel, educationstatus: educationstatus, graduationdate: graduationdate, employer: employer, jobtitle: jobtitle, jobduty: jobduty, workedyear: workedyear},
						success: function(data){
						Swal.fire({
									'title': 'Successful',
									'text': data,
									'type': 'success'
									})
								
						},
						error: function(data){
							Swal.fire({
									'title': 'Errors',
									'text': 'There were errors while saving the data.',
									'type': 'error'
									})
						}
					});

					
				}
			});				
		});
		
	</script>
	</body>
</html>