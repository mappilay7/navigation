<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Sweet Home</title>
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
    .row.content {height: 700px , width:200px;}
    
   
    
    
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
</head>
<body style="background-color: #3498db; ">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Kids Spot</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="c.php">Get Started</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>

    <div class="col-sm-8 text-left"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="images1/k1.jpg" style="width:2000px; height:600px;text-align:center;margin: auto;">
        
        </div>

        <div class="item">
        <img src="images1/k2.jpg" style="width:1295px; height:697px; margin: auto;" >
        
        </div>
      
        
        
        <div class="item">
        <img src="images1/k3.png" style="width:1295px; height:697px; margin: auto;" >
        
        </div>

        <div class="item">
        <img src="images1/k4.png" style="width:1295px; height:697px; margin: auto;" >
        
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    
</div>

<div style="text-align: center;">
<br><br><br>
  <h2><marquee>Welcome to my Website</marquee></h2>
  </div>
  <br><br><br>
  <div style="text-align: center; border: 1px solid;">
  <h4>Importance of education</h4>
  <p>Education is an important tool that is applied in the contemporary world to succeed, as it mitigates the challenges which are faced in life. The knowledge gained through education enables individuals’ potential to be optimally utilized owing to training of the human mind. This opens doors of opportunities enables individual to achieve better prospects in career growth.  Education has played a paramount role in the modern industrial world. This is attributed to the fact prospective employees must be qualified adequately to perform various tasks effectively. Industries entail resources that are sufficiently equipped with the modern technology to suit the needs and wants of the society. This thus, makes education to become a norm for services in all industrial sectors. The primary skills and the ability to apply the skills is the basis for evaluating the market.</p><br><br><p>
The foundation of the society is based on education since it brings economic and social prosperity. Gaining education enhances an individual to live a respectful life in the society. This is because education offers a setting in which culture and values of a society are developed. In this respect, education in modern society provides a forum where the society examines its issues and identifies solutions. The advancement of a society both economically and socially is by gaining education which consequently enables them to run a modern society.
Career wise, education is the foundation of developing individuals by providing knowledge regarding humanity the worldover. Individuals in the society acquire new approaches in life that build opinions on the economical and social life. Education enables the society to interpret the world around them rightly, innovating to new ways and means that conform to their environment.
The current advancement in technology has been enhanced largely by education, as individuals are able to apply the skills acquired in real life leading to innovations. Employment in the contemporary world is based on education, as employees must possess the required skills that correspond with the current technology to perform their tasks. Prospective employees must be equipped with skill for them to cope with ever advancing technology in all industrial and agricultural sectors. Therefore, education has become a basic principle to measure the labor market on the basis of essential skills and the ability to appropriate them through suitable communication.</p><br><br><p>
Education has played a major role in the modern life to all individuals in the society. It has enabled societies to prosper both socially and economically by enabling them to develop common culture and values. It is through education that Technological advancement has been realized enabling communication and production of cost effective products and services to the society at large.
</p>
</div>
</div>
    <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Official Kids Spot @https://www.facebook.com/Kids-Spot-1401619883212312/</p>
</footer>

</body>
</html>
