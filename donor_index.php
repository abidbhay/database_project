
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$receiver_id = $_POST['receiver_id'];
		$dtype = $_POST['dtype'];
		$user_id =  $user_data['user_id'] ;
		if(!empty($receiver_id) )
		{

			$query = "insert into donation (donor_id,receiver_id,donation_type) values ('$user_id',	'$receiver_id','$dtype')";

			mysqli_query($con, $query);
			if ($dtype==="money"){
				header("Location: money_donor.php");
			}
			if ($dtype==="product"){
				header("Location: product_donor.php");
			}
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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
 <h1> <font size="+2"> Welcome to Easy Charity! </font></H1>
</body>



			<h1>  <font size="1">Hello <?php echo $user_data['user_name'] ?>, This is your profile. You are  our verified donor.</font>
</h1>

			 	<h1>  <font size="2"> Want to make donation? Find all places and people you can donate right here:

			 </font>
					<br>
  <font size="-1">
		<style type="text/css">
	   h1 { text-align: center}
	  </style>
		<h1>



						<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
							<tr>
								<th>  <font size="2"> Receiver Name </font></th>
								<th>  <font size="2"> Receiver ID </font></th>
							</tr>
							<?php

								$con= mysqli_connect("localhost","root","", "charity");
								$sql= 'SELECT * from users WHERE utype="receiver"';
								$result= $con->query($sql);

								if ($result->num_rows>0){
									while($row= $result-> fetch_assoc()){
									 echo	 "<tr><td>".$row['user_name'] . "</td><td>" .$row['user_id'] . "</td>" ;
									}
								}
								else {
									echo "No results";
								}


								$con->close();
							 ?>
						</table>
						<form method="post">

			        Enter receiver_id for your donation:
			        <input id="text" type="text" name="receiver_id" > <br>

			        <label for="utype">Choose your donation type:</label>
			        <select name="dtype" id="dtype">
			            <option value="money">Money (cash)</option>
			          <option value="product">Item/Product</option>

			        </select>

			        <input  id="button" type="submit"  value="Press to Proceed">

							 <br>

						

		         </select>


						</font>
						</h1>
					<br><br>
			     <br><br>
					 <br><br>
		<a href="logout.php">Logout</a>
  </body>
</html>
