<?php
$servername = "localhost";
$username = "sermsuk22";
$password = "pond2210";
$db = "sermsuk22";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";//
?>