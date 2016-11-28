<?php
session_start();
include 'dbh.php';
?>
<head>
	<center>
	<meta charset="utf-8">
 	<title>Sign Up page</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
 	<link rel="stylesheet" type="text/css" href="<link rel="stylesheet" type="text/css" href="style.css">">
 	
 
 	<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">Kids Spot</a>
    		</div>
      		<ul class="nav navbar-nav navbar-right">
      			<li><a href="adminsub.php"><span class="glyphicon glyphicon-log-in"></span> Return</a></li>
     	    </ul>
  		</div>
</center>
</head>
<body>
<h1> Admin Registration</h1>

<form action="adminfunct.php" method="post">

	<div class="form-group" >
		<label for ="ïnputEmail">Email</label>
		<input type="ëmail"class="form-control" placeholder="Ëmail" name="email">
	<div>
	<div class="form-group" class="col-sm-offset-5">
		<label for ="ïnputPassword">Password</label>
		<input type="password"class="form-control" placeholder="Password" name="password">
	</div>
	<div  class="form-group has-success" >
      <div class="control-label col-sm-offset-10 col-xs-1" >
        <button type="submit" class="btn btn-success">Register Admin</button>
      </div>
</form>
<div class="col-sm-offset-5 col-xs-12" id="caption">
    <?php

    $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		
		if (strpos($url, 'error=empty')!== false)

		{
			echo "Fill out all information!";

		
		}

if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	}else{
		echo "Sign Up here !";
	}
	
    ?>
    </div>


      <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>

</body>
</html>
	