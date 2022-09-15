<?php 
session_start();

$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My website</title>
</head>
<body>
    
<a href="logout.php">Logout</a>
<h1>This is the index page</h2>

<br>
  Hello, <?php echo $user_data['user_name']; ?><br>
  Welcome to Marvel's data
</body>
</html>