<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("blood_bank");

$t=mysql_query("insert into requests(name,email,age,blood_group,mobile,state) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['age']."','".$_POST['blood']."','".$_POST['mobile']."','".$_POST['state']."')");


$message="You have successfully raised your request for blood. The donor will contact you shortly.";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>window.location='raise.php'</script>";

 ?>
