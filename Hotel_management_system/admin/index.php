<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($login))
{
	if($eid=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";
	}
	else
	{
	$sql=mysqli_query($con,"select * from admin where username='$eid' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$eid;
		header('location:dashboard.php');
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";
		}
	}
}
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
        <li><a href="../index.php"title="Home">Home</a></li>
        <li><a href="../about.php"title="About">About </a></li>
		    <li><a href="../image gallery.php"title="Gallery">Gallery </a></li>
		<li><a href="../contact.php"title="Contact Us">Contact Us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        		<li><a href="../Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		      </ul>
    </div>
  </div>
</nav>
<div id="wrapper">
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
      <div class="col-sm-4"></div>
		<div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#990707;">

			<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;text-shadow:5px 5px #000;">Admin Login ?</font></b></h1>

          <img src="../image/clipart/user.png"alt="Bird" width="200" height="170"style="padding-top:30px;">

			<?php echo @$error;?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="email" class="form-control" name="eid" placeholder="Email Id"required>
              </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Password"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
      	</form><br>
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
