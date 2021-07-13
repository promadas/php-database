
<?php
		
		$fname=$lname=$DoB=$religion=$email=$uname=$pass=$presentaddress=$permanentaddress=$phonono="";
		$fnameErr=$lnameErr=$genderErr=$DoBErr=$religionErr=$emailErr=$unameErr=$passErr="";
		$isValid=true;
		$successfulMessage ="";
		$errorMessage="";
		$gender="";

		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
		
			$DoB=$_POST['DoB'];
			$religion=$_POST['religion'];
			$email=$_POST['email'];
			$uname=$_POST['uname'];
			$pass=$_POST['pass'];
			$presentaddress=$_POST['comment'];
			$permanentaddress=$_POST['comment1'];
			$phonono=$_POST['phone'];
			if(empty($fname ))
			{
				$fnameErr="first name cannot be empty";
				$flag= true;
			}
			if(empty($lname))
			{
				$lnameErr="last name cannot be empty";
				$isValid=false;
			}
			if(empty($_POST['gender'] ))
			{
				$genderErr= "required";
				$isValid=false;
			}
			if(empty($DoB ))
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
			if(empty($uname ))
			{
				$unameErr="username should be 8 characters 2 numerical";
			
				$isValid=false;
			}
			if(empty($pass ))
			{
				$passErr="password should be 8 charcter";
				
				$isValid=false;
			}
			if($isValid)
			{
				$fname=test_input($fname);
				$lname=test_input($lname);
				$gender=test_input($_POST['gender']);
				$DoB=test_input($DoB);
				$religion=test_input($religion);
				$email=test_input($email);
				$uname=test_input($uname);
				$pass=test_input($pass);
				$response = true;
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
			<label for="fname">First Name<span style="color: red;">*</span>:</label>
			<input type="text" id="fname" name="fname" >
			<span style="color: red"><?php echo $fnameErr; ?></span>

		
			
			<label for="lname">Last Name<span style="color: red;">*</span> :</label>
			<input type="text" id="lname" name="lname" >
			<span style="color: red"><?php echo $lnameErr; ?></span>
			<br>


			<label for="gender">Gender<span style="color: red;">*</span>:</label>
			
			<br>
			<input type="radio" id="gender" name="gender">
			<label for="male">Male</label>
			<br>
			<input type="radio" id="gender" name="gender">
			<label for="female">Female</label>
			<br>
			<input type="radio" id="gender" name="gender">
			<label for="other"> other</label>
			<span style="color: red"><?php echo $genderErr; ?></span>
			<br>
			<label for="DoB">DoB<span style="color: red;">*</span>:</label>
			<input type="date" id="DoB" name="DoB">
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
			<textarea id="comment1" name="comment1" rows="5" cols="10" value="<?php echo $permanentaddress;?>">></textarea>
			<br>
			<label for="phone">Enter your phone number:</label>
			<input type="tel" id="phone" name="phone">
			<br>
			<label for="email">Email<span style="color: red;">*</span>: </label>
			<input type="email" id="email" name="email" >
			<span style="color: red"><?php echo $emailErr;?></span>
			<br>
			<a href="https://github.com" target="_blank">Personal Website</a>
		</fieldset>
		<fieldset>
			<legend> Account Information:</legend>
			<label for="uname">Username<span style="color: red;">*</span>:</label>
			<input type="text" id="uname" name="uname" >
			<span style="color: red"><?php echo $unameErr;?></span>
			
			<br>
			<label for="pass">Password<span style="color: red;">*</span>:</label>
			<input type="Password" id="pass" name="pass" >
			<span style="color: red"><?php echo $passErr;?></span>
			



		</fieldset>
		<br>
		<input type="Submit" name="submit" value="submit">

	</form>
	<span style="color:green;"><?php echo $successfulMessage;?></span>
	<span style="color:red;"><?php echo $errorMessage ;?></span>
	<p>Back to <a href="log_in_form.php">log in</a></p>

	
	
		
	</body>

	</html> 
 