<?php
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
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

        		<li><a href="logout.php" title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Logout</a>
        </li>
        <li><a href="user.php" title="dashboard"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Dashboard</a></li>
		      </ul>
    </div>
  </div>
</nav>
<div id="wrapper">
    <section id="page-content" class="sidebar-right">
		<div class="container">
			<div class="hr-title hr-long center"><abbr>MENU</abbr>
            </div>
               <div class="carousel team-members team-members-shadow" data-arrows="false" data-margin="20" data-items="4">

                        <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="Booking Form.php">
                                <image style="width:100px; height:100px; margin-left:80px;" src="image/icon/form.png"/>
                            </div>
                            <div class="team-desc">
                               <h3>Booking Form</h3></a>
                            </div>
                        </div>

                         <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="order.php">
								<image style="width:100px; height:100px; margin-left:80px;" src="image/icon/status.png"/>
                            </div>
                            <div class="team-desc">
                               <h3>Booking Details</h3></a>
                            </div>
                        </div>

                        <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="profile.php">
								<image style="width:100px; height:100px; margin-left:80px" src="image/icon/profile.png"/>
                            </div>
                            <div class="team-desc">
                               <h3>View Profile</h3></a>
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
