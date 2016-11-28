<?php
include 'dbh.php';

$name = $_POST['name'];
$comments = $_POST['comments'];
$message = $_POST['message'];


$sql = "INSERT INTO comment(name , comments , message)
VALUES ('$name', '$comments' , '$message')";
$result = $conn->query($sql);

header("Location: contactExe.php");