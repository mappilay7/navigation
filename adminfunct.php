<?php
include 'dbh.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO admin(email , password)
VALUES ('$email', '$password')";
$result = $conn->query($sql);

header("Location: adminlogin.php");