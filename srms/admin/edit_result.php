<?php 
include('../function.php');
if (isset($_SESSION['Email'])) 
{
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">


 <head> <meta name="viewport" content="width=device-width, initial-scale=1" /> <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" /> <meta name="description" content="Themeforest Template Polo"> <!-- Document title --> <title>SRMS</title> <!-- Stylesheets & Fonts --> <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> <link href="../css/plugins.css" rel="stylesheet"> <link href="../css/style.css" rel="stylesheet"> <link href="../css/responsive.css" rel="stylesheet"> </head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">
<body>
	

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
        <header id="header" class="header-fullwidth header-transparent dark">
			<div id="header-wrap">
			<body style="background-color: #32CD32">
				<div class="container">
                    <!--Logo-->
                <div class="container" style="height:0px;margin-left:40px;">
                    <!--Logo-->
					<div class="row">
					    <div class="col-md-4"></div>
							<div id="logo" class="col-md-3 ">
								<a href="welcome.php" class="logo" data-dark-logo="../main_images/logo.jpg">
									<img src="../main_images/logo.jpg" alt="Polo Logo">
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
                                <a href="welcome.php" >
                                 <i class="fas fa-home fa-5x"></i>  
                                  
                                </a>
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
                            </li></ul>
                    </div>
                    


				</div>
			</div>
		</header>
		<!-- end: Header -->


				
		<!-- Section -->
		<section>
			<div class="container">

				<!--Default Form-->
				<div class="hr-title hr-long center"><abbr>RESULT</abbr> </div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form action="" method="get">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="name">SELECT SEMESTER</label>
										<select name="semester">
											  <option>SELECT</option>
											  <?php
											$hostname="127.0.0.1";
											$username="root";
											$password="";
											$dbname="srms";


											// Create connection
											$conn = mysqli_connect($servername, $username, $password, $dbname);
											// Check connection
											if (!$conn) {
											    die("Connection failed: " . mysqli_connect_error());
											}

											$sql = "SELECT * FROM semester";
											$result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											    // output data of each row
											    while($row = mysqli_fetch_assoc($result)) {
											        $fetch_row = $row['sem'];
								            
								            ?>       

								                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
								            
								            <?php


												    }

												} else {
												    echo "0 results";
												}

												mysqli_close($conn);

								            ?>
										</select>
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
						<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										
										<?php
$_SESSION['semester']=$_GET['semester'];
$store=$_SESSION['semester'];
if($store=='Ist Semester')
{
	?>
<form action="edit.php" method="post">
	<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='Ist Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
									<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>


<?php	
}
elseif ($store=='IInd Semester')
{
?>
<form action="edit1.php">
	<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='IInd Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
									<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php	
}
elseif($store=='IIIrd Semester')
{
?>
<form action="edit2.php" method="post">
		<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='IIIrd Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
										<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php
}
elseif($store=='IVth Semester')
{
?>
<form action="edit3.php">
		<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='IVth Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
										<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php
}
elseif($store=='Vth Semester')
{
?>
<form action="edit4.php">
		<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='Vth Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
										<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php
}
elseif($store=='VIth Semester')
{
?>
<form action="edit5.php" method="post">
		<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='VIth Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
										<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php
}
elseif ($store=='VIIth Semester')
{
?>
<form action="edit6.php" method="post">
		<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='VIIth Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
										<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php
}
elseif($store=='VIIIth Semester')
{
?>
<form action="edit7.php" method="post">
		<div class="lablewidth">
		<label>Select Student ID</label>
	</div>
	<div class="inputwidth">
		<select name="id" required="required">
			  <option>SELECT</option>
			  <?php
			$hostname="127.0.0.1";
			$username="root";
			$password="";
			$dbname="srms";


			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM student_logindetails where Semester='VIIIth Semester'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $fetch_row = $row['Id'];
            
            ?>       

                     <option value="<?php echo $fetch_row; ?>"><?php echo $fetch_row; ?></option>
            
            <?php


				    }

				} else {
				    echo "0 results";
				}

				mysqli_close($conn);

            ?>
		</select>
	</div>
<div class="row">
								<div class="col-md-4">
									<div class="form-group text-center">
										<br><button class="btn btn-default" type="submit">SUBMIT</button>
									</div>
								</div>
							</div>
</form>
<?php
}
else
{
	echo "<h4>PLEASE SELECT A VALID OPTION<h4>";
}
?>

									</div>
								</div>
							</div>
				</div>
				</div>
			</div>

			<hr class="space">

</section>
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

