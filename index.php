<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

<h1>Development Page</h1>

<ul>
  <li><a href="/index.php">Home</a></li>
  <li><a href="/index.php?file=monkeone.php">monke #1</a></li>
  <li><a href="/index.php?file=monketwo.php">monke #2</a></li>
</ul>

<p>development page for monke</p>
<p>the most comprehensive website about monkes</p>
<!-- Yo you forgot your login so here's the your username "john" but you'll have to find the password yourself -->
</body>
</html>

<?php

$file = $_GET["file"];

if(isset($file))
{
    $allowed_files = array('monkeone.php', 'monketwo.php', 'index.php');
    if (in_array($file, $allowed_files)) {
	  include("$file");
    } else {
	  echo "Invalid filename.";
    }
}
?>
