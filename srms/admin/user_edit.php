<?php

include('../header.php');
include('../function.php');
if (isset($_SESSION['Email']))
{

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                <div class="container"> <!--Logo-->
                 <div class="container" style="height:0px;margin-left:40px;">
                    <div id="logo">
                    <div class="col-md-4"></div>        
                        <div id="logo" class="col-md-3 ">
                        <a href="welcome.php" class="logo" data-dark-logo="../main_images/logo.jpg">
                            <img src="../main_images/logo.jpg" alt="Polo Logo">
                        </a>
                        <div class="col-md-4"></div>
                    </div>
					</div>
				</div>
                    <!--End: Logo-->

                    <!--Header Extras-->
                    <div class="header-extras" style="float: right">
                        <ul>
                            <li>
                                <!--top search-->
                                <a href="welcome.php" >
                                 <i class="fas fa-home fa-3x"></i>  
                                  
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

<section>
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
mysql_select_db("srms");
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

  

<!--Plugins-->
 <script src="../js/jquery.js"></script>
 <script src="../js/plugins.js"></script>

<!--Template functions-->
 <script src="../js/functions.js"></script> 


</body>
</html>


</section>
<?php
}
else
{
	header('location:index.php');
}

?>
</div>
</main>
<?php 
include('../footer.php');
?>