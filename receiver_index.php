
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
    <h1>Welcome to Easy Charity! This is the index page. </h1>



    <br> Hello <?php echo $user_data['user_name'] ?>, This is your profile.

		<br><br>  <?php echo $user_data['user_name'] ?> you are our receiver. Welcome
     <br><br><br><br><br><br><br><br>
		<a href="logout.php">Logout</a>
  </body>
</html>
