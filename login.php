<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// Define variables and initialize with empty values
	$username = $password = "";
	
	// Sanitize user inputs to prevent web injection attacks
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	
	// Check if the username and password are correct
	if ($username === "john" && $password === "metallica") {
		// Store username in session variable
		$_SESSION['username'] = $username;
		
		// Redirect user to the home page
		header("Location: upload.php");
	} else {
		// Display error message if username or password is incorrect
		echo "<script>alert('Incorrect username or password. Please try again.');</script>";
	}
}

// Function to sanitize user inputs
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post" action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
