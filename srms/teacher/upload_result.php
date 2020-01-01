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
				<div class="hr-title hr-long center"><abbr>UPLOAD RESULT</abbr> </div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form action="" method="get">
	<div class="lablewidth">
		<label>SELECT SEMESTER</label>
	</div>
	<div class="inputwidth">
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
	<div class="lablewidth">
		&nbsp;
	</div>
	<div class="inputwidth">
		<button>PROCEED</button>
	</div>
	</form>

<br>
<br>
<style type="text/css">
	.lablewidth1,.inputwidth1{ width:200px; height:auto; float:left; font-size:16px; line-height:normal; }
	.inputwidth>input{ width:200px; height:30px; border-radius:5px; border:1px solid #999; }
</style>
<?php
	
	$_SESSION['semester']=$_GET['semester'];
    $store = $_SESSION['semester'];
    if($store=='Ist Semester')
    {
?>
<form action="upload.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester1 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>

</div>
    
<?php
}
elseif($store=='IInd Semester')
{
	?>
<form action="upload2.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester2 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size1']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php

}
elseif($store=='IIIrd Semester')
{
	?>
<form action="upload3.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester3 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size2']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php
}
elseif($store=='IVth Semester')
{
?>
<form action="upload4.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester4 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size3']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php
}
elseif($store=='Vth Semester')
{
?>
<form action="upload5.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester5 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size4']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php
}
elseif($store=='VIth Semester')
{
?>
<form action="upload6.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester6 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size5']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php
}
elseif($store=='VIIth Semester')
{
?>
<form action="upload7.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester7 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size6']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php
}
elseif($store=='VIIIth Semester')
{
?>
<form action="upload8.php" method="post">
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
<?php
$con=mysqli_connect("127.0.0.1","root","","srms");



$t="SELECT * FROM semester8 where teacher_id='".$_SESSION['teacher_id']."'";
$result=mysqli_query($con,$t);
$datas= array();
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$datas[] = $row;
	$_SESSION['size7']=sizeof($datas);
	
?>

	
	<div class="lablewidth">
		<label><?php echo $row['subject'];?><input type="hidden" name="subject[]" value="<?php echo $row['subject'];?>" ></label>
	</div>
    <div class="inputwidth">
		<input type="number" name="marks[]" min="0" max="30" required="required" placeholder="ENTER INTERNAL MARKS">
	</div>
	<div class="lablewidth">
		<label>&nbsp;</label>
	</div>
	<div class="inputwidth">
		<input type="number" name="marks1[]" min="0" max="70" required="required" placeholder="ENTER SEMESTER MARKS">
	</div>	

<?php
}

}
?>
<br>
<input type="submit" name="submit">
</form>
</div>
<?php
}
else
{
	echo "<h4>PLEASE SELECT A VALID OPTION<h4>";
}
?>

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
	header('location:../teacher_login.php');
}
?>

