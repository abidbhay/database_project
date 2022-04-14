<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
    $utype =   $_POST['utype'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,utype) values ('$user_id','$user_name','$password','$utype')";

			mysqli_query($con, $query);

			header("Location: login.php");
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
    <title>Current: Signup page</title>
  </head>
  <body>
    <style type="text/css">
    body {
  			background-image: url("rural.jpg");
  			background-size: cover;
  			background-color: #cccccc;
  	}
   #text{

     height: 25px;
     border-radius: 5px;
     padding: 4px;
     border: solid thin #aaa;
     width: 100%;
   }

   #button{

     padding: 10px;
     width: 100px;
     color: white;
     background-color: lightblue;
     border: none;
   }

   #box{

     background-color: grey;
     margin: auto;
     width: 300px;
     padding: 20px;
   }

   </style>
   <div id="box">
      <form method="post">
        <div style="font-size: 50px; margin: 10px; color: white;">
          Signup to EasyCharity
        </div>
        Enter username:
        <input id="text" type="text" name="user_name" > <br><br>
        Enter password:
        <input id="text" type="password" name="password" ><br><br>
        <label for="utype">Choose your user type:</label>
        <select name="utype" id="utype">
            <option value="donor">Donor</option>
          <option value="receiver">Receiver</option>

        </select>
        <br><br><br>
        <input  id="button" type="submit"  value="Signup"><br><br>

        <a href="login.php">Click to login. </a><br><br>

      </form>

      </div>
  </body>
</html>
