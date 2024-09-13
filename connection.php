 
<?php
 
 $con = mysqli_connect("localhost", "root", "", "shop_db");
 
 if (!$con) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } else {
     echo "You have successfully connected to your database";
 }
 ?>
 
 <DOCTYPE html>
 <html>
     <head>
         <title>connect your database</title>
 </head>
 <body>
 </body>
 </html>
 