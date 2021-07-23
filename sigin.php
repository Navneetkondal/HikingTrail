<?php
include("php/connection.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$myusername=$_POST['username'];
$mypassword=$_POST['userpwd'];

$sql = "SELECT * FROM login WHERE username = '$myusername' and pass = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("location: booking.php");
} else {
  header("location: signup.php");
}
$conn->close();
?>