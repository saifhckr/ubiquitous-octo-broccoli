
<?php
$v1=$_POST['i1'];
$v2=$_POST['i2'];
$v5=$_POST['i5'];
$v6=md5($_POST['i6']);
$v7=$_POST['i7'];

 mysql_connect("127.0.0.1","root","");
 mysql_select_db("srms");
 
mysql_query("update teacher_login set name='".$v1."',teacher_id='".$v2."',gender='".$v5."',password='".$v6."' where t_id=$v7");
echo "<h5>DETAILS HAVE BEEN UPDATED<h5>";

?>
<br />
