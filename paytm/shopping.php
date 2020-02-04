<?php
   session_start();
   
   /*
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
*/
   $_SESSION['user']='lololololol'
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <p>select amount</p>
      <form action="checkout.php" method="POST">
         <select name="amount">
            <option value="1">1</option>
            <option value="2">2</option>
         </select>
         <input type="submit" value="Paynow bitch">
      </form>
      
      
   </body>
   
</html>