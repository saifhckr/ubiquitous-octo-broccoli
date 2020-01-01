<?php 

include('../header.php');
include('../function.php');
if(isset($_SESSION['Email']))
{
error_reporting(0);
?>
<link href="../stylesheet.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"  crossorigin="anonymous">
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
	<a href="welcome.php">HOME</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
</i>
<i class="fas fa-sign-out-alt">
	<a href="Logout.php">LOGOUT</a>
</i>
</div>
<div id="form">
<?php
		$_SESSION['id']=$_POST['id'];
    	echo "<br>";
    	$con=mysqli_connect("127.0.0.1","root","","srms");
    	$t="SELECT * FROM semester8_marks where student_id='".$_SESSION['id']."'";
    	echo "<table border='1' width='400'>";
    	
		echo "<tr>";
		echo "<th>Subject</th>";
		echo "<th>Internal</th>";
		echo "<th>External</th>";
		echo "<th>Total</th>";

		echo "</tr>";
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

<form action="ed7.php" method="post">
    		<tr>
			<td><?php echo $row['subject']?><input type="hidden" name="sub[]" value="<?php echo $row['subject']?>"></td>
			<td><input type="number" name="inter[]" min="0" max="30" required="required" value="<?php echo $row['internal'];?>"></td>
			<td><input type="number" name="exter[]" min="0" max="70" required="required" value="<?php echo $row['external'];?>"></td>
<?php			
			echo "<td>".$total."</td>";
			
			echo "</tr>";
		}
	}

?>
<input type="hidden" name="id1" value="<?php echo $_SESSION['id'];?>">
<input type="submit" name="submit">
</form>
</div>


<?php
}
else
{
	header('location:index.php');
}

?>
</section>
</div>
</main>
<?php 
include('../footer.php');
?>
