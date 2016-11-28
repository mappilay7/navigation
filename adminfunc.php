<?php
session_start();

include 'dbh.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()) {
	echo "
	<p><center>Your Username or Password is incorrect!<br><br> <a href ='adminlogin.php'>Back</a></center></p>
	";

} else{
	header("Location: adminsub.php");

} 

?>