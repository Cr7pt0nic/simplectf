<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit();
}
?>

<html>
<head>
	<title>Upload</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" >
	<Script src="http://code.jquery.com/jquery-2.1.1-rc2.min.js" ></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script src="script.js"></script>
</head>	
<body>
	<div class="container-main">
<h1>Image Upload</h1>

<form action="UNDETECTEDUPLOAD.php" method="post" id="myForm"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" class="btn btn-success" value="Upload Image">
</form>

<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0" 
  aria-valuemax="100" style="width: 0%">
    <span class="sr-only">0% Complete</span>
  </div>
</div>
<div class="image"></div>
</div>
</body>
</html>
