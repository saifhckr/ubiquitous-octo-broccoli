<?php
session_start();
include('connect.php');
function userlogin()
{
		$t=mysql_query("select email from users where email='".$_POST['email']."' && password='".md5($_POST['password'])."'");
	$r=mysql_num_rows($t);
	if($r==1)
		{
			$_SESSION['email']=$_POST['email'];
			echo "<script>window.location='welcome.php'</script>";
		}
	else
		{
			$message ="SEEMS THAT YOUR EMAIL OR PASSWORD IS INCORRECT";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='index.php'</script>";
		}
}

function user_add()
{
	{
		$t=mysql_query("select email from users where email='".$_POST['email']."'");
		$r=mysql_num_rows($t);
		if ($r==1)
		{

			$message ="THE USER HAS ALREADY BEEN REGISTERED PLEASE TRY AGAIN";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='add_user.php'</script>";
		}
		else
		{
		mysql_query("insert into users(name,email,password) values ('".$_POST['name']."','".$_POST['email']."','".md5($_POST['password'])."')");
		$message="NEW USER HAS BEEN ADDED AND HE/SHE HAS ALL THE RIGHTS";
		echo "<script type='text/javascript'>alert($message);</script>";
		echo "<script>window.location='add_user.php'</script>";
		}
	}
}

function del_user()
{
	$c=mysql_query("select * from users");
//echo "<table border='1' width='400'>";

echo "<thead>";
	echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Password</th>";
echo "<th>Delete</th>";

	echo "</tr>";
echo "</thead>";

while($r=mysql_fetch_array($c))
{
echo "<tbody>";
	echo "<tr>";
echo "<td>".$r['name']."</td>";
echo "<td>".$r['email']."</td>";
echo "<td>".$r['password']."</td>";
echo "<td><a href='del_user.php?a=$r[id]'>x</a></td>";
	echo "</tr>";
echo "</tbody>";

}

if(isset($_GET['a']))
{
	$x=$_GET['a'];
	mysql_query("delete from users where id=$x");
	$message ="DELETED SUCCESFULLY";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script>window.location='del_user.php'</script>";
}
}

function signup()
{
	$t=mysql_query("select email from donor where email='".$_POST['email']."'");
	$r=mysql_num_rows($t);
	if ($r==1)
	{

		$message ="EMAIL HAS ALREADY BEEN REGISTERED PLEASE TRY AGAIN";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='signup.html'</script>";
	}
	else
	{
		mysql_query("insert into donor(name,email,gender,blood_group,age,mobile,password) values ('".$_POST['user']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['bgroup']."','".$_POST['age']."','".$_POST['phone']."','".md5($_POST['pass'])."')");
		$message ="YOU HAVE BEEN SUCCESSFULLY REGISTERED";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='signup.html'</script>";
	}
}

