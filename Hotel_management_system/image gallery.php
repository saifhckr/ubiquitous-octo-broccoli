
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
  <link href="css/plugins.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
</head> <!--Head Open  Here-->
<body style="margin-top:50px;"> 
  <!--Menu Bar Close Here-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo/logo2.png"/width="160px"height="40px"style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home">Home</a></li>
        <li><a href="about.php"title="About">About </a></li>
		    <li><a href="image gallery.php"title="Gallery">Gallery </a></li>
		<li><a href="contact.php"title="Contact Us">Contact Us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		      </ul>
    </div>
  </div>
</nav>
<div id="wrapper">
        <section id="page-title" class="page-title-classic">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a> </li>
                        <li><a href="image gallery.php">Image Gallery</a> </li>
                    </ul>
                </div>
                <div class="page-title">
                    <h1>Image Gallery</h1>
                </div>
            </div>
        </section>
        <!-- Content -->
        <section id="page-content">
            <div class="container">


                <!-- Gallery -->
                <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/1.jpg" data-lightbox="gallery-item"><img src="image/image gallery/1.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/2.jpg" data-lightbox="gallery-item"><img src="image/image gallery/2.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/3.jpg" data-lightbox="gallery-item"><img src="image/image gallery/3.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/4.jpg" data-lightbox="gallery-item"><img src="image/image gallery/4.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/5.jpg" data-lightbox="gallery-item"><img src="image/image gallery/5.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/6.jpg" data-lightbox="gallery-item"><img src="image/image gallery/6.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/7.jpg" data-lightbox="gallery-item"><img src="image/image gallery/7.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/8.jpg" data-lightbox="gallery-item"><img src="image/image gallery/8.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/image gallery/9.jpg" data-lightbox="gallery-item"><img src="image/image gallery/9.jpg"></a>
                    </div>
                </div>
                <!-- end: Gallery -->



            </div>
        </section>
</div>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>
<?php
include('footer.php');
?>
</body>
</html>