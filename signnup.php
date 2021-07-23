<?php
include("php/connection.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO login (username, pass, email,phoneno)
VALUES
('$_POST[signuser]','$_POST[signpassword]','$_POST[signemail]','$_POST[signphone]')";
$result = $conn->query($sql);
  if ($result === TRUE) {
    header("location:signup.php");  
  } 
$conn->close();
?>