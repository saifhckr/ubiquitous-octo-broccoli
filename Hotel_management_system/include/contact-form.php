<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("hotel");

$sql="insert into inquiries(name,email,subject,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
$t=mysql_query($sql);
$message="You have successfully send your message.";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>window.location='../contact.php'</script>";
?>