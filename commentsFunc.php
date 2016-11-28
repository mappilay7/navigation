<?php

function setComments($conn) {

	if(isser($_POST['commentSubmit'])){

		$uid = $_POST['uid'];
		$message = $_POST['message'];


		$sql = "INSERT INTO comments (uid, message) VALUES ('$uid','$message')";
		$result = $conn->query($sql)
	}

	
}
?>