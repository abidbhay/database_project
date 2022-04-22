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
 <h1> <font size="+2"> Receivers that have Requested For donation </font></H1>

	 <style type="text/css">
	  h1 { text-align: center}
	 </style>


		 <font size="1">Hello <?php echo $user_data['user_name'] ?></font><br>
		 <br>
		 <a href="msg_query.php"> Send a message</a> <br><br>
		 <a href="inbox.php">View inbox</a> <br><br>

				Current list of donation requests by receivers:
				<br>
				<?php
        $ID= $user_data['user_id'];
				$sql= "SELECT personal_userId, personal_name,personal_amount FROM personal";
				$res=mysqli_query($con, $sql);
				echo "<table border='2'>";
				echo "<tr><td>Requester ID</td><td>Requester Name</td><td> Requested Amount</td></tr>";
				while ($row= mysqli_fetch_assoc($res)){

					echo "<tr><td>{$row["personal_userId"]}</td><td>{$row["personal_name"]}</td><td>{$row["personal_amount"]}</td></tr>";
				}

				echo "</table>";
?>

<br><br>

 <a href="donor_index.php">Go back</a><br>
	<a href="logout.php">Logout</a><br>
	 <a href="signup.php">Signup as donor/receiver</a><br>

	</body>
