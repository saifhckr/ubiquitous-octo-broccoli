<?php
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Document title -->
    <title>Footer</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
 <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>Contact Us</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> F-56, Vishwakarma Colony
                                        <br> Pul Pehlad Pur, New Delhi-110044</li>
                                    <li><i class="fa fa-phone"></i> (+91) 8802953836 </li>
                                    <li><i class="fa fa-envelope"></i> contact@onlinehotel.com
                                    </li>
                                    <li>
                                        <br><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 AM - 08:00 PM</strong>
                                        <br>Saturday, Sunday: <strong>Closed</strong>
                                    </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Quick LInks</h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="image gallery.php">Gallery</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
							<div class="widget">
								<h4>Types of Room Available</h4>
								<ul class="list-icon list-icon-arrow">
									<li><a href="Deluxe Rooom.php">Deluxe Room</a></li>
									<li><a href="Luxurious Suite.php">Luxurious Suite</a></li>
									<li><a href="Standard Room.php">Standard Room</a></li>
									<li><a href="Suite Room.php">Suite</a></li>
									<li><a href="Twin Deluxe Room.php">Twin Deluxe Room</a></li>
								</ul>
							</div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->
                            <div class="widget">
                                    <div class="panel panel-primary">
										<div class="panel-heading">Feedback</div>
											<div class="panel-body">
												<?php echo @$msg; ?>
												<div class="feedback">
													<form method="post"><br>
														<div class="form-group">
															<input type="text" name="n" class="form-control" id="#" placeholder="Enter Your Name"required>
														</div>
														<div class="form-group">
															<input type="Email" name="e" class="form-control" id="#" placeholder="Email"required>
														</div>
														<div class="form-group">
															<input type="Number" name="mob" class="form-control" id="#" placeholder="Mobile Number"required>
														</div>
														<div class="form-group">
															<textarea type="Text" name="msg" class="form-control" id="#" placeholder="Type Your Message"required></textarea>
														</div>
														<input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
													</form>
												</div>
											</div>
									</div>
                            </div>
                            <!-- end: Footer widget area 4 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; Developed by Saif Ali Ansari. All Rights Reserved 2019.</div>
                </div>
            </div>
        </footer>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>
	</html>
