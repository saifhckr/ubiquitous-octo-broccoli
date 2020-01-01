<?php
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' ");
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from room_booking_details where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";
  }
  else
  {

   $sql="insert into room_booking_details(name,email,phone,address,city,state,zip,contry,room_type,Occupancy,check_in_date,check_in_time,check_out_date)
  values('$name','$email','$phone','$address','$city','$state','$zip','$country',
  '$room_type','$Occupancy','$cdate','$ctime','$codate')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='order.php'>View </a></h2>";
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
			<div class="hr-title hr-long center"><abbr>BOOKING FORM</abbr>
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
									<input type="text" class="form-control required" name="name" readonly="readonly" required="required" value="<?php echo $result['name']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="email">Email-Id</label>
									<input type="text" class="form-control required" readonly="readonly" name="email" value="<?php echo $result['email']; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="mobile">Mobile</label>
									<input type="text" class="form-control required" name="phone" required="required" readonly="readonly" value="<?php echo $result['mobile']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="address">Address</label>
									<input type="text" class="form-control required" name="address" required="required" readonly="readonly" value="<?php echo $result['address']; ?>">
								</div>
							</div>
						</div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="upper" for="country">country</label>
                  <input type="text" class="form-control" readonly="readonly" name="country" value="<?php echo $result['country'];?>" required/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="upper" for="country">country</label>
                  <input type="text" class="form-control"name="state" placeholder="Enter Your State Name" required/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="upper" for="city">city</label>
                  <input type="text" name="city" class="form-control" placeholder="Enter Your City" required/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="upper" for="pin-code">zip code</label>
                  <input type="text" name="zip" class="form-control" placeholder="Enter Your Zip Code" required/>
                </div>
              </div>
            </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="room">Room Type</label>
									<select name="room_type">
										<option>Deluxe Room</option>
										<option>Luxurious Suite</option>
										<option>Standard Room</option>
										<option>Suite</option>
										<option>Deluxe Room</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="check-in-date">check in date</label>
									<input type="date" name="cdate" class="form-control required" required="required"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="check-out-date">check out date</label>
									<input type="date" name="codate" class="form-control required"required="required"/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="check-in-time">check in time</label>
									<input type="time" name="ctime" class="form-control required" required="required"/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="upper" for="occupancy">occupancy</label>
									<input type="radio" value="single" name="Occupancy" required >Single<br>
									<input type="radio" value="doubble" name="Occupancy" required >Double<br>
									<input type="radio" value="twin" name="Occupancy" required >Twin<br>
								</div>
							</div>
						</div>
						<div class="row">
        					<div class="col-md-4">
        						<div class="form-group text-center">
    								<input class="btn btn-default" type="submit" value="submit" name="savedata"/>
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
