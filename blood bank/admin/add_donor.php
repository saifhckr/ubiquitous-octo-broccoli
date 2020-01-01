<?php
include('../function.php');
if (isset($_SESSION['email']))
{

?>



<!DOCTYPE html>
<html lang="en">


 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <meta name="author" content="INSPIRO" />
 <meta name="description" content="Themeforest Template Polo">
 <!-- Document title --> <title>Admin-BLOOD BANK</title> <!-- Stylesheets & Fonts -->
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
 <link href="../css/plugins.css" rel="stylesheet">
 <link href="../css/style.css" rel="stylesheet">
 <link href="../css/responsive.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">

  </head>

<body style="background-color:#ff0000 ;">


    <!-- Wrapper -->
    <div id="wrapper">



        <!-- Header -->
        <header id="header" class="header-fullwidth header-transparent">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                <div class="container" style="height:0px;margin-left:40px;">
                    <!--Logo-->
					<div class="row">
					    <div class="col-md-4"></div>
							<div id="logo" class="col-md-3 ">
								<a href="welcome.php" class="logo" data-dark-logo="../main_images/logo.jpg">
									<img src="../main_images/logo.jpg">
								</a>
						<div class="col-md-4"></div>
						</div>
					</div>
                    <!--End: Logo-->

                </div>
                    <!--End: Logo-->



                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <div id="shopping-cart">
								<a href="welcome.php" >
                                 <i class="fas fa-home fa-3x"></i>

                                </a>
								</div>
                                <!--end: top search-->
                            </li>
                            <li class="hidden-xs">
                                <!--shopping cart-->
                                <div id="shopping-cart">
                                    <a href="logout.php">

                                        <i class="fas fa-sign-out-alt fa-3x"></i>
									</a>
                                </div>
                                <!--end: shopping cart-->
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->



                </div>
            </div>
        </header>
        <!-- end: Header -->




        <!-- Section -->
        <section>
            <div class="container" >



                <!--Team Carousel -->
                <!--Team members (Carousel with description) -->
                <div class="hr-title hr-long center"><abbr>ADD NEW DONOR</abbr>
                </div>
                <div class="row">
        					<div class="col-md-10 col-md-offset-1">
        						<form action="donoradded.php" method="post">
        							<div class="row">
        								<div class="col-md-6">
        									<div class="form-group">
        										<label class="upper" for="name">Name</label>
        										<input type="text" class="form-control required" name="name" required="required" placeholder="Enter name">
        									</div>
        								</div>
        							</div>
        							<div class="row">
        								<div class="col-md-6">
        									<div class="form-group">
        										<label class="upper" for="email">Email</label>
        										<input type="email" class="form-control required email" name="email" required="required" placeholder="Enter email">
        									</div>
        								</div>
        							</div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="upper" for="password">Gender</label>
                            <select class="form-control required" name="gender" required="required">
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="upper" for="password">Blood Group</label>
                            <select class="form-control required" name="bgroup" required="required">
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="upper" for="password">Age</label>
                            <input type="number" class="form-control required" name="age" required="required" placeholder="Enter Age">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="upper" for="password">Mobile Number</label>
                            <input type="text" class="form-control required" name="phone" required="required" placeholder="Enter Mobile Number">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="upper" for="password">Password</label>
                            <input type="password" class="form-control required" name="password" required="required" placeholder="Enter Password">
                          </div>
                        </div>
                      </div>
        							<div class="row">
        								<div class="col-md-4">
        									<div class="form-group text-center">
        										<button class="btn btn-default" type="submit">SUBMIT</button>
        									</div>
        								</div>
        							</div>
        						</form>
        					</div>
                </div>
        </section>
        <!-- end: Section -->


    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop">
	<i class="fa fa-angle-up top-icon"></i>
	<i class="fa fa-angle-up"></i>
	</a><!--Plugins-->
 <script src="../js/jquery.js"></script>
 <script src="../js/plugins.js"></script>

<!--Template functions-->
 <script src="../js/functions.js"></script>




</body>

</html>



<?php
}
else
{
	header('location:index.php');
}
?>
