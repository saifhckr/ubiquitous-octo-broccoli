<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <title>BLOOD BANK MANAGEMENT SYSTEM</title>

    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />

    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />

	<style type="text/css">


	#blood{position:absolute;
			left:750px;
			top:161px;}

	#city{position:absolute;
			left:500px;}


	#sub{position:relative;
			left:525px;
			top:52px;}
			
	h2:after {
    
    background: #fff; 
  
}

	</style>


</head>
<body>

<div class="container-fluid" style="padding:0px;">
    <div id="home" class="navbar navbar-default move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="home.html">
                    <img src="assets/img/logo.jpg" class="navbar-brand-logo " alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="home.html">HOME <i class="fa fa-bars"></i>
                         <span>Introduction</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="donate.html">DONATE<i class="fa fa-bars"></i>
                         <span>Eligibility</span>

                        </a>

                    </li>


						<li class="dropdown">
                        <a href="about.html">ABOUT<i class="fa fa-bars"></i>
                         <span>Info/FAQ</span>

                        </a>
					</li>


                      <li class="dropdown">
                        <a href="Contact.html">CONTACT<i class="fa fa-bars"></i>
                            <span>Reach us Here</span>
                        </a>

                    </li>

                    <li class="dropdown">
                        <a href="../signup/signup.html">LOGIN <i class="fa fa-bars"></i>
                         <span>Sign Up</span>
                        </a>

                    </li>

                    <li class="dropdown">
                        <a href="raise.php">RAISE A REQUEST<i class="fa fa-bars"></i>
                        <span>Raise your request</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="Find.php">FIND BLOOD BANK <i class="fa fa-bars"></i>
                        <span>Search for Help</span>
                        </a>

                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!--./ NAV BAR END -->
    <div class="header-sec-bar" >
        <span>
            <h3></h3>

        </span>

    </div>

	<hr>



<div class="col-md-12">
<div><h2>Raise Your Request</h2></div>
<form action="1.php" method="post">
<div style="padding-top:10px;">
<label>YOUR NAME:&nbsp;</label>
<span style="margin-left:20px;"><input type="text" name="name" required="required" placeholder="ENTER YOUR NAME"></span><br>
</div>
<div style="padding-top:10px;">
<label>YOUR EMAIL:&nbsp;</label>
<span style="margin-left:20px;"><input type="email" name="email" required="required" placeholder="ENTER YOUR EMAIL"></span><br>
<div>
<div style="padding-top:10px;">
<label>AGE:&nbsp;</label>
<span style="margin-left:75px;"><input type="number" name="age" required="required" placeholder="ENTER YOUR AGE"></span><br>
</div>
<div style="padding-top:10px;">
<label>BLOOD GROUP REQUIRED:&nbsp;</label>
<select name="blood">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select><br>
</div>
<div style="padding-top:10px;">
<label>MOBILE NUMBER:&nbsp;</label>
<input type="number" name="mobile" required="required" placeholder="ENTER YOUR MOBILE NUMBER"><br>
</div>
<div style="padding-top:10px;">
<label>SELECT STATE:&nbsp;</label>
<select name='state'>
  <?php
  error_reporting(0);
  mysql_connect("127.0.0.1","root","");
  mysql_select_db("blood_bank");

    $t=mysql_query("select * from state_list");
    while($r=mysql_fetch_array($t)){

      $fetch_row = $r['state'];
?>

    <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>

<?php


    }

  ?>
</select>
</div>
<br>
<br>



	<input type="submit" value="SUBMIT!!">

</form>

</div>

<br>
<br>
<br>


	</div>
	<!--Home Edits End-->
<br><br><br><br>





    <!--Footer Starts-->
    <div id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4" id="about-ftr">
                    <h3><span>FOLLOW US</span></h3>

                    <h5><a href="https://www.facebook.com/">Facebook</a></h5>
                    <h5><a href="https://www.instagram.com/accounts/login/">Instagram</a></h5>
                    <h5><a href="https://plus.google.com/discover">Google+</a></h5>

                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><span>SOME HEROES</span></h3>
                    <div id="blog-footer-div">
                        <div class="media">
                            <div class="pull-left">
                                <img src="assets/img/user2.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading">JORDON</span>
                                <small class="muted">From DELHI</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="assets/img/user.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading">ASIM KHAN</span>
                                <small class="muted">From LUCKNOW</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h3><span>GIVE HOPE</span></h3>
                    <div>
                       Jamia Hamdard ,New Delhi (110062)
                    <br />
                    Call : +91 8802953836
           <br>
            Call :  +91 9457851519
                       <br />
                       E-mail: saifali130998@gmail.com
           <br>
            E-mail:  na09109@gmail.com
                    </div>

<br />
                    <div class="form-group">
                        <button type="submit" class="btn btn-style-2 "><a href="../signup/signup.html">VOLUNTEER</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="footser-end">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    2018 All Rights Reserved

                </div>
            </div>

        </div>
    </div>
    <!--./ footer-end End -->


    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
