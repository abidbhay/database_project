<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title> Easy Charity </title>
   </head>
   <body>
 		<head>
  <title>Welcome to Easy Charity!</title>
  <style type="text/css">
   h1 { text-align: center}
  </style>
 <body>
  <h1> <font size="+2"> Easy Charity Adminstrater/Owner Panel </font></H1>

 	 <style type="text/css">
 	  h1 { text-align: center}
 	 </style>

   Cumulative donation made by the highest donor this year:
   <br>
   <?php
   $sql= "SELECT receiver_name, SUM(amount) AS sum FROM donation GROUP by receiver_id ORDER BY sum DESC";
   $res=mysqli_query($con, $sql);
   echo "<table border='1'>";
   echo "<tr><td>Receiver Name</td><td></td><td> Total Donation Received</td></tr>";
   while ($row= mysqli_fetch_assoc($res)){

   	echo "<tr><td>{$row["receiver_name"]}</td><td></td><td>{$row["sum"]}</td></tr>";
   }

   echo "</table>";
   ?>
   <br>
 <a href="admin_index.php">Go back</a><br>
   <a href="logout.php">Logout</a><br>
 <a href="signup.php">Signup as donor/receiver</a><br>
 </body>
 </html>
