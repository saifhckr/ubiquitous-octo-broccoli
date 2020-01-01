
<?php
$v1=$_POST['i1'];
$v2=$_POST['i2'];
$v3=$_POST['i3'];
$v4=$_POST['i4'];
$v5=$_POST['i5'];
$v6=md5($_POST['i6']);
$v7=$_POST['i7'];

 mysql_connect("127.0.0.1","root","");
 mysql_select_db("srms");
 
mysql_query("update student_logindetails set Name='".$v1."',Id='".$v2."',Semester='".$v3."',Date_of_birth='".$v4."',Gender='".$v5."',Password='".$v6."' where student_id=$v7");
echo "<h5>DETAILS HAVE BEEN UPDATED<h5>";

?>
<br />
