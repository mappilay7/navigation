<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kids Spot</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 3600px; }
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #000000;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #000000;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body style="background-color: #3498db;>

<div class="container-fluid" id="cont">
  <div class="row content">
    <div class="col-sm-3 sidenav" id="head" >
      <h2>Kids Spot</h2><br><br><br><br>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="c.PHP">ANIMAL FACT'S</a></li>
        <li class="active"><a href="space.php">SPACE</a></li>
        <li><a href="numbers.php">NUMBERS</a></li>
        <li><a href="human.php">HUMAN BODY</a></li>
        <li><a href="homeExe.php">BACK</li>
      </ul><br>
      <div class="input-group">
        
      </div>
    </div>
    <div class="col-sm-9" id="head">
      <?php
          $conn = mysqli_connect("localhost", "root", "", "intiproject");
          $sql = "SELECT * FROM SPACE";
          $result = $conn->query($sql);
          while ($row = mysqli_fetch_array($result)) {
          
            echo "<div id= 'img_div'>";
            echo "<img src='".$row['image']."'>";
            echo "</div>";
            echo "<div id= 'txt_div'>";
            echo "<p>".$row['text']."</p>";
          echo "</div>";
          }





?>
</div>
</div>
</div>
</nav>
<footer class="container-fluid">
  <div class="col-sm-8 sidenav" id="head" >
      <h4>Official Kids Spot @https://www.facebook.com/Kids-Spot-1401619883212312/</h4>
</footer>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