function signup2()
{
	$t=mysql_query("select email from donor where email='".$_POST['email']."'");
	$r=mysql_num_rows($t);
	if ($r==1)
	{

		$message ="EMAIL HAS ALREADY BEEN REGISTERED PLEASE TRY AGAIN";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_donor.php'</script>";
	}
	else
	{
		mysql_query("insert into donor(name,email,gender,blood_group,age,mobile,password) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['bgroup']."','".$_POST['age']."','".$_POST['phone']."','".md5($_POST['password'])."')");
		$message ="YOU HAVE BEEN SUCCESSFULLY REGISTERED";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_donor.php'</script>";
	}
}

function signin()
{
	$t=mysql_query("select email,blood_group from donor where email='".$_POST['email']."' && password='".md5($_POST['pass'])."'");
$r=mysql_num_rows($t);
if($r==1)
	{
		$_SESSION['email']=$_POST['email'];
		$_SESSION['bgroup']=$r['blood_group'];
		echo "<script>window.location='myaccount.php'</script>";
	}
else
	{
		$message ="SEEMS THAT YOUR EMAIL OR PASSWORD IS INCORRECT";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='signup.html'</script>";
	}
}



function update_donor()
{
	if($_POST['email']==$_SESSION['email'])
	{
		mysql_query("update donor set name='".$_POST['name']."',email='".$_POST['email']."',gender='".$_POST['gender']."',blood_group='".$_POST['bgroup']."',mobile='".$_POST['mobile']."',password='".md5($_POST['pass'])."' where email='".$_SESSION['email']."'");
		$message ="YOUR DETAILS HAVE BEEN UPDATED";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='update_details.php'</script>";
	}
	else
	{
		$message ="YOU CANNOT CHANGE YOUR ID";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='update_details.php'</script>";
	}
}

function view_requests()
{
	$t=mysql_query("select * from requests");

		echo "<thead>";
		echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Age</th>";
	echo "<th>Blood Group Requested</th>";
	echo "<th>Mobile</th>";
	echo "<th>State</th>";
	echo "</tr>";
		echo "</thead>";
	while($r=mysql_fetch_array($t))
	{
		echo "<tbody>";
		echo "<tr>";
	echo "<td>".$r['name']."</td>";
	echo "<td>".$r['email']."</td>";
	echo "<td>".$r['age']."</td>";
	echo "<td>".$r['blood_group']."</td>";
	echo "<td>".$r['mobile']."</td>";
	echo "<td>".$r['state']."</td>";
	echo "</tr>";
		echo "</tbody>";
	}
}

function del_donor()
{
		$c=mysql_query("select * from donor");
	//echo "<table border='1' width='400'>";

	echo "<thead>";
		echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Blood Group</th>";
	echo "<th>Mobile No.</th>";
	echo "<th>Password</th>";
	echo "<th>Delete</th>";

		echo "</tr>";
	echo "</thead>";

	while($r=mysql_fetch_array($c))
	{
	echo "<tbody>";
		echo "<tr>";
	echo "<td>".$r['name']."</td>";
	echo "<td>".$r['email']."</td>";
	echo "<td>".$r['blood_group']."</td>";
	echo "<td>".$r['mobile']."</td>";
	echo "<td>".$r['password']."</td>";
	echo "<td><a href='del_donor.php?a=$r[sno]'>x</a></td>";
		echo "</tr>";
	echo "</tbody>";

	}

	if(isset($_GET['a']))
	{
		$x=$_GET['a'];
		mysql_query("delete from donor where sno=$x");
		$message ="DELETED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='del_donor.php'</script>";
	}
	}

function bbadded()
{
	$r=mysql_query("select name from bbname where name='".$_POST['name']."'");
	$t=mysql_num_rows($r);
	if($t==1)
	{
		$message ="THIS BLOOD BANK IS ALREADY REGISTERED ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_blood_bank.php'</script>";
	}
	else
	{
			mysql_query("insert into bbname(name,address,contact,city,state) values ('".$_POST['name']."','".$_POST['address']."','".$_POST['mobile']."','".$_POST['city']."','".$_POST['state']."')");
			$message ="NEW BLOOD BANK HAS BEEN ADDED SUCCESSFULLY";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='add_blood_bank.php'</script>";
	}
}

function view()
{
	$t=mysql_query("select * from requests where blood_group='".$_POST['bgroup']."'");
		echo "<thead>";
		echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Age</th>";
	echo "<th>Blood Group Requested</th>";
	echo "<th>Mobile</th>";
	echo "<th>State</th>";
	echo "</tr>";
		echo "</thead>";
	while($r=mysql_fetch_array($t))
	{
		echo "<tbody>";
		echo "<tr>";
	echo "<td>".$r['name']."</td>";
	echo "<td>".$r['email']."</td>";
	echo "<td>".$r['age']."</td>";
	echo "<td>".$r['blood_group']."</td>";
	echo "<td>".$r['mobile']."</td>";
	echo "<td>".$r['state']."</td>";
	echo "</tr>";
		echo "</tbody>";
	}
}

function viewbb()
{
$t=mysql_query("select * from bbname");
echo "<thead>";
echo "<tr>";
echo "<th>NAME</th>";
echo "<th>ADDRESS</th>";
echo "<th>CITY</th>";
echo "<th>STATE</th>";
echo "<th>CONATCT</th>";

echo "</tr>";
echo "</thead>";
while($r=mysql_fetch_array($t))
{

  echo "<tbody>";
  echo "<tr>";
echo "<td>".$r['name']."</td>";
echo "<td>".$r['address']."</td>";
echo "<td>".$r['city']."</td>";
echo "<td>".$r['state']."</td>";
echo "<td>".$r['contact']."</td>";

echo "</tr>";
echo "</tbody>";


}
}

function add()
{
	$r=mysql_query("select city from city where city='".$_POST['city']."'");
	$t=mysql_num_rows($r);
	if($t==1)
	{
		$message ="CITY IS ALREADY EXISTED ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_city.php'</script>";
	}
	else
	{
			mysql_query("insert into city(state,city) values ('".$_POST['state1']."','".$_POST['city']."')");
			$message ="NEW CITY HAS BEEN ADDED SUCCESSFULLY";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='add_city.php'</script>";
	}
}


?>
