<?php

  $msg ="";
  if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);
    $conn = mysqli_connect("localhost", "root", "", "intiproject");

    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO photos (image, text) VALUES('$image','$text')";
    $result = $conn->query($sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uloaded successfully";
    } else{
      $msg = "There was a problem uploading image";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin editor</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

<nav class="navbar navbar-inverse" style="position: fixed; width: 100%;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Kids Spot</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="adminsub.php">AnimalsUpD</a></li>
        <li ><a href="spacefunc.php">SpaceUpD</a></li>
        <li><a href="numbersfunc.php">NumbersUpD</a></li>
        <li ><a href="humanfunc.php">HumanUpD</a></li>
        <li ><a href="signupadmin.php">Register</a></li>

      </ul>
    </div>
  </div>
</nav>


</head>
<body>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
      <div id="content" class="text-left" style="text-align: center;">

<?php
  $conn = mysqli_connect("localhost", "root", "", "intiproject");
  $sql = "SELECT * FROM photos";
  $result = $conn->query($sql);
  while ($row = mysqli_fetch_array($result)) {
    echo "<div id= 'img_div'>";
      echo "<img src='".$row['image']."'>";
    echo "</div>";
    echo "<div id=txt 'txt_div>";
      echo "<p>".$row['text']."</p>";
    echo "</div>";
  }





?>
  <form method="post" action="adminsub.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
    <div>
      <textarea name="text" style="margin-right: 95px;" cols="40" rows="10" placeholder="Say something about this image...."></textarea>
    </div>
    <div>
      <input type="submit" style="margin-right: 60px" name="upload" value="Upload Image">
    </div>
  </form>
</div>
      
    </div>
    <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="margin-top: 430px;">
  <a href='humanfunc.php'> <p>To the top</p></a>
</footer>

</body>
</html>