<?php
session_start();
include 'dbh.php';
?>

<!DOCTYPE HTML>
<html>
<head>


  
  <title>adminlogin.php</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">

 
</head>
<body>

  <div id="navlo">
  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li><span class="glyphicon glyphicon-user"></span>ADMIN PAGE</a></li>
          </ul>
      </div>
  </nav><br><br><br><br><br><br><br><br>



  <form class="form-horizontal" action="adminfunc.php" method="post">
    <div class="form-group has-default" id="caption2">
        <label class="control-label col-xs-4" for="email"><h4><b>Email:</b></h4></label>
        <div class="col-xs-5">
        <input type="email" class="form-control" id="inputSuccess" placeholder="Enter admin email" name="email">
        </div>
    </div>



  <div class="form-group has-info" id="caption2" >
      <label class="control-label col-xs-4" for="pwd"><h4><b>Password:</b></h4></label>
      <div class="col-xs-5">
        <input type="password" class="form-control"  placeholder="Enter admin password" name="password">
    
      </div>
    </div>


    <div class="form-group has-success" style="margin-right: 20px;">
      <div class="control-label col-sm-offset-0 col-xs-7">
        <button type="submit" class="btn btn-success" name="login">Login</button>
      </div>
    </div>

    <br><br>

  <div class="col-sm-offset-1 col-xs-11" id="caption">
    <?php


  if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
  }else{
    
  }
  
    ?>
    </div>

 </form>

</div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
