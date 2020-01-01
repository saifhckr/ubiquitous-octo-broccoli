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
<section>
            <div class="container">

                <!--Default Form-->
                <div class="hr-title hr-long center"><abbr>EDIT RESULT</abbr> </div>
                
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <?php
        $_SESSION['id']=$_POST['id'];
        echo "<br>";
        $con=mysqli_connect("127.0.0.1","root","","srms");
        $t="SELECT * FROM semester1_marks where student_id='".$_SESSION['id']."'";
        //echo "<table border='1' width='400'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Subject</th>";
        echo "<th>Internal</th>";
        echo "<th>External</th>";
        echo "<th>Total</th>";

        echo "</tr>";
        echo "</thead>";
        $result=mysqli_query($con,$t);
        $datas= array();
        if(mysqli_num_rows($result) > 0)
        {

        while($row=mysqli_fetch_assoc($result))
        {
            $datas[]=$row;
            $_SESSION['size']=sizeof($datas);
            $total=$row['internal']+$row['external'];
        ?>  

<form action="ed.php" method="post">
    <tbody>
            <tr>
            <td><?php echo $row['subject']?><input type="hidden" name="sub[]" value="<?php echo $row['subject']?>"></td>
            <td><input type="number" name="inter[]" min="0" max="30" required="required" value="<?php echo $row['internal'];?>"></td>
            <td><input type="number" name="exter[]" min="0" max="70" required="required" value="<?php echo $row['external'];?>"></td>
<?php           
            echo "<td>".$total."</td>";
            
            echo "</tr>";
            echo "</tbody>";
        }
    }

?>
<input type="hidden" name="id1" value="<?php echo $_SESSION['id'];?>">
<input type="submit" name="submit">
</form>


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
    header('location:index.php');
}

?>
