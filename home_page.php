<?php
session_start();
?>
<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>home page</title>

	</head>
	<body >
		<h1> welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Anonymous" ?></h1>
		<a href ="log_out.php">logout</a>
		
	</body>


</html>

