<?php
session_start();

	include("connection.php");
	include("functions.php");

  $search_donor=$_SESSION['$got_donor'];
  $user_data = check_login($con);
  $user_id =  $user_data['user_id'] ;
 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Redirected to forget password</title>
  </head>
  <body>

  <h1> User Found!! User_name: <?php  echo"$search_donor" ?> </h1>

  </body>
</html>
