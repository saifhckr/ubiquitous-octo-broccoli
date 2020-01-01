<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> Account already exists</h1>";
  }
  else
  {

      $sql="insert into create_account(name,email,password,mobile,address,gender,country) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Successfully Registered</h1>";
   header('location:Login.php');
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
<?php
include('Menu Bar.php');

?>
  </div>
</nav>
<div id="wrapper">
    <section>
		<div class="container">
			<div class="hr-title hr-long center"><abbr>Create New Account</abbr>
            </div>
			<div class="row">
				<center><?php  echo $msg; ?></center>
				<div class="col-md-10 col-md-offset-1">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="name">Name</label>
									<input type="text" class="form-control required" name="fname" required="required" placeholder="Enter Your Name"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="email">Email-Id</label>
									<input type="text" class="form-control required" name="email" placeholder="Enter your Email-Id" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="password">Password</label>
									<input type="password" class="form-control required" name="Passw" required="required" placeholder="Enter Password" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="address">Address</label>
									<textarea class="form-control required" name="addr" required="required" placeholder="Enter your Address"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="mobile">Moblie No.</label>
									<input type="text" class="form-control required" name="mobi" required="required" placeholder="Enter Mobile No." />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="gender">Gender</label>
									<input type="radio" value="male" name="gend" required >Male<br>
									<input type="radio" value="female" name="gend" required >Female<br>
									<input type="radio" value="other" name="gend" required >Other<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="country">Country</label>
									<input type="text" name="countr" class="form-control required" required="required" placeholder="Enter Your Country"/>
								</div>
							</div>
						</div>
						<div class="row">
        					<div class="col-md-4">
        						<div class="form-group text-center">
    								<input class="btn btn-default" type="submit" value="submit" name="save"/>
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
