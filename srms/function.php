<?php
session_start();
include('connect.php');

function check()
{
	$t=mysql_query("select email from users where email='".$_POST['email']."' && password='".md5($_POST['password'])."'");
	$r=mysql_num_rows($t);
	if($r==1)
		{
			$_SESSION['Email']=$_POST['email'];
			echo "<script>location='welcome.php'</script>";
		}
	else
		{
			$message ="SEEMS THAT YOUR EMAIL OR PASSWORD IS INCORRECT";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='index.php'</script>";
		}
}

function user()
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

function add_sem()
{
	mysql_query("insert into semester(sem) values ('".$_POST['sem']."')");
	$message="NEW SEMESTER HAS BEEN ADDED SUCCESFULLY";
	echo "<script type='text/javascript'>alert($message);</script";
	echo "<script>window.location='add_sem.php'</script>";
}


function add()
{
	$t=mysql_query("select Id from student_logindetails where Id='".$_POST['id']."'");
	$r=mysql_num_rows($t);
	if ($r==1)
	{

		$message ="THE USER HAS ALREADY BEEN REGISTERED PLEASE TRY AGAIN";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_stud.php'</script>";
	}
	else
	{
	mysql_query("insert into student_logindetails(Name,Id,Semester,Date_of_Birth,Gender,Password) values ('".$_POST['name']."','".$_POST['id']."','".$_POST['semester']."','".$_POST['dob']."','".$_POST['gender']."','".md5($_POST['password'])."')");
		$message ="NEW ACCOUNT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_stud.php'</script>";
    }

}

function add_teach()
{
	$q=mysql_query("select teacher_id from teacher_login where teacher_id='".$_POST['id']."'");
	$row=mysql_num_rows($q);
	if ($row==1)
	{
		$message ="THE USER HAS ALREADY BEEN REGISTERED PLEASE TRY AGAIN";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_teach.php'</script>";
	}
	else
	{
	mysql_query("insert into teacher_login(name,teacher_id,gender,password) values ('".$_POST['name']."','".$_POST['id']."','".$_POST['gender']."','".md5($_POST['password'])."')");
	$message ="NEW ACCOUNT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_teach.php'</script>";
	}

}

