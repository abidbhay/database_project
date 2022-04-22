<?php
session_start();

	include("connection.php");
	include("functions.php");

  $user_data = check_login($con);
  $user_id =  $user_data['user_id'] ;
 ?>



<?php


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Redirected to forget password</title>
  </head>
  <body>

  <h1> User Found!! </h1>

  </body>
</html>
