<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						if($user_data['utype']==='donor'){
							header("Location: donor_index.php");
						}
						if($user_data['utype']==='receiver'){
							header("Location: receiver.php");
						}
						if($user_data['utype']==='admin'){
							header("Location: admin_index.php");
						}

						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<style type="text/css">
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
		color: black;
		background-color: lightblue;
		border: none;
	}
	#box{
		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	body {
			background-image: url("rural.jpg");
			background-size: cover;
			background-color: #cccccc;
	}
	</style>
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Login"><br><br>
			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Login</title>
    <style>
      .de{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    
    <header>
      <!-- Navbar -->

      <nav
        class="navbar navbar-expand-lg navbar-light banner-bg bg-info fixed-top"
      >
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a
                  class="nav-link active fw-bold text-black fs-4 me-3"
                  aria-current="page"
                  href="#home"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active fw-bold text-black fs-4 me-3"
                  href="#aboutus"
                  >About us</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active fw-bold text-black fs-4 me-3"
                  href="#services"
                  >Services</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active fw-bold text-black fs-4 me-3"
                  href="#login"
                  >Login</a
                >
              </li>
              <!-- <li class="nav-item">
                <a
                  class="nav-link active fw-bold text-secondary fs-4"
                  href="#skill"
                  >Skills</a
                >
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <br />

      <!-- background -->
      <section class="container my-5" id="home">
        <div
          id="carouselExampleInterval"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="images/carosel1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="images/rural.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="images/carosel3.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </header>
    
    <main>
      <div id="aboutus">
        <div class="container" >
          <h1 class="text-center">About Us</h1>
          <br />
          <p>
            
            EasyCharity is a non-government organization committed to the
            economic and social empowerment of disadvantaged women across
            Bangladesh. It believes in realizing the potential of women to become
            strong, independent members of their communities. Shakti began its
            mission with urban microfinance programs and strategically expanded
            its service network to reach remote rural areas. Over the years, it
            has widened its range of development services to include basic health
            care and education, agro-business growth, solar power, skills training
            and advocacy. Shakti was founded in April 1992 and now serves almost
            500,000 households within 54 districts of Bangladesh.
          </p>
        </div>
      </div>

      <br />

      <div class="container" id="services">
        <h1 class="text-center">Services</h1>
        <br />
        <div class="row gx-5">
          <div class="col">
            <div class="p-3 py-5 border bg-success text-white text-center">
              Personal Donation
            </div>
          </div>
          <div class="col">
            <div class="p-3 py-5 border bg-warning text-center">
              Organization donation
            </div>
          </div>
        </div>
      </div>
      <br />
      <br>

      <!-- Login -->
      <div class="container " id="login">
        <h1 class="text-center">Sign in!!</h1>
        <div class="row bg-info align-items-center rounded-3 py-5">
          <div class="col text-center ">
            Join us now to help to create a better platform <br> to help and get help from people.
          </div>
          <div class="col">
            <form method='post'>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User name</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="user_name">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              
              <button type="submit" class="btn btn-primary">Login</button>
              
              <br>
              <br>
              Don't have an account?
              <a href="signup.php" class="de text-white">Click to Sign Up</a>
              <br>
              <br>
              Forgot your password?
              <a href="forget_password.php" class="de text-white">Click here to reset</a>

            </form>
          </div>
      </div>
      
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
