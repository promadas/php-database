<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Log in Form</title>
	</head>
	<body>
		<h1>Log in form</h1>
		<?php
		
		$uname=$pass=$unameErr=$passErr=$successfulMessage=$errorMessage="";
		$isValid=false;
		$loginflag=false;
		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			
			$uname=$_POST['uname'];
			$pass=$_POST['pass'];
			if(empty($uname ))
			{
				$unameErr="username should be 8 characters 2 numerical";
				$isValid= true;
			}
			if(empty($pass ))
			{
				$passErr="password should be 8 charcter";
				$isValid= true;
			}
			if($isValid)
			{
				$uname=test_input($uname);
				$pass=test_input($pass);
				$response=true;
				if($response)
				{
					session_start();
					$_SESSION['uname']=$uname;
					


					header("Location: home_page.php");
				}
				else
				{
					$errorMessage="log-in failed";
				}

			    
			}
		}
		function test_input($data)
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
		}
		
		
			?>
			<div style = "position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);">
			<form action="" method="POST">
			<fieldset>
			<legend> Account Information:</legend>
			<label for="uname">Username<span style="color: red;">*</span>:</label>
			<input type="text" id="uname" name="uname" >
			<span style="color: red"><?php echo $unameErr;?></span>
			<br>
			<br>
			
			<br>
			<label for="pass">Password<span style="color: red;">*</span>:</label>
			<input type="Password" id="pass" name="pass" >
			<span style="color: red"><?php echo $passErr;?></span>
			

			



		</fieldset>
		<br>
		<input type="Submit" name="submit" value="log in">

	</form>
	<span style="color: green"><?php echo $successfulMessage;?></span>
	<span style="color: red"><?php echo $errorMessage;?></span>
	<p>Dont have an account?<a href="registration_form.php">Register</a></p>
	

	

	</body>
	</html>
			

