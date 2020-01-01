<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
 $("#sb").click(function (){
	 
	i1=$("#name").val()	 
	i2=$("#id").val()
	i3=$("#sem").val()
	i4=$("#dob").val()
	i5=$("#gender").val()
	i6=$("#password").val()
	i7=$("#id1").val()

	$.ajax({url: "asd2.php",type: "POST",data:
		{i1:i1,i2:i2,i3:i3,i4:i4,i5:i5,i6:i6,i7:i7}, 
		success: function(data){
        $("#tgc2").html(data);
    }});			 
	 })
	  })
</script>

<?php
$value=$_POST['x'];
 $con=mysqli_connect("127.0.0.1","root","","srms");
 
$t=mysqli_query($con,"select * from student_logindetails where student_id=$value");
$r=mysqli_fetch_assoc($t);

$name=$r['Name'];
$id=$r['Id'];
$sem=$r['Semester'];
$dob=$r['Date_of_Birth'];
$gender=$r['Gender'];
$pass=md5($r['Password']);
?>
<br />

<br>
<input id="id1" type="hidden" value="<?php echo $r['student_id']; ?>" />
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>STUDENT NAME</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input id="name" type="text" value="<?php echo $r['Name']; ?>" /><br />
</div>
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>ID NO.</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="number" id="id" value="<?php echo $r['Id']; ?>">
</div>
<br />
<br>

<div class="lablewidth1">
&nbsp;&nbsp;<label>SEMESTER</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<select id="sem">
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

<br>
<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>DATE OF BIRTH</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="date" id="dob" value="<?php echo $r['Date_of_Birth']; ?>">
</div>
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>GENDER</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="text" id="gender" value="<?php echo $gender;?>">
</div>
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>PASSWORD</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="password" id="password" value="<?php echo $password; ?>">
</div>
<br>

<br>
<div  class="lablewidth1">
	&nbsp;
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<button id="sb">Update</button>
</div>


<br />
<div id="tgc2"></div>