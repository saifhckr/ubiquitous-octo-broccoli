<?php 
include('../function.php');
if (isset($_SESSION['teacher_id'])) 
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
								<a href="home.php" class="logo" data-dark-logo="../main_images/logo.jpg">
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
                                <a href="home.php" >
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
				<div class="hr-title hr-long center"><abbr>VIEW SUBJECTS</abbr> </div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form action="" method="get">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="name">SLECT SEMESTER</label>
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

														} else 
														{
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
						<div class="row">
								<div class="col-md-6">
									<div class="form-group">
<?php
    $store=$_GET['semester'];
    if($store=='Ist Semester')
    {
    	$t=mysql_query("select sno,subject from semester1 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";
		}
    }
    elseif($store=='IInd Semester')
    {
    	$t=mysql_query("select sno,subject from semester2 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";		}
	}
	elseif($store=='IIIrd Semester')
	{
		$t=mysql_query("select sno,subject from semester3 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";		}	
	}
	elseif($store=='IVth Semester')
	{
		$t=mysql_query("select sno,subject from semester4 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";		}
	}
	elseif($store=='Vth Semester')
	{
		$t=mysql_query("select sno,subject from semester5 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";		}
	}
	elseif($store=='VIth Semester')
	{
		$t=mysql_query("select sno,subject from semester6 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";
		}
	}
	elseif($store=='VIIth Semester')
	{
		$t=mysql_query("select sno,subject from semester7 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";
		}
	}
	elseif($store=='VIIIth Semester')
	{
		$t=mysql_query("select sno,subject from semester8 where teacher_id='".$_SESSION['teacher_id']."'");
		while($r=mysql_fetch_array($t))
		{
			echo "<ul>";
			echo "<li>".$r['subject']."</li>";
			echo "</ul>";
		}
	}
	else
	{
		echo "PLEASE SELECT A VALID OPTION";
	}
?>
									</div>
								</div>
							</div>
					</div>
				</div>
				<!--END: Default Form-->
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
	header('location:../teacher_login.php');
}
?>

