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
        <!-- page title -->
<div id="slider" class="inspiro-slider slider-fullscreen arrows-large arrows-creative dots-creative" data-height-xs="360">

            <!-- Slide 1 -->
            <div class="slide kenburns" style="background-image:url('image/slider/slide1.jpg');">
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                         <span class="strong"><h3>WELCOME TO </h3></span>
                        <h2 class="text-dark" ><br>ONLINEHOTEL.COM</h2>
                            <a class="btn">WELCOME</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->

            <!-- Slide 2 -->
            <div class="slide kenburns" style="background-image:url('image/slider/slide2.jpg');">
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                         <span class="strong"><h3>KNOW MORE ABOUT</h3></span>
                        <h2 class="text-dark" ><br>ONLINEHOTEL.COM</h2>
                            <a class="btn" href="about.php">WKHO WE ARE</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->

			<!-- Slide 3 -->
            <div class="slide kenburns" style="background-image:url('image/slider/slide3.jpg');">
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                         <span class="strong"><h3>CHECK OUT</h3></span>
                        <h2 class="text-dark" >IMAGE GALLERY OF<br>ONLINEHOTEL.COM</h2>
							<a class="btn" href="image gallery.php">Gallery</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
			<!-- end: Slide 3 -->

        </div>

		<!-- end page title -->
		<section class="p-b-0">
            <div class="container">
                <div class="heading heading-center m-b-40" data-animation="fadeInUp">
                    <h2>WELCOME TO ONLINEHOTEL.COM</h2>

                </div>
				<span class="lead"><p>Established in 2000 in New Delhi, onlinehotel.com has grown from a small Dutch start-up to one of the largest travel e-commerce companies in the world. Part of onlinehotel Holdings Inc. (NASDAQ: BKNG), onlinehotel.com now employs more than 17,000 employees in 198 offices in 70 countries worldwide.<br>

With a mission to make it easier for everyone to experience the world, onlinehotel.com invests in digital technology that helps take the friction out of travel. At onlinehotel.com, we connect travellers with the world’s largest selection of incredible places to stay, including everything from apartments, vacation homes, and family-run B&Bs to 5-star luxury resorts, tree houses and even igloos.</p></span>
				<a class="btn" href="about.php">KNOW MORE</a><br>
            </div>
		</section>
		<!-- display rooms-->
<section class="content background-grey">
            <div class="container">
			<div class="heading heading-center">
				<h3 style="allign:center;">SERVICES</h3>
			</div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

<?php
$sql=mysqli_query($con,"select * from rooms");
while($r_res=mysqli_fetch_assoc($sql))
{
?>
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">

                                    <img alt="img" style="width:100%; height:190px;" src="image/rooms/<?php echo $r_res['image']; ?>">


                            </div>
                            <div class="post-item-description">
                                <h2><a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>"><?php echo $r_res['type']; ?></a></h2>
                                <p><?php echo substr($r_res['details'],0,100); ?>...</p>

                                <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
<?php } ?>
                </div>
            </div>
</section>
        <!-- display rooms -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="lead">Our awesome clients we've had the pleasure to work with!</p>
			</div>
		</div>
		<ul class="grid grid-5-columns">
			<li>
				<a href="#"><img src="image/clients/1.jpg" alt="">
				</a>
			</li>
			<li>
				<a href="#"><img src="image/clients/2.png" alt="">
				</a>
			</li>
			<li>
				<a href="#"><img src="image/clients/3.png" alt="">
				</a>
			</li>
			<li>
				<a href="#"><img src="image/clients/4.png" alt="">
				</a>
			</li>
			<li>
				<a href="#"><img src="image/clients/5.jpg" alt="">
				</a>
			</li>
		</ul>

	</div>



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
