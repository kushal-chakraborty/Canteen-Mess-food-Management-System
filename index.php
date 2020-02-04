<?php
	session_start();
	include 'config.php'; 	
	if(isset($_POST['stusubmit']))
	
	if(isset($_POST['stuid']))
	{
		$f=0;
		$id=$_POST['stuid'];
		$password=$_POST['stupassword'];
		$query="select*from student where enrol='$id' and password='$password'";
		if($result=mysqli_query($link,$query))
		{
			$count=mysqli_num_rows($result);
			if($count==1)
			{
				$_SESSION['stuid']=$id;
				$_SESSION['stupassword']=$password;
				header('location:profile.php');
			}
			else{
				echo '<script language="javascript">';
				echo 'alert("Invalid login/password")';
				echo '</script>';
			}

		}
	}
	

	if(isset($_POST['adminsubmit']))
	{
		$f=0;
		$id=$_POST['idadmin'];
		$password=$_POST['adminpassword'];
		$query="select*from admin where id='$id' and password='$password'";
		if($result=mysqli_query($link,$query))
		{
			$count=mysqli_num_rows($result);
			if($count==1)
			{
				$_SESSION['adminid']=$id;
				$_SESSION['adminpassword']=$password;
				header('location:admin.php');
			}
			else{
				
				echo '<script language="javascript">';
				echo 'alert("Invalid login/password")';
				echo '</script>';
			}

		}
	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mess management</title>
	<link rel="stylesheet" type="text/css"href="style.css" >

	<style type="text/CSS">
		#adminform{
			display:none;
		}

	</style>
</head>
<body background="bg1.jpg">
	<section>
		<div id="header">
			<h2>Mess Management, IIEST Shibpur</h2>
		</div>
		<div id="login_wrap">
			
			<h2 id="login_head">Login/Signup</h2>
			<div id="category">
				<button class="mutton" id="stu" onclick="showstudent()">Student Login</button>
				<button class="mutton" id="adm" onclick="showadmin()">Admin Login</button>
			</div>
			<hr>
			<form id="studentform" method="post" enctype="multipart/form-data">
				
				<div class="textbox">
					<i class="fas fa-user"></i>
					<input class="input_boxes" id="stuid" name = "stuid" type="text" placeholder="Enrolment no.">
				</div>
				<div class="textbox">
					<i class="fas fa-lock"></i>
					<input class="input_boxes" id="stupassword" name="stupassword" type="password" placeholder="Enter password">
				</div>
				<button class="mutton" id="stusubmit" name="stusubmit" type="submit">LOGIN</button>
			</form>
			<form id="adminform"  method="post" enctype="multipart/form-data">
				<div class="textbox">
					<i class="fas fa-user"></i>
					<input class="input_boxes" id="adminid" name="idadmin" type="text" placeholder="Admin Id.">
				</div>
				<div class="textbox">
					<i class="fas fa-lock"></i>
					<input class="input_boxes" id="adminpassword" name="adminpassword" type="password" placeholder="Enter password">
				</div>
				<button class="mutton" id="adminsubmit"  name="adminsubmit" type="submit">LOGIN</button>
			</form>
			
		</div>
	</section>

	<script>
		function showadmin(){

			document.getElementById("adminform").style.display="block";
			document.getElementById("studentform").style.display="none";
		}
		function showstudent(){

			document.getElementById("adminform").style.display="none";
			document.getElementById("studentform").style.display="block";
		}
		
	</script>

</body>
</html>