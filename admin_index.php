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


		 <font size="1">Hello <?php echo $user_data['user_name'] ?></font><br>
				The highest single donation made by a donor this year:
				<br>
				<?php
				$sql= "SELECT donor_id,receiver_id,amount FROM donation WHERE amount=(SELECT MAX(amount) FROM donation)";
				$res=mysqli_query($con, $sql);
				echo "<table border='1'>";
				echo "<tr><td>Donor Name</td><td>Receiver Name</td><td>Amount</td></tr>";
				while ($row= mysqli_fetch_assoc($res)){
					$sql2="SELECT user_name FROM users WHERE user_id={$row['donor_id']}";
					$sql3="SELECT user_name FROM users WHERE user_id={$row['receiver_id']}";
					$res2= mysqli_query($con, $sql2);
					$res3= mysqli_query($con, $sql3);
					$row2= mysqli_fetch_assoc($res2);
					$row3= mysqli_fetch_assoc($res3);
					echo "<tr><td>{$row2["user_name"]}</td><td>{$row3["user_name"]}</td><td>{$row["amount"]}</td></tr>";
				}

				echo "</table>";
?>
<br>
Cumulative donation made by the highest donor this year:
<br>
<?php
$sql= "SELECT donor_id, SUM(amount) AS sum FROM donation WHERE donor_id=(SELECT donor_id FROM donation WHERE amount=(SELECT MAX(amount) FROM donation))";
$res=mysqli_query($con, $sql);
echo "<table border='1'>";
echo "<tr><td>Donor Name</td><td></td><td>Amount</td></tr>";
while ($row= mysqli_fetch_assoc($res)){
	$sql2="SELECT user_name FROM users WHERE user_id={$row['donor_id']}";
	$res2= mysqli_query($con, $sql2);
	$row2= mysqli_fetch_assoc($res2);
	echo "<tr><td>{$row2["user_name"]}</td><td></td><td>{$row["sum"]}</td></tr>";
}

echo "</table>";
?>

<br>
Total number of active receivers and donors in the website:
<br>
<?php
$sql= "SELECT utype,COUNT(user_id) as id FROM users GROUP BY utype";
$res=mysqli_query($con, $sql);
echo "<table border='1'>";
echo "<tr><td>Number of donors</td><td></td><td>Number of receivers</td></tr>";
while ($row= mysqli_fetch_assoc($res)){

	echo "<tr><td>{$row["utype"]}</td><td></td><td>{$row["id"]}</td></tr>";
}

echo "</table>";
?>
<br>
<a href="admin_table1.php"> Check out highest donors in desc order.</a>
<br><br>
<a href="admin_table2.php"> Check out highest receivers in desc order.</a>
<br><br>
<a href="logout.php">Logout</a><br>
 <a href="signup.php">Signup as donor/receiver</a><br>

</body>
