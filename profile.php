<?php
session_start();
	include 'config.php';
	if(!isset($_SESSION['stuid']))
  {
    
    header("Location:index.php");
    die();
  }
  $studentid=$_SESSION['stuid'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>STUDENT PROFILE</title>
	
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="stylo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<?php
		$query="select*from student where enrol='$_SESSION[stuid]'";
		if($result=mysqli_query($link,$query))
		{
			$row=mysqli_fetch_array($result);
			$studentid=$row['enrol'];
			$studentname=$row['name'];
		}	
		?>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	  <a class="navbar-brand" href="#"><?php
				echo "Welcome ".$studentname.",";?>		
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  </button>

	  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	    <ul class="navbar-nav">
	      
	      <li class="nav-item">
	        <div class="dropdown">
		  		<button class="dropbtn"></button>
				  <div class="dropdown-content">
				    <a href="#">Profile Info</a>
				    <a href = 'shopping.php'>Pay Dues</a>
				    <a href="logout.php">Logout</a>
				  </div>
			</div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	
	
	<div id="menu">
		<?php
				echo "<br>";
				echo "<div id='contents'>";
				$hostel=$row['hostel'];
				if($row['flag']==0)
				{
					echo "<h2>Breakfast</h2>";
				$query2="select * from breakfast where hostel='$hostel'";
				echo "<table id='table1' class='content-table'>
				<thead>
					<tr><th>ITEM</th><th></th></tr></thead>";
				$c=0;
				if($result2=mysqli_query($link,$query2))
				{
					$rows= mysqli_num_rows($result2);
					$res="";
					while ($r=mysqli_fetch_array($result2))
					{
						$c=$c+1;
						$res=$res.$r['item'].",";
						echo '<tr><td>'.$r['item'].'</td>';
						echo '<td><input type="checkbox" name="name1"  value='.$r["item"].'   id='.$r["item"].' ></td></tr>';
						
					}
				}

				else{
					echo mysqli_error($link);
				}
				echo "</table>";
				echo "<h2>Lunch</h2>";
				$query2="select * from lunch where hostel='$hostel'";
				echo "<table id='table1' class='content-table'>
				<thead>
					<tr><th>ITEM</th><th></th></tr></thead>";

				if($result2=mysqli_query($link,$query2))
				{
					$rows= mysqli_num_rows($result2);
					while ($r=mysqli_fetch_array($result2))
					{
						$c=$c+1;
						$res=$res.$r['item'].",";
						echo '<tr><td>'.$r['item'].'</td>';
						echo '<td><input type="checkbox" name="name1"  value='.$r["item"].'   id='.$r["item"].' ></td></tr>';
						
					}
				}
				else{
					echo mysqli_error($link);
				}
				echo "</table>";
				echo "<h2>Dinner</h2>";
				$query2="select * from dinner where hostel='$hostel'";
				echo "<table id='table1' class='content-table'>
				<thead>
					<tr><th>ITEM</th><th></th></tr></thead>";

				if($result2=mysqli_query($link,$query2))
				{
					$rows= mysqli_num_rows($result2);
					while ($r=mysqli_fetch_array($result2))
					{
						$res=$res.$r['item'].",";
						$c=$c+1;
						echo '<tr><td>'.$r['item'].'</td>';
						echo '<td><input type="checkbox" name="name1"  value='.$r["item"].'   id='.$r["item"].' ></td></tr>';
						
					}

				}

				else{
					echo mysqli_error($link);
				}
				echo "</table>";
				echo "</div>";
				$res = str_replace(' ', '', $res);

				echo 	'<input type="submit" id="submitmenu" class="mutton"></input>'; 
			}
			else
			{
				echo "<h2>Menu already selected for today </h2>";
			}
			
		?>

	</div>
	<form action="shopping.php">
	</form>
	<div id="test"></div>
	<div id="dues"> </div>
	<!--
	<input type="button" class="mutton" onclick="window.location.href = 'shopping.php';" value="Pay Dues"/>
	-->
	<script type="text/Javascript">
		
		window.onload = function() {

		document.getElementById("submitmenu").onclick=function(){
			
			var r=<?php echo "\"$res\""; ?>;
			var count=<?php echo "\"$c\""; ?>;
			var arr=r.split(",");
			document.getElementById("test").innerHTML=arr;
			var result="";			
			var i;	
		/*	if(document.getElementById(arr[0]).checked )
				{
					result=result+arr[0]+",";
					
				}
			
		*/
			
			for(i=0;i<count;i++)
			{
				
				if(document.getElementById(arr[i]).checked==true )
				{
					result=result+arr[i]+",";
					
				}
			}
			
			var id=<?php echo "\"$studentid\"" ?>;
			alert("Your choices "+result);
			 var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
  			  if (this.readyState == 4 && this.status == 200) {
   				  alert(this.responseText);
  			  }	//	location.reload();
 			 };
 			 xhttp.open("GET", "adddues.php?res="+result+"&id="+id, true);
  			 xhttp.send();
			
				location.reload();
}
}

	
	</script>
</body>
</html>
	