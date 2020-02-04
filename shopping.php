<?php
   session_start();
   
   
   /*if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";

   $_SESSION['user']='lololololol';
*/
   include 'config.php';
   if(!isset($_SESSION['stuid']))
  {
    
    header("Location:index.php");
    die();
  }
  $studentid=$_SESSION['stuid'];
  $res=mysqli_query($link,"select * from student where enrol='$studentid'");
  $row=mysqli_fetch_array($res);
?>

<html>
   
   <head>
      <title>Clear Dues</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="stylo.css">
   </head>
   
   <body>
    <div id="submitmenu1">
      <h1>Clear Dues Page</h1>
      <br>
      <form action="checkout.php" method="POST">
         <?php
            echo "<h3 id='help'>";
            echo "Your dues: ".$row['dues'];
            echo "<input type='hidden' name='amount' value='".$row['dues']."'></input>";
            echo "<br>";
            echo "</h3>";
         ?>

         <input id="button_ware" type="submit" class="mutton" value="Paynow">
      </form>
      
    </div>
   </body>
   
</html>