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
                        <li><a href="contact.php">Contact Us</a> </li>
                    </ul>
                </div>
                <div class="page-title">
                    <h1>Get in touch with us</h1>
                    <span>Reach Us Here</span>
                </div>
            </div>
        </section>
                <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>Submit your Experience , Precious Reviews and queries(if any) .Your response can make our service better.Tell us about if there is any bias and share your ideas to make this platform even better.</p>
					<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form action="include/contact-form.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="name">Your Name</label>
										<input type="text" class="form-control required" name="name" placeholder="Enter your name" id="name3" aria-required="true">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="email">Your Email</label>
										<input type="email" class="form-control required email" name="email" placeholder="Enter your email" id="email3" aria-required="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="upper" for="phone">Subject</label>
										<input type="text" class="form-control required" name="subject" placeholder="Subject...." id="phone3" aria-required="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="upper" for="comment">Message</label>
										<textarea class="form-control required" name="message" rows="9" placeholder="Enter your Message" id="comment3" aria-required="true"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center">
										<button class="btn btn-default" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

                    </div>
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Address</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                  <strong>Online Hotel</strong><br>
                                  F-56, Vishwakarma colony<br>
                                  Pul Pehlad Pur, New Delhi-110044<br>
                                  <abbr title="Phone">M:</abbr> (+91) 8802953836<br>
								  <abbr title="Phone">Email:</abbr>contact@onlinehotel.com
                                  </address>
                            </div>
                            
                        </div>


                    </div>
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