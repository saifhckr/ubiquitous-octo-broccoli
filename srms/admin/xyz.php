
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
 $("#sb").click(function (){
	 
	i1=$("#name").val()	 
	i2=$("#id").val()
	i5=$("#gender").val()
	i6=$("#password").val()
	i7=$("#id1").val()

	$.ajax({url: "xyz2.php",type: "POST",data:
		{i1:i1,i2:i2,i5:i5,i6:i6,i7:i7}, 
		success: function(data){
        $("#tgc2").html(data);
    }});			 
	 })
	  })
</script>

<?php
error_reporting(0);
$value=$_POST['x'];
 $con=mysqli_connect("127.0.0.1","root","","srms");
 
$t=mysqli_query($con,"select * from teacher_login where t_id=$value");
$r=mysqli_fetch_assoc($t);

//$name=$r['name'];
//$id=$r['teacher_id'];
//$sem=$r['semester'];
//$dob=$r['Date_of_Birth'];
$gender=$r['gender'];
$pass=md5($r['password']);
?>
<br />

<br>
<input id="id1" type="hidden" value="<?php echo $r['t_id']; ?>" />
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>TEACHER NAME</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input id="name" type="text" value="<?php echo $r['name']; ?>" /><br />
</div>
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>ID NO.</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="number" id="id" value="<?php echo $r['teacher_id']; ?>">
</div>
<br />
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