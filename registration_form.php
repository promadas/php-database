
<?php
		include 'DBinsert.php';
		$firstname=$lastname=$Dob=$religion=$email=$username=$password=$presentaddress=$permanentaddress=$phone="";
		$fnameErr=$lnameErr=$genderErr=$DoBErr=$religionErr=$emailErr=$unameErr=$passErr="";
		$isValid=true;
		$successfulMessage ="";
		$errorMessage="";
		$gender="";

		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$Dob=$_POST['Dob'];
			$religion=$_POST['religion'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$presentaddress=$_POST['comment'];
			$permanentaddress=$_POST['comment1'];
			
			if(empty($firstname ))
			{
				$fnameErr="first name cannot be empty";
				$flag= true;
			}
			if(empty($lastname))
			{
				$lnameErr="last name cannot be empty";
				$isValid=false;
			}
			if(empty($_POST['gender'] ))
			{
				$genderErr= "required";
				$isValid=false;
			}
			if(empty($Dob ))
			{
				$DoBErr="required";
				$isValid=false;
			}
			if(empty($religion ))
			{
				$religionErr="it's require";
				$isValid=false;
			}
			if(empty($email ))
			{
				$emailErr="email canno be invalid";
				$isValid=false;
			}
			if(empty($username ))
			{
				$unameErr="username should be 8 characters 2 numerical";
			
				$isValid=false;
			}
			if(empty($password ))
			{
				$passErr="password should be 8 charcter";
				
				$isValid=false;
			}
			
			if($isValid)
			{
				$firstname=test_input($firstname);
				$lastname=test_input($lastname);
				$gender=test_input($_POST['gender']);
				$Dob=test_input($Dob);
				$religion=test_input($religion);
				$email=test_input($email);
				$username=test_input($username);
				$password=test_input($password);
				$response = register($firstname,$lastname,$gender,$Dob,$religion,$presentaddress,$permanentaddress,$phone,$email,$username,$password);
				if($response)
				{
					

					$successfulMessage ="Successfully saved";


				}
				else
				{
					$errorMessage ="Log-in failed";
				}


			}
		}
		function test_input($data)
		
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
			
			
		}
		?>


<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
	</head>
	<body >

		<h1>Registration Form</h1>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<fieldset>
			<legend>Basic Information :</legend>
			<label for="firstname">First Name<span style="color: red;">*</span>:</label>
			<input type="text" id="firstname" name="firstname" >
			<span style="color: red"><?php echo $fnameErr; ?></span>

		
			
			<label for="lastname">Last Name<span style="color: red;">*</span> :</label>
			<input type="text" id="lastname" name="lastname" >
			<span style="color: red"><?php echo $lnameErr; ?></span>
			<br>


			<label for="gender">Gender<span style="color: red;">*</span>:</label>
			
			<br>
			<input type="radio" id="gender" name="gender" value="male">
			<label for="male">Male</label>
			<br>
			<input type="radio" id="gender" name="gender" value="female">
			<label for="female">Female</label>
			<br>
			<input type="radio" id="gender" name="gender" value="other">
			<label for="other"> other</label>
			<span style="color: red"><?php echo $genderErr; ?></span>
			<br>
			<label for="Dob">DoB<span style="color: red;">*</span>:</label>
			<input type="date" id="Dob" name="Dob">
			<span style="color: red"><?php echo $DoBErr; ?></span>
			<br>
			<label for="religion">Religion<span style="color: red;">*</span>:: </label>
			<span style="color: red"><?php echo $religionErr; ?></span>
			<select id="religion" name="religion"> 
			
			<option value="hindu">Hindu</option>
			<option value="muslim">Muslim</option>
			<option value="christan">Christian</option>
		</select>
	</fieldset>
        <fieldset>
			<legend>Contact Information :</legend>
			<label for="comment">Present Address</label>
			<textarea id="comment" name="comment" rows="5" cols="10" value="<?php echo $presentaddress;?>"></textarea>
			<br> 
			<label for="comment1">Permanent  Address</label>
			<textarea id="comment1" name="comment1" rows="5" cols="10" value="<?php echo $permanentaddress;?>"></textarea>
			<br>
			<label for="phone">Enter your phone number:</label>
			<input type="tel" id="phone" name="phone" >
			<br>
			<label for="email">Email<span style="color: red;">*</span>: </label>
			<input type="email" id="email" name="email" >
			<span style="color: red"><?php echo $emailErr;?></span>
			<br>
			

			<a href="https://github.com" target="_blank" >Personal Website</a>
		</fieldset>
		<fieldset>
			<legend> Account Information:</legend>
			<label for="username">Username<span style="color: red;">*</span>:</label>
			<input type="text" id="username" name="username" >
			<span style="color: red"><?php echo $unameErr;?></span>
			
			<br>
			<label for="password">Password<span style="color: red;">*</span>:</label>
			<input type="Password" id="password" name="password" >
			<span style="color: red"><?php echo $passErr;?></span>
			



		</fieldset>
		<br>
		<input type="Submit" name="submit" value="submit">

	</form>
	<span style="color:green"><?php echo $successfulMessage;?></span>
	<span style="color:red"><?php echo $errorMessage ;?></span>
	<p>Back to <a href="log_in_form.php">log in</a></p>

	
	
		
	</body>

	</html> 
 