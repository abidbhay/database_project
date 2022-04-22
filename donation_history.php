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
 <h1> <font size="+2"> Donor's Donation History/ Notifications </font></H1>

	 <style type="text/css">
	  h1 { text-align: center}
	 </style>


		 <font size="1">Hello <?php echo $user_data['user_name'] ?></font><br>
		 <br>
		 <a href="msg_query.php"> Send a message</a> <br><br>
		 <a href="inbox.php">View inbox</a> <br><br>

				Your donation activity log: (From oldest to newest)
				<br>
				<?php
        $ID= $user_data['user_id'];
				$sql= "SELECT receiver_name,amount, acc_num FROM donation WHERE donor_id='$ID'";
				$res=mysqli_query($con, $sql);
				echo "<table border='1'>";
				echo "<tr><td>Donated To</td><td>Amount Donated </td><td>Acc_num Donated to</td></tr>";
				while ($row= mysqli_fetch_assoc($res)){

					echo "<tr><td>{$row["receiver_name"]}</td><td>{$row["amount"]}</td><td>{$row["acc_num"]}</td></tr>";
				}

				echo "</table>";
?>

<br><br>

 <a href="donor_index.php">Go back</a><br>
	<a href="logout.php">Logout</a><br>
	 <a href="signup.php">Signup as donor/receiver</a><br>

	</body>
