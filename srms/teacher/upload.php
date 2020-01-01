<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("srms");
include('upload_result.php');

for ($i=0; $i<$_SESSION['size']; $i++) 
{
	$t=mysql_query("select subject,student_id from semester1_marks where subject='".$_POST['subject'][$i]."' && student_id='".$_POST['id']."'");
	if (mysql_num_rows($t) > 0)
	{
		echo "RESULT HAS ALREADY BEEN UPLOADED FOR THIS SUBJECT FOR THIS STUDENT<br>";
		header('location:upload_result.php');
	}
	else
	{
	mysql_query("insert into semester1_marks(subject,internal,external,student_id) values ('".$_POST['subject'][$i]."','".$_POST['marks'][$i]."','".$_POST['marks1'][$i]."','".$_POST['id']."')");
		echo "RESULT HAS BEEN SUCCESSFULLY UOLOADED";
		header('location:upload_result.php');
	}
}


?>
