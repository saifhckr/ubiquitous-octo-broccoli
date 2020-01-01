<?php
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update create_account set name='$name',password='$pass',mobile='$mob',address='$add' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">
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
       	<li><a href="logout.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Logout</a></li>
	    <li><a href="user.php" title="dashboard"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Dashboard</a></li>
	  </ul>
    </div>
  </div>
</nav>
<div id="wrapper">
    <section>
		<div class="container">
			<div class="hr-title hr-long center"><abbr>USER PROFILE</abbr>
            </div>
 <?php
     $sql= mysqli_query($con,"select * from create_account where email='$eid' ");
     $result=mysqli_fetch_assoc($sql);
?>
			<div class="row">
				<center><?php  echo $msg; ?></center>
				<div class="col-md-10 col-md-offset-1">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="name">Name</label>
									<input type="text" class="form-control required" name="name" required="required" value="<?php echo $result['name']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="email">Email-Id</label>
									<input type="text" class="form-control required" readonly="readonly" value="<?php echo $result['email']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="password">Password</label>
									<input type="text" class="form-control required" name="pass" required="required" value="<?php echo $result['password']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="mobile">Mobile</label>
									<input type="text" class="form-control required" name="mob" required="required" value="<?php echo $result['mobile']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="address">Address</label>
									<input type="text" class="form-control required" name="add" required="required" value="<?php echo $result['address']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="gender">Gender</label>
									<input type="text" class="form-control required" name="name" readonly="readonly" value="<?php echo $result['gender']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
        					<div class="col-md-4">
        						<div class="form-group text-center">
    								<input class="btn btn-default" type="submit" name="update" value="UPDATE PROFILE">
  								</div>
    						</div>
       					</div>
					</form>
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
