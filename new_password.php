


  <?php
  session_start();

  	include("connection.php");
  	include("functions.php");

  	if($_SERVER['REQUEST_METHOD'] == "POST")
  	{
      // posted details
      $pass = $_POST['pass'];
      $user_name = $_POST['user_name'];
  		if(!empty($pass))
  		{
        $query = "UPDATE `users` SET  `password`= '$pass' WHERE `user_name`='$user_name'";

          mysqli_query($con, $query);
          if(!$query){
            echo "Update failed! ";
          }
          else{
            echo "Update succesfull! ";
          }
  				die;




  		}else
  		{
  			echo " Password given blank!";
  		}
  	}
  ?>



  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title> Redirected to new password</title>
    </head>
    <body>

          <br>


      <form method="post" >
        <div class = "container">
          <h1> Set a new password  </h1>
          <p>  </p>
          </hr>
          Enter new password:
          <input id="text" type="text" name="pass" > <br><br>
          Re-enter user_name to confirm:
          <input id="text" type="text" name="user_name" > <br><br>
          <button class = "submitbtn" type = "submit"> Set new password</button>
          <br><br>

            <br>

        </hr>

      </form>

    </div>
    </body>
  </html>
