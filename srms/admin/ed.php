<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("srms");
include('edit.php');

if (isset($_POST['submit']))
{

for ($i=0; $i<$_SESSION['size']; $i++) 
{
/*	echo $_POST['sub'][$i]."<br>";
	echo $_POST['inter'][$i]."<br>";
	echo $_POST['exter'][$i]."<br>";
*/
	$query="UPDATE semester1_marks SET subject='".$_POST['sub'][$i]."',internal='".$_POST['inter'][$i]."',external='".$_POST['exter'][$i]."' WHERE student_id='".$_POST['id1']."' && subject='".$_POST['sub'][$i]."'";
	$result=mysql_query($query);

}
if($result)
{
	echo "<br>RESULT UPDATED<br>";
	echo "<button onclick=\"location.href='edit_result.php'\">BACK</button>";
}
}
?>