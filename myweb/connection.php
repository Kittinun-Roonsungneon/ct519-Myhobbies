<?php
$servername = "localhost";
$username = "kittinun";
$password = "65130695";
$database="myhobbies";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
?>