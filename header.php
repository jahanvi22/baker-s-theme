<html>
<head>
<title>Baker's theme</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50| document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.padding = "20px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
<style>
 .wf-loading h1, .wf-loading h2, .wf-loading h3, .wf-loading h4, .wf-loading a, .wf-loading strong, .wf-loading p, .wf-loading span {
    visibility: hidden;
	}
	$("#slideshow > div:gt(0)").hide();
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); 
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
 {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  image: header.jpg
  background-color:   #ffb570;
  padding: 10px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  hight: 10%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #3556;
  color: white;
}

#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

</style>



<body>

<div class="header-holder">
<a><img src="<?php echo get_template_directory_uri(); ?>/images/header.jpg"  align= "center" alt="Logo" width="100%" height="80%" />
    </a>
<div id = "navbar">
<a><img src="<?php echo get_template_directory_uri(); ?>/images/bake.png"  align= "center" alt="Logo" width="150" height="100" />
    </a>
<a class="active" href="#home">Home</a>
	<a href="#gallery">Gallery</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
	
</div>
</div>
	<div style="margin-top:1px;padding:15px 15px 25px;font-size:30px">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	   <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bread.jpg" alt="Logo" width="auto" height="auto" />
      </div>

      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/cake.jpg" alt="Logo" width="auto" height="auto" />
      </div>
    
      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/donuts.jpg" alt="Logo" width="auto" height="auto" />
      </div>
	  <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/macrons.jpg" alt="Logo" width="auto" height="auto" />
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



<div class="container">