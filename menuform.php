<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="stylo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Mess management</title>
</head>
<body>
	
	<br>
	<div class="customselect">
		<div class="select" id="ahem">
			<select id="hostel">
				<option>Hostel 16</option>
				<option>Hostel 15</option>
				<option>Hostel 14</option>
				<option>Hostel 10</option>
				<option>Hostel 9</option>
			</select>
		</div>
		<div id="message"></div>
	</div>
	<br>
	<?php
			echo "<div id='contents'>";
			include 'config.php';
			$query2="select * from item_price where type='b' ";
				echo "<h2>Breakfast</h2>";
				echo "<table id='table1' class='content-table'>
					<thead>
					<tr><th>ITEM</th><th></th></tr></thead>";
				$breakfast_count=0;
				if($result2=mysqli_query($link,$query2))
				{
					$rows= mysqli_num_rows($result2);
					$bres="";
					while ($r=mysqli_fetch_array($result2))
					{
						$breakfast_count=$breakfast_count+1;
						$bres=$bres.$r['itemcode'].",";
						echo '<tr><td>'.$r['item'].'</td>';
						echo '<td><input type="checkbox" name="name1"  value='.$r["item"].'   id='.$r["itemcode"].' ></td></tr>';
						
					}
				}

				else{
					echo mysqli_error($link);
				}
				echo "</table>";
				$lunchcount=0;
				$query2="select * from item_price where type='l' ";
				echo "<h2>Lunch</h2>";
				echo "<table id='table1' class='content-table'><thead>
					<tr><th>ITEM</th><th></th></tr></thead>";
				$c=0;
				if($result2=mysqli_query($link,$query2))
				{
					$rows= mysqli_num_rows($result2);
					$lres="";
					while ($r=mysqli_fetch_array($result2))
					{
						$lunchcount=$lunchcount+1;
						$lres=$lres.$r['itemcode'].",";
						echo '<tr><td>'.$r['item'].'</td>';
						echo '<td><input type="checkbox" name="name1"  value='.$r["item"].'   id='.$r["itemcode"].' ></td></tr>';
						
					}
				}

				else{
					echo mysqli_error($link);
				}
				echo "</table>";
				$dinnercount=0;
				$query2="select * from item_price where type='d'";

				echo "<h2>Dinner</h2>";
				echo "<table id='table1' class='content-table'>
				<thead>
					<tr><th>ITEM</th><th></th></tr></thead>";
				if($result2=mysqli_query($link,$query2))
				{
					$rows= mysqli_num_rows($result2);
					$dres="";
					while ($r=mysqli_fetch_array($result2))
					{
						$dinnercount=$dinnercount+1;
						$dres=$dres.$r['itemcode'].",";
						echo '<tr><td>'.$r['item'].'</td>';
						echo '<td><input type="checkbox" name="name1"  value='.$r["item"].'   id='.$r["itemcode"].' ></td></tr>';
						
					}
				}

				else{
					echo mysqli_error($link);
				}
				echo "</table>";
				
				echo "</div>";
				echo 	'<input type="submit" id="submitmenu" class="mutton" value="Submit"></input>'; 
	?>
	<div id="msg"></div>
	<script type="text/Javascript">
		
		window.onload = function() {

		document.getElementById("submitmenu").onclick=function(){
			var hostel=document.getElementById("hostel").value;
			var bcount=<?php echo "\"$breakfast_count\""; ?>;
			var lcount=<?php echo "\"$lunchcount\""; ?>;
			var dcount=<?php echo "\"$dinnercount\""; ?>;
			var bs=<?php echo "\"$bres\""; ?>;
			var ls=<?php echo "\"$lres\""; ?>;
			var ds=<?php echo "\"$dres\""; ?>;
			var barr=bs.split(",");
			var larr=ls.split(",");
			var darr=ds.split(",");
			var result_breakfast="",result_lunch="",result_dinner="";			
			var i;	
		//	alert(bcount);
			//alert(lcount);
			//alert(dcount);
			for(i=0;i<bcount;i++)
			{
			//	alert(i);
				if(document.getElementById(barr[i]).checked==true )
				{
					result_breakfast=result_breakfast+barr[i]+",";
					
				}
			}
			for(i=0;i<lcount;i++)
			{
				//alert(i);
				if(document.getElementById(larr[i]).checked==true )
				{
					result_lunch=result_lunch+larr[i]+",";
				
				}
			}
			for(i=0;i<dcount;i++)
			{
				//alert(i);
				if(document.getElementById(darr[i]).checked==true )
				{
					result_dinner=result_dinner+darr[i]+",";
				
				}
			}
			/*alert(result_breakfast);
			alert(result_lunch);
			alert(result_dinner);
			*/
			 var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
  			  if (this.readyState == 4 && this.status == 200) {
   				  //document.getElementById("msg").innerHTML=this.responseText;
   				  alert(this.responseText);
  			  }	
 			 };
 			 xhttp.open("GET", "setmenu.php?b="+result_breakfast+"&l="+result_lunch+"&d="+result_dinner+"&h="+hostel, true);
  			 xhttp.send();
			
	
}

}
</script>

</body>