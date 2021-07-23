<?php
include("php/connection.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO contact (name,email,contact,message)
VALUES
('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[message]')";
$result = $conn->query($sql);
  if ($result === TRUE) {
    
    header('location:contact.php');
  } 
$conn->close();
?>