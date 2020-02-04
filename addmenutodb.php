<?php
include 'config.php';
	if(isset($_GET['b']) )
	{
		$b=$_GET['b'];
		$lunch=$_GET['l'];
		$dinner=$_GET['d'];
		$hostel=$_GET['hostel'];
		$query="insert into meal (breakfast,lunch,dinner,hostel) values ('$b','$lunch','$dinner','$hostel')";
		if($result=mysqli_query($link,$query))
		{
			echo "Menu Added";
		}
		else{
			echo mysqli_error($link);
		}
	}


	//echo "sdfdsfsfssf";
?>