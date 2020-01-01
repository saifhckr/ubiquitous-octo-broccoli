<?php
include('../function.php');
if (isset($_SESSION['email']))
{

?>



<!DOCTYPE html>
<html lang="en">


 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <meta name="author" content="INSPIRO" />
 <meta name="description" content="Themeforest Template Polo">
 <!-- Document title --> <title>Admin-BLOOD BANK</title> <!-- Stylesheets & Fonts -->
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
 <link href="../css/plugins.css" rel="stylesheet">
 <link href="../css/style.css" rel="stylesheet">
 <link href="../css/responsive.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">

  </head>

<body style="background-color:#ff0000 ;">


    <!-- Wrapper -->
    <div id="wrapper">



        <!-- Header -->
        <header id="header" class="header-fullwidth header-transparent">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                <div class="container" style="height:0px;margin-left:40px;">
                    <!--Logo-->
					<div class="row">
					    <div class="col-md-4"></div>
							<div id="logo" class="col-md-3 ">
								<a href="welcome.php" class="logo" data-dark-logo="../main_images/logo.jpg">
									<img src="../main_images/logo.jpg">
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
                                <div id="shopping-cart">
								<a href="welcome.php" >
                                 <i class="fas fa-home fa-3x"></i>

                                </a>
								</div>
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
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->



                </div>
            </div>
        </header>
        <!-- end: Header -->




        <!-- Section -->
        <section>
            <div class="container" >
              <div class="hr-title hr-long center"><abbr>UPDATE USER</abbr>
              </div>
              
              <script>
              $(document).ready(function() {
                  $("#Id").change(function ()
              	{
              		a=$(this).val();


              		$.ajax({url: "abc.php",type: "POST",data:
              		{x:a},
              		success: function(data){
                      $("#details_fetch").html(data);
                  }});




              	})


              });
              </script>


              &nbsp;&nbsp;<label>SELECT ACCOUNT</label>

              <?php

              mysql_connect("127.0.0.1","root","");
              mysql_select_db("blood_bank");
              $t=mysql_query("select id,email from users");
              echo "<select id='Id'>";
              echo "<option>Select</option>";

              while($r=mysql_fetch_array($t))
              {

              echo "&nbsp;&nbsp;<option value='".$r['id']."'>".$r['email']."</option>";
              }
              echo "</select><br>";

              ?>

              <div id="details_fetch"></div>

        </section>
        <!-- end: Section -->


    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop">
	<i class="fa fa-angle-up top-icon"></i>
	<i class="fa fa-angle-up"></i>
	</a><!--Plugins-->
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
