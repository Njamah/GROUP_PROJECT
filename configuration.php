<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// $dbname = "lofty";
// $dbname = 'lofty';


// Create connection
$conn = mysqli_connect($servername, $username, $password );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




// Create database
// $sql = "CREATE DATABASE lofty";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

 $conn->close();

?>