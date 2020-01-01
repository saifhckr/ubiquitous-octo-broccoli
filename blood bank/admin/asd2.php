
<?php
$v1=$_POST['i1'];
$v2=$_POST['i2'];
$v3=$_POST['i3'];
$v4=md5($_POST['i4']);
$v5=$_POST['i5'];


 mysql_connect("127.0.0.1","root","");
 mysql_select_db("blood_bank");

mysql_query("update donor set name='".$v1."',email='".$v2."',mobile='".$v3."',password='".$v4."' where sno=$v5");
echo "<h5>DETAILS HAVE BEEN UPDATED<h5>";

?>
<br />
