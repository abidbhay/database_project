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
  <h1> <font size="+2"> Inbox </font></H1>

 	 <style type="text/css">
 	  h1 { text-align: center}
 	 </style>

   Viewing messages in your inbox:
   <br>
   <?php
   $my_id=$user_data['user_id'];
   $sql= "SELECT sender_id, time, sender_username, txt FROM message WHERE to_id='$my_id'";
   $res=mysqli_query($con, $sql);
   echo "<table border='1'>";
   echo "<tr><td>Sender_id</td><td>Time</td><td>Sender_username</td><td>txt</td></tr>";
   while ($row= mysqli_fetch_assoc($res)){

   	echo "<tr><td>{$row["sender_id"]}</td><td>{$row["time"]}</td><td>{$row["sender_username"]}</td><td>{$row["txt"]}</td></tr>";
   }

   echo "</table>";
   ?>
   <br>

   <a href="logout.php">Logout</a><br>
 <a href="signup.php">Signup as donor/receiver</a><br>
 </body>
 </html>
