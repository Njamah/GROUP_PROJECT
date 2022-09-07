<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{

    die("failed to connect!");
}

// Create database
// $sql = "CREATE DATABASE login_db";
// if (mysqli_query($con, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
    // $sql = "CREATE TABLE users (
    // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    // user_name VARCHAR(30) NOT NULL,
    // password VARCHAR(20),
    // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";
    
    // if (mysqli_query($con, $sql)) {
    //   echo "Table users created successfully";
    // } else {
    //   echo "Error creating table: " . mysqli_error($con);
    // }
    
    // mysqli_close($con);


?>