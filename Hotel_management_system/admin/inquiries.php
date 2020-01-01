<table class="table table-bordered table-striped table-hover">
	<h1>User Registration</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
	</tr>
	<?php
$i=1;
$sql=mysqli_query($con,"select * from inquiries");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['subject']; ?></td>
		<td><?php echo $res['message']; ?></td>
	</td>
	</tr>
<?php
}
?>
