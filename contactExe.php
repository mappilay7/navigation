<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
      background-color: black;
  }
  .navbar-nav  li a:hover {
      color: white; !important;
  }
  </style>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">KIDS SPOT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="aboutExe.php">About</a></li>
        <li><a href="c.php">Get Started</a></li>
        <li><a href="contactExe.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>


<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What is education?</h3>
   <div class="row">
    <div class="col-sm-12">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Kedah, Malaysia</p>
      <p><span class="glyphicon glyphicon-phone"></span> +06 016 4844322</p>
      <p><span class="glyphicon glyphicon-envelope"></span> laxmannturbo@gmail.com</p> 
    </div>
        <div class="col-sm-12" style="margin-right: 100px;" >
          <div class="row" >
    <form>
            <div>
              <input class="form-control" style="margin: 0px;" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div>
              <input class="form-control" id="email" name="comments" placeholder="Your Comments" type="text" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="message" placeholder="Message" rows="5"></textarea><br>
    </form>
          <div class="row">
            <div class="col-sm-12 form-group ">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div> 
        </div>
      </div>
</div>


<footer class="container-fluid bg-4 text-center">
  <p>WELCOME TO <a href="https://www.facebook.com/Kids-Spot-1401619883212312/">KIDS SPOT</a></p> 
</footer>

</body>
</html>
