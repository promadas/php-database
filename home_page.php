<?php
session_start();
?>

<!doctype html>
	<html>
	<head >
		<meta charset="utf-8">
		<title>home page</title>

	</head>
	<body style="background: #7CB9E8;">
		<h1>Welcome,<?php echo isset($_SESSION['uname']) ? $_SESSION['uname']: "Proma" ?></h1>
		<p><a href="log_out.php">Logout</a></p>
	
	</body>
</html>