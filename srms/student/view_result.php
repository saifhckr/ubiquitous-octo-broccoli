<?php
include('../function.php');
if (isset($_SESSION['Id']))
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
											$conn = mysqli_connect($hostname, $username, $password, $dbname);
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
				</div>
				<div class="table-responsive">
			      <table class="table table-bordered">
			        <?php
    $store = $_GET['semester'];
    if($store=='Ist Semester')
    {
    	echo "<br>";
    	$t=mysql_query("select * from semester1_marks where student_id='".$_SESSION['Id']."'");
  //  	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";

		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}

    }
}
    elseif($store=='IInd Semester')
    {
    	echo "<br>";
    	$t=mysql_query("select * from semester2_marks where student_id='".$_SESSION['Id']."'");
    //	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";

		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	elseif($store=='IIIrd Semester')
	{
    	echo "<br>";
    	$t=mysql_query("select * from semester3_marks where student_id='".$_SESSION['Id']."'");
    //	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";

		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	elseif($store=='IVth Semester')
	{
    	echo "<br>";
    	$t=mysql_query("select * from semester4_marks where student_id='".$_SESSION['Id']."'");
    //	echo "<table border='1' width='400'>";
    $s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";

		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	elseif($store=='Vth Semester')
	{
    	echo "<br>";
    	$t=mysql_query("select * from semester5_marks where student_id='".$_SESSION['Id']."'");
 //   	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";

		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	elseif($store=='VIth Semester')
	{
    	echo "<br>";
    	$t=mysql_query("select * from semester6_marks where student_id='".$_SESSION['Id']."'");
   // 	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";
		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	elseif($store=='VIIth Semester')
	{
    	echo "<br>";
    	$t=mysql_query("select * from semester7_marks where student_id='".$_SESSION['Id']."'");
   // 	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";
		echo "</tr>";
echo "</thead>";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	elseif($store=='VIIIth Semester')
	{
    	echo "<br>";
    	$t=mysql_query("select * from semester8_marks where student_id='".$_SESSION['Id']."'");
    //	echo "<table border='1' width='400'>";
    	$s=mysql_num_rows($t);
    	if($s==NULL)
    	{
    		echo "RESULT HAS NOT BEEN UPLOADED YET";
    	}
    	else
    	{
echo "<thead>";
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";
		echo "</tr>";
echo "</thead";
    	while($r=mysql_fetch_array($t))
    	{
    		echo "<tbody>";
    		echo "<tr>";
			echo "<td>".$r['subject']."</td>";
			echo "<td>".$r['internal']."</td>";
			echo "<td>".$r['external']."</td>";
			$total=$r['internal']+$r['external'];
			echo "<td>".$total."</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}
}
	else
	{
		echo "PLEASE SELECT A VALID OPTION";
	}
?>
			      </table>
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
	header('location:../student_login.php');
}
?>
