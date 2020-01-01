<?php 
if(isset($_GET['a'])){
	$x=$_GET['a'];
	
}
else{
	$x=1;
}

include('function.php');
?>
<!DOCTYPE html>
<html lang="en">

 <head> <meta name="viewport" content="width=device-width, initial-scale=1" /> <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" /> <meta name="description" content="Themeforest Template Polo"> <!-- Document title --> <title>SRMS</title> <!-- Stylesheets & Fonts --> <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> <link href="css/plugins.css" rel="stylesheet"> <link href="css/style.css" rel="stylesheet"> <link href="css/responsive.css" rel="stylesheet"> </head>

<body>	<!-- Wrapper -->
	<div id="wrapper">

		 <!-- Topbar -->
        <div id="topbar" class="topbar-transparent topbar-fullwidth dark visible-md visible-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 style="color: white;">SRMS</h3>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Topbar -->

        <!-- Header -->
        <header id="header" class="header-fullwidth header-transparent dark">
            <div id="header-wrap">
                <div class="container" style="height:0px;margin-left:40px;">
                    <!--Logo-->
					<div class="row">
					    <div class="col-md-4"></div>
							<div id="logo" class="col-md-3 ">
								<a href="index.php" class="logo" data-dark-logo="main_images/logo.jpg">
									<img src="main_images/logo.jpg" alt="Polo Logo">
								</a>
						<div class="col-md-4"></div>
						</div>
					</div>
                    <!--End: Logo-->
  
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Inspiro Slider -->
        <section id="slider" class="inspiro-slider slider-fullscreen arrows-large arrows-creative dots-creative" data-height-xs="360">
            <!-- Slide 1 -->
            <div class="slide background-overlay" data-parallax-image="main_images/main.jpg">
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        
                        <h1 data-animation="fadeInUp" data-animation-delay="600">SRMS<br></h1>
                        <h3 data-animation="fadeInUp" data-animation-delay="600">STUDENT RESULT MANAGEMENT SYSTEM<br></h3>
						 
                        
                        <a data-animation="fadeInUp" data-animation-delay="900" class="btn btn-rounded btn-light" href="student_login.php">STUDENT LOGIN </a>
                        <a data-animation="fadeInUp" data-animation-delay="900" class="btn btn-rounded btn-light" href="index.php">HOME</a>
						<a data-animation="fadeInUp" data-animation-delay="900" class="btn btn-rounded btn-light" href="teacher_login.php">TEACHER LOGIN</a>

                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
        </section>

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
<!--Plugins-->
 <script src="js/jquery.js"></script>
 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script> 

</body>

</html>
