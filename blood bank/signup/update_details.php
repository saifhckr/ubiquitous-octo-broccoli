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
 <!-- Document title --> <title>MY ACCOUNT</title> <!-- Stylesheets & Fonts -->
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
								<a href="myaccount.php" class="logo" data-dark-logo="../main_images/logo.jpg">
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
								<a href="myaccount.php" >
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

                <div class="hr-title hr-long center"><abbr>UPDATE DETAILS</abbr>
                </div>

<?php $t=mysql_query("select * from donor where email='".$_SESSION['email']."'");
while($r=mysql_fetch_array($t))
{
$s= $r['name'];
$s1=$r['email'];
$s2=$r['gender'];
$s3=$r['blood_group'];
$s4=$r['age'];
$s5=$r['mobile'];
} ?>
                    <div class="row">
            					<div class="col-md-10 col-md-offset-1">
            						<form action="update.php" method="post">
            							<div class="row">
            								<div class="col-md-6">
            									<div class="form-group">
            										<label class="upper" for="name">NAME</label>
            										<input type="text" class="form-control required" name="name" required="required" value="<?php echo $s; ?>">
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-6">
            									<div class="form-group">
            										<label class="upper" for="name">EMAIL</label>
            										<input type="email" class="form-control required" name="email" required="required" value="<?php echo $s1; ?>">
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-6">
            									<div class="form-group">
            										<label class="upper" for="name">GENDER</label>
            										<input type="text" class="form-control required" name="gender" required="required" value="<?php echo $s2; ?>">
            									</div>
            								</div>
            							</div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="upper" for="name">BLOOD GROUP</label>
                                <input type="text" class="form-control required" name="bgroup" required="required" value="<?php echo $s3; ?>">
                              </div>
                            </div>
                          </div>
            							<div class="row">
            								<div class="col-md-6">
            									<div class="form-group">
            										<label class="upper" for="name">AGE</label>
            										<input type="number" class="form-control required" name="age" required="required" value="<?php echo $s4; ?>">
            									</div>
            								</div>
            							</div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="upper" for="name">MOBILE</label>
                                <input type="tel" class="form-control required" name="mobile" required="required" value="<?php echo $s5; ?>">
                              </div>
                            </div>
                          </div>
            							<div class="row">
            								<div class="col-md-6">
            									<div class="form-group">
            										<label class="upper" for="name">PASSWORD</label>
            										<input type="password" class="form-control required" name="pass" required="required" placeholder="ENTER PASSWORD" id="name" aria-required="true">
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-4">
            									<div class="form-group text-center">
            										<button class="btn btn-default" type="submit">UPDATE</button>
            									</div>
            								</div>
            							</div>
            						</form>
            					</div>
                  </div>

<div style="color:red">

NOTE: YOU CANNOT CHANGE YOUR EMAIL AND BLOOD GROUP.
</div>
        </section>
        <!-- end: Section -->



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
