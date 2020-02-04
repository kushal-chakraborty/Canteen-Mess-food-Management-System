<?php
	include 'config.php';
	$r=array();
	$r=explode(",", $_GET['res']);
	$id=$_GET['id'];
	$dues=0;
	for($i=0;$i<count($r);$i=$i+1)
	{
		//echo $i;
		$item=$r[$i];
		$query="select*from item_price where item='$item'";
		if($result=mysqli_query($link,$query))
		{
			$row=mysqli_fetch_array($result);
			//$dues=$dues+$row['price'];
			//echo $dues;
			$dues=$dues+$row['price'];
		}
		else
		{
			$dues=-1;
		}

	}
	$query="update student set dues=dues+'$dues', flag=1 where enrol='$id'";
	if($result=mysqli_query($link,$query))
	{
		echo "Dues updated\n";
	}
	echo "Today's total: ".$dues;
?>