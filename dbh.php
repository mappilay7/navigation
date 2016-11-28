<?php

$conn = mysqli_connect("localhost", "root", "", "intiproject");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}