<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
 $("#sb").click(function (){

	i1=$("#name").val()
	i2=$("#email").val()
  i3=$("#mobile").val()
  i4=$("#password").val()
	i5=$("#id1").val()

	$.ajax({url: "asd2.php",type: "POST",data:
		{i1:i1,i2:i2,i3:i3,i4:i4,i5:i5},
		success: function(data){
        $("#tgc2").html(data);
    }});
	 })
	  })
</script>

<?php
$value=$_POST['x'];
 $con=mysqli_connect("127.0.0.1","root","","blood_bank");

$t=mysqli_query($con,"select * from donor where sno=$value");
$r=mysqli_fetch_assoc($t);

$password=md5($r['password']);
?>
<br />

<br>
<input id="id1" type="hidden" value="<?php echo $r['sno']; ?>" />
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>DONOR NAME</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input id="name" type="text" value="<?php echo $r['name']; ?>" /><br />
</div>
<br>

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>EMAIL</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="email" id="email" value="<?php echo $r['email']; ?>">
</div>
<br />

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>MOBILE</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="text" id="mobile" value="<?php echo $r['mobile']; ?>">
</div>
<br />

<br>
<div class="lablewidth1">
&nbsp;&nbsp;<label>PASSWORD</label>
</div>
<div class="inputwidth1">
&nbsp;&nbsp;<input type="password" id="password" placeholder="ENTER PASSWORD">
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
