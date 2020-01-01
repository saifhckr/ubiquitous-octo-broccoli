<?php
session_start();
error_reporting(1);
include('connection.php');
?>
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
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-md-9">

                        <div id="blog" class="single-post">


                            <div class="post-item">
                                <div class="post-item-wrap">

                                    <div class="post-item-description">
                                        <h2>Suite Room<div class="btn" style="margin-left:522px;">RS. 13000</div></h2>

                                        <p>Enjoy the view of Anand from attach sitting area, An upgraded version of the Deluxe room, these rooms offer an elegant design with larger room space.</p>
									<div class="carousel dots-inside arrows-visible" data-items="3" data-lightbox="gallery">
                                        <a href="image/Suit room/Suit_img18.jpg" data-lightbox="gallery-item">
                                            <img alt="image" src="image/Suit room/Suit_img18.jpg">
                                        </a>
                                        <a href="image/Suit room/Suit_img19.jpg" data-lightbox="gallery-item">
                                            <img alt="image" src="image/Suit room/Suit_img19.jpg">
                                        </a>
										<a href="image/Suit room/Suit_img20.jpg" data-lightbox="gallery-item">
                                            <img alt="image" src="image/Suit room/Suit_img20.jpg">
                                        </a>
										<a href="image/Suit room/Suit_img21.jpg" data-lightbox="gallery-item">
                                            <img alt="image" src="image/Suit room/Suit_img21.jpg">
                                        </a>
										<a href="image/Suit room/Suit_img22.jpg" data-lightbox="gallery-item">
                                            <img alt="image" src="image/Suit room/Suit_img22.jpg">
                                        </a>
                                    </div>
									<br>
										<h2>Amenities & Facilities</h2>
										<img src="image/icon/wifi.png"class="img-responsive">
										<a href="Login.php" class="btn btn-danger">Book Now</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end: content -->

                    <!-- Sidebar-->
							<div class="col-sm-3">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4 align="center">Room Type</h4>
									</div><br>
									<div class="panel-body-right text-center">

										<?php
										include('connection.php');
										$sql1=mysqli_query($con,"select * from rooms");
										while($result1= mysqli_fetch_assoc($sql1))
										{

										?>
										<a href="room_details.php?room_id=<?php echo $result1['room_id']; ?>"><?php echo $result1['type']; ?></a><hr>
										<?php } ?>

									</div>
								</div>
							</div>
                    <!-- end: sidebar-->
                </div>
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
