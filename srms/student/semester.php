

<?php 

include('../header.php');
include('../function.php');
if (isset($_SESSION['Id'])) 
{
	
?>
<link href="../stylesheet.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">
<main id="wrapper">
<main id="wrapper">
<div id="innerwrapper">
<header id="head">
<div class="logo">
<img src="../images/logo.jpg" width="100%">
</div>
<div class="banner">
<img src="../images/banner.jpg" />
</div>
</header>
<section id="content">
<div id="nav">

		<i class="fas fa-home">
		<a href="home.php">HOME</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
	</i>
	<i class="fas fa-sign-out-alt">
	<a href="Logout.php">LOGOUT</a>
</i>
</div>
<div class="lablewidth">
	<label>SEMESTER<br /></label>
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
</section>
<?php
}
else
{
	header('location:../student_login.php');
}
?>
</div>
</main>
<?php 
include('../footer.php');
?>