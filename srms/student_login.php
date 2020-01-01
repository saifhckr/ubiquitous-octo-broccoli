

<?php 


include('function.php');
?>

<!DOCTYPE html>
<html lang="en">

 <head> <meta name="viewport" content="width=device-width, initial-scale=1" /> <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" /> <meta name="description" content="Themeforest Template Polo"> <!-- Document title --> <title>SRMS</title> <!-- Stylesheets & Fonts --> <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> <link href="css/plugins.css" rel="stylesheet"> <link href="css/style.css" rel="stylesheet"> <link href="css/responsive.css" rel="stylesheet"> </head>

<body style="background-image:url(main_images/student3.jpeg)";>	

<div id="wrapper">
	<br/><br/><br/><br/>
	<div class="container">
        
            <!-- Captions -->
        <div class="row">
        	<div class="col-md-2"></div>
        	    <div class="col-md-6 col-md-push-1" style="margin-left:75px;">
			        <a  class="btn btn-rounded btn-light" href="student_login.php" style="color:black;">STUDENT LOGIN </a>
			        <a  class="btn btn-rounded btn-light" href="index.php" style="color: black;">HOME</a>
					<a  class="btn btn-rounded btn-light" href="teacher_login.php" style="color: black;">TEACHER LOGIN</a>
                </div>
            <div class="col-md-1"></div>
        </div>
            <!-- end: Captions -->
        
    </div>
<br/><br/><br/><br/><br/><br/>
<div class="hr-title hr-long center"><abbr>Student Login</abbr> </div>
	   
	    <div class="row">
					<div class="col-md-4 col-md-offset-4">
						<form action="student\check.php" method="post">
							<div class="form-group">
								<label class="sr-only">Enter Your ID</label>
								<input type="text" class="form-control" name="Id" placeholder="Enter Your ID">
							</div>
							<div class="form-group">
								<label class="sr-only">Password</label>
								<input type="password" class="form-control" name="Password" placeholder="Password">
							</div>
							<div class="form-inline form-group">
								<button class="btn btn-default" type="submit">Login</button>
								
							</div>
							
						</form>
					</div>
        </div>
</div>

 <script src="js/jquery.js"></script>
 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script> 

</body>

</html>

