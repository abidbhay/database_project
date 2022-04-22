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


<!-- <!DOCTYPE html>
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
      <button onclick="history.back()">Go Back</button> -->
  <!-- </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Signup page</title>

    <style>
    .de{
        text-decoration: none;
      }

   </style>
  </head>

  <body>
    <main>
      <section style="height: 500px;" class="container bg-info d-flex justify-content-center align-items-center rounded-3 " id="subscribe">
        
      <div>
        <br>
        <h1>Signup to EasyCharity</h1> <br>
          <form method='post'>
            
            <div class="mb-3">
              
              <label for="exampleInputEmail1" class="form-label">User name</label>
              <input type="type" class="form-control" id="exampleInputEmail1"  name="user_name">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div>
              <label for="utype">Choose your user type:</label>
              <select name="utype" id="utype">
                  <option value="donor">Donor</option>
                <option value="receiver">Receiver</option>

              </select>
            </div>
             <br> 
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <br>              <br>
            Already have an account?
            <a href="login.php" class="de text-white">Click to Login</a>
          </form>
        </div>
      </section>
      

    </main>
    
    <!-- bootstrap script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
