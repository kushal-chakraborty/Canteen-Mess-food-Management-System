<?php
	include 'config.php';
	$breakfast=explode(",", $_GET['b']);
	//echo $breakfast[0];
	$lunch=explode(",", $_GET['l']);
	$dinner=explode(",", $_GET['d']);
	$hostel=$_GET['h'];
	mysqli_query($link,"delete from breakfast where hostel='$hostel'");
	mysqli_query($link,"delete from lunch where hostel='$hostel'");
	mysqli_query($link,"delete from dinner where hostel='$hostel'");
	$flag = 0;
	for($i=0;$i<count($breakfast)-1;$i=$i+1)
	{

		$itemcode=$breakfast[$i];
		$q="select*from item_price where itemcode='$itemcode'";
		$result=mysqli_query($link,$q);
		$row = mysqli_fetch_array($result);
		 $item=$row['item'];
		$query="insert into breakfast values('$itemcode','$item','$hostel')";
		if($result=mysqli_query($link,$query))
		{
			if (!$flag){
				echo "Breakfast Added\n";
				$flag=1;	
			}
			
		}
		else
		{
			echo mysqli_error($link);
		}

	}
	$flag=0;
	for($i=0;$i<count($lunch)-1;$i=$i+1)
	{
		
		$itemcode=$lunch[$i];
		$q="select*from item_price where itemcode='$itemcode'";
		$result=mysqli_query($link,$q);
		$row = mysqli_fetch_array($result);
		 $item=$row['item'];
		$query="insert into lunch values('$itemcode','$item','$hostel')";
		if($result=mysqli_query($link,$query))
		{
			if (!$flag){
				echo "Lunch Added\n";
				$flag=1;	
			}
		}
		else
		{
			echo mysqli_error($link);
		}

	}
	$flag=0;
	for($i=0;$i<count($dinner)-1;$i=$i+1)
	{
		
		$itemcode=$dinner[$i];
		$q="select*from item_price where itemcode='$itemcode'";
		$result=mysqli_query($link,$q);
		$row = mysqli_fetch_array($result);
		 $item=$row['item'];
		$query="insert into dinner values('$itemcode','$item','$hostel')";
		if($result=mysqli_query($link,$query))
		{
			if (!$flag){
				echo "Dinner Added\n";
				$flag=1;	
			}
		}
		else
		{
			echo mysqli_error($link);
		}

	}
	

?>