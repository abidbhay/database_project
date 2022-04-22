
<?php


	include("connection.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    // posted details
    $code = $_POST['code'];
    $user_name = $_POST['user_name'];
    $query= "SELECT * FROM users WHERE user_name= '$user_name' ";
    $result = mysqli_query($con, $query);
    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
          echo "User found";
      }
    else { echo "User NOT found"; }

    }




	}

  	if($_SERVER['REQUEST_METHOD'] == "POST")
  	{
      // posted details
      $code = $_POST['code'];
      if (empty($code)){
        die;
      }
  		if($code==="0000" )
  		{

  				header("Location: new_password.php");




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
    <title> Redirected to forget password</title>
  </head>
  <body>

        <br>


    <form method="post" >
      <div class = "container">
        <h1> Forgot Password?  </h1>
        <p> Find your account and set a new password </p>
        </hr>
        Enter your user_name:
        <input id="text" type="text" name="user_name" > <br><br>
        <button class = "submitbtn" type = "submit"> Send verification code</button>
        <br><br>
        If your id is found, enter the verification code send to your number:
				<input id="text" type="text" name="code" >  <br>
        <button class = "submitbtn" type = "submit"> Confirm</button>
          <br>

      </hr>

    </form>

  </div>
  </body>
</html>
