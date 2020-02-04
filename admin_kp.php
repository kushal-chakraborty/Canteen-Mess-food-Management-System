<?php 
	session_start();
  if(!isset($_SESSION['adminid']))
  {
    
    header("Location:index.php");
    die();
  }
  else{
	include 'config.php';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$password=$_POST['pass'];
		$enrol=$_POST['enrol'];
		$hostel=$_POST['hostel'];
		$query="insert into student (enrol,password,name, hostel) values ('$enrol','$password','$name','$hostel')";
		if(mysqli_query($link,$query))
		{
			echo "Student added";
		}
		else
		{
			echo "Error";
		}
	}
}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Page</title>
	
	<link rel="stylesheet" type="text/css"href="style1.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Welcome, Chutiya</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    
	  </button>

	  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	    <ul class="navbar-nav">
	      
	      <li class="nav-item">
	        <div class="dropdown">
		  		<button class="dropbtn"></button>
				  <div class="dropdown-content">
				    <a href="#">Profile Info</a>
				    <a href="logout.php">Logout</a>
				  </div>
			</div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	
	
	<!--
	<form action ="logout.php">
		<input type="submit" name="logout" id="logout" value="LOGOUT"> 
	</form>
-->
	<div id="menuformlink">

		<a href="menuform.php">Add Menu</a>
	<div>
	<div id="wrapper" class="wrap">
		<form id="addstudent" method="post" enctype="multipart/form-data">
			<div class="textbox">
				<label id="stuname">Name: </label>
				<input class="input_boxes" type="text" name="name" id="stuname" placeholder="Enter student name">
			</div>
			<div class="textbox">
				<label id="stuid">Enrolment No. </label>
				<input class="input_boxes" type="text"id="stuid" name="enrol" placeholder="Enter enrolment no.">
			</div>
			<div class="textbox">
				<label id="hostel">Hostel No. </label>
				<input class="input_boxes" type="text" id="hostel" name="hostel" placeholder="Enter Hostel no.">
			</div>
			<div class="textbox">
				<label id="stupassword">Enter password: </label>
				<input class="input_boxes" id="stupassword" name="pass" type="password">
			</div>
			<div class="textbox">
				<label id="email">Enter Email ID: </label>
				<input class="input_boxes" id="emailid" name="emailid" type=email pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"
				required>
			</div> 
			<div id="message"></div>
			<input type="submit" value="Add" class="mutton" name="submit">
		</form>
		
	</div>
	
	
	
</body>
</html>