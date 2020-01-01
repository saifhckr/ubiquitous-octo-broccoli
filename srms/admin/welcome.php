<?php 
include('../function.php');
if (isset($_SESSION['Email'])) 
{
	
?>



<!DOCTYPE html>
<html lang="en">


 <head> <meta name="viewport" content="width=device-width, initial-scale=1" /> <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" /> <meta name="description" content="Themeforest Template Polo"> <!-- Document title --> <title>SRMS</title> <!-- Stylesheets & Fonts --> <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> <link href="../css/plugins.css" rel="stylesheet"> <link href="../css/style.css" rel="stylesheet"> <link href="../css/responsive.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">

  </head>

<body style="background-color:	#32CD32 ;">


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
            <div class="container">
   
                

                <!--Team Carousel -->
                <!--Team members (Carousel with description) -->
                <div class="hr-title hr-long center"><abbr>MENU</abbr>
                </div>
               <div class="carousel team-members team-members-shadow" data-arrows="false" data-margin="20" data-items="4">
                    
                        <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="add_user.php">
                               <i class="fas fa-user-plus fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Add New User</h3></a>                                
                            </div>
                        </div>
                  
                         <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="edit_user.php">
                               <i class="fas fa-user-edit fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Edit User Details</h3></a>                                
                            </div>
                        </div>
                  
                        <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="add_stud.php">
                               <i class="fas fa-user-graduate fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Add New Student </h3></a>                                
                            </div>
                        </div>
                    
                    	<div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="add_teach.php">
                               <i class="fas fa-user-tie fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Add New Teacher </h3></a>                                
                            </div>
                        </div>
                  
                  
                </div>
                <hr class="space">
               
                <!--Team Carousel -->
                <!--Team members (Carousel with description) -->
                
               <div class="carousel team-members team-members-shadow" data-arrows="false" data-margin="20" data-items="4">
                    
                        
                  
                        <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="edit_account.php">
                               <i class="fas fa-marker fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Edit Student/Teacher </h3></a>                                
                            </div>
                        </div>

                       <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="add_sem.php">
                               <i class="fas fa-book fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Add New Semester </h3></a>                                
                            </div>
                        </div>
                  
                        <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="add_subject.php">
                               <i class="fas fa-newspaper fa-5x"></i>
                            </div>
                            <div class="team-desc" >
                               <h3>Add New Subject </h3></a>
                               <br/>                                    
                            </div>
                        </div>

                       <div class="team-member">
                        	<br/>
                            <div class="team-image">
                            	<a href="result.php">
                               <i class="fas fa-book fa-5x"></i>
                            </div>
                            <div class="team-desc">
                               <h3>Result</h3></a> 
                               <br>                               
                            </div>
                        </div>

            </div>
        </section>
        <!-- end: Section -->

     
    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a><!--Plugins-->
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

