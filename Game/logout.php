<?php
session_start();
session_destroy();
header('Location:..\main.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">

	<title>logout Page</title>
</head>
<body>
	<p>You have been successfully logged out</p>
	<a href="logout.php">Logout</a>
</body>
</html>