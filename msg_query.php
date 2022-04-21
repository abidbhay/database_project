
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    // posted details
    $receiver_id = $_POST['receiver_id'];
		$receiver_username =$_POST['receiver_username'];
    $msg = $_POST['msg'];
    $user_id =  $user_data['user_id'] ;
		$user_name = $user_data['user_name'];

		if(!empty($receiver_id) && !empty($receiver_username) && !empty($msg) )
		{

			$query = "INSERT INTO message(sender_id,sender_username,to_id,txt ) VALUES ('$user_id','$user_name','$receiver_id',	'$msg')";

			mysqli_query($con, $query);

				echo("Message sent succesfully");




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
    <title> Msg</title>
  </head>
  <body>

        <br>
<font size="-5">
  <style type="text/css">
   h1 { text-align: center}
  </style>
  <h1>

        

    <form method="post" >
      <div class = "container">
        <h1> In Website messaging system </h1>
        <p> Fill in the boxes to complete </p>
        </hr>
        Enter the id where you want to send message :
        <input id="text" type="text" name="receiver_id" > <br>
				Enter their user_name:
				<input id="text" type="text" name="receiver_username" >  <br>

        <br>
        <label for = "text"><b> Type you message.</b></label>
        <input type = "text" placeholder = "msg" name = "msg" id = "msg" required/>
        <br>


      <button class = "submitbtn" type = "submit"> Send </button>
    </form>

  </div>
  </body>
</html>
