
<?php
$v1=$_POST['i1'];
$v2=$_POST['i2'];
$v3=md5($_POST['i3']);
$v4=$_POST['i4'];


 mysql_connect("127.0.0.1","root","");
 mysql_select_db("srms");
 
mysql_query("update users set name='".$v1."',email='".$v2."',password='".$v3."' where id=$v4");
echo "<h5>DETAILS HAVE BEEN UPDATED<h5>";

?>
<br />