function add_sub()
{

	if($_POST['semester']=='Ist Semester')
	{

		mysql_query("insert into semester1(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
		$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='add_subject.php'</script>";

	}
	elseif($_POST['semester']=='IInd Semester')
	{
		mysql_query("insert into semester2(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	elseif($_POST['semester']=='IIIrd Semester')
	{
		mysql_query("insert into semester3(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	elseif($_POST['semester']=='IVth Semester')
	{
		mysql_query("insert into semester4(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	elseif($_POST['semester']=='Vth Semester')
	{
		mysql_query("insert into semester5(subject,teacher,teacher_id) values ('".$_POST['sub']."','".$_POST['name']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	elseif($_POST['semester']=='VIth Semester')
	{
		mysql_query("insert into semester6(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	elseif($_POST['semester']=='VIIth Semester')
	{
		mysql_query("insert into semester7(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	elseif($_POST['semester']=='VIIIth Semester')
	{
		mysql_query("insert into semester8(subject,teacher_id) values ('".$_POST['sub']."','".$_POST['id']."')");
	$message ="NEW SUBJECT HAS BEEN ADDED SUCCESFULLY";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
	else
	{
		$message ="UNABLE TO ADD NEW SUBJECT";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='add_subject.php'</script>";
	}
}

function del_stud()
{
	$c=mysql_query("select * from student_logindetails");
//echo "<table border='1' width='400'>";

	echo "<thead>";
	echo "<tr>";
echo "<th>Name</th>";
echo "<th>Id</th>";
echo "<th>Semester</th>";
echo "<th>Date of Birth</th>";
echo "<th>Gender</th>";
echo "<th>Password</th>";
echo "<th>Delete</th>";
echo "</tr>";
	echo "</thead>";

while($r=mysql_fetch_array($c))
{
	echo "<tbody>";
	echo "<tr>";
echo "<td>".$r['Name']."</td>";
echo "<td>".$r['Id']."</td>";
echo "<td>".$r['Semester']."</td>";
echo "<td>".$r['Date_of_Birth']."</td>";
echo "<td>".$r['Gender']."</td>";
echo "<td>".$r['Password']."</td>";
echo "<td><a href='delete_stud.php?a=$r[student_id]'>x</a></td>";
echo "</tr>";
	echo "</tbody>";

}

if(isset($_GET['a']))
{
	$x=$_GET['a'];
	mysql_query("delete from student_logindetails where student_id=$x");
	$message ="DELETED SUCCESFULLY";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script>window.location='delete_stud.php'</script>";
}
}

function del_teach()
{
		$c=mysql_query("select * from teacher_login");
//echo "<table border='1' width='400'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Id</th>";
	echo "<th>Gender</th>";
	echo "<th>Password</th>";
	echo "<th>Delete</th>";

	echo "</tr>";
	echo "</thead>";
		while($r=mysql_fetch_array($c))
			{
				echo "<tbody>";
				echo "<tr>";
				echo "<td>".$r['name']."</td>";
				echo "<td>".$r['teacher_id']."</td>";
				echo "<td>".$r['gender']."</td>";
				echo "<td>".$r['password']."</td>";
				echo "<td><a href='delete_teach.php?a=$r[t_id]'>x</a></td>";
				echo "</tr>";
				echo "</tbody>";
			}	

	if(isset($_GET['a']))
		{
			$x=$_GET['a'];
			mysql_query("delete from teacher_login where t_id=$x");
			$message ="DELETED SUCCESFULLY";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='delete_teach.php'</script>";
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

function student()
{
	$t=mysql_query("select Id from student_logindetails where Id='".$_POST['Id']."' && Password='".md5($_POST['Password'])."'");
	$r=mysql_num_rows($t);
	if($r==1)
		{
			$_SESSION['Id']=$_POST['Id'];
		echo "<script>location='home.php'</script>";
		}
	else
		{
			$message ="SEEMS THAT YOUR ID OR PASSWORD IS INCORRECT";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='../student_login.php'</script>";
		}
}

function teacher()
{
	$t=mysql_query("select teacher_id from teacher_login where teacher_id='".$_POST['id']."' && password='".md5($_POST['password'])."'");
	$r=mysql_num_rows($t);
	if($r==1)
		{
			$_SESSION['teacher_id']=$_POST['id'];
		echo "<script>location='home.php'</script>";
		}
	else
		{
			$message ="SEEMS THAT YOUR ID OR PASSWORD IS INCORRECT";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>window.location='../teacher_login.php'</script>";
		}
}

function fetch_stud()
{
	$t=mysql_query("select Name from student_logindetails where Id='".$_SESSION['Id']."'");
	while ($r=mysql_fetch_array($t))
	{
		echo $r['Name'];
	}

}

function fetch_stud1()
{
	$t=mysql_query("select Id from student_logindetails where Id='".$_SESSION['Id']."'");
	while ($r=mysql_fetch_array($t))
	{
		echo $r['Id'];
	}

}

function fetch_stud2()
{
	$t=mysql_query("select Semester from student_logindetails where Id='".$_SESSION['Id']."'");
	while ($r=mysql_fetch_array($t))
	{
		echo $r['Semester'];
	}

}

function fetch_stud3()
{
	$t=mysql_query("select Date_of_Birth from student_logindetails where Id='".$_SESSION['Id']."'");
	while ($r=mysql_fetch_array($t))
	{
		echo $r['Date_of_Birth'];
	}

}

function fetch_stud4()
{
	$t=mysql_query("select Gender from student_logindetails where Id='".$_SESSION['Id']."'");
	while ($r=mysql_fetch_array($t))
	{
		echo $r['Gender'];
	}

}

function update_stud()
{

	if($_POST['id']==$_SESSION['Id'])
	{
		mysql_query("update student_logindetails set Name='".$_POST['name']."',Id='".$_POST['id']."',Semester='".$_POST['sem']."',Date_of_Birth='".$_POST['dob']."',Gender='".$_POST['gender']."',Password='".md5($_POST['pass'])."' where Id='".$_SESSION['Id']."'");
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


function fetch_teach()
{
	$t=mysql_query("select name from teacher_login where teacher_id='".$_SESSION['teacher_id']."'");
	while($r=mysql_fetch_array($t))
	{
	echo $r['name'];

	}
}

function fetch_teach1()
{
	$t=mysql_query("select teacher_id from teacher_login where teacher_id='".$_SESSION['teacher_id']."'");
	while($r=mysql_fetch_array($t))
	{
	echo $r['teacher_id'];

	}
}

function fetch_teach3()
{
	$t=mysql_query("select gender from teacher_login where teacher_id='".$_SESSION['teacher_id']."'");
	while($r=mysql_fetch_array($t))
	{
	echo $r['gender'];

	}
}

function update_teach()
{

	if($_POST['id']==$_SESSION['teacher_id'])
	{
		mysql_query("update teacher_login set name='".$_POST['name']."',teacher_id='".$_POST['id']."',gender='".$_POST['gender']."',password='".md5($_POST['pass'])."' where teacher_id='".$_SESSION['teacher_id']."'");
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
?>
