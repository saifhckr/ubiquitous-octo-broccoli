<?php
include('../connection.php');
if(isset($add))
{
	$sql=mysqli_query($con,"select * from admin where username='$uname'");
	if(mysqli_num_rows($sql))
	{
	echo "Admin is already registerd..";
	}
	else
	{
	mysqli_query($con,"insert into admin values('$uname','$password','$name')");
	echo "New Admin Added Successfully";
	}
}
?>


<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">

	<tr>
		<th>Enter Email</th>
		<td><input type="email" name="uname"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>Enter Password</th>
		<td><input type="password" name="password"  class="form-control"/>
		</td>
	</tr>

  <tr>
    <th>Enter Name</th>
    <td><input type="text" name="name" class="form-control"/></td>
  </tr>
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add New Admin" name="add"/>
		</td>
	</tr>
</table>
</form>
