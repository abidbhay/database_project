
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

		$dtype = $_POST['dtype'];
		$user_id =  $user_data['user_id'] ;

			if ($dtype==="money"){
				header("Location: money_donor.php");
			}
			if ($dtype==="product"){
				header("Location: product_donor.php");
			}
			die;
		}

?>

<!-- <!DOCTYPE html>
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



			<h1>  <font size="1">Hello, This is your profile. You are  our verified donor.</font>
</h1>
				<a href="msg_query.php"> Send a message</a> <br><br>
				<a href="inbox.php">View inbox</a> <br>
				<a href="donation_history.php">View donation logs and history</a> <br>
			 	<h1>  <font size="2"> Want to make donation? Find all places and people you can donate right here:
					<br>
			 </font>

  <font size="-1">
		<style type="text/css">
	   h1 { text-align: center}
	  </style>

			<a href="view_request.php">View donation requests for you! (New)</a> <br>
			<form method="post">
 <br>


				<label for="utype">Choose your donation type:</label>
				<select name="dtype" id="dtype">
						<option value="money">Money (cash)</option>
					<option value="product">Item/Product</option>

				</select>

				<input  id="button" type="submit"  value="Press to Proceed">
				</select>
				 <br>
			 </form>

<br>
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







						</font>

					<br><br>
			     <br><br>
					 <br><br>
		<a href="logout.php">Logout</a>
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

    <title>Easy Charity</title>
    <style>
      .de {
        text-decoration: none;
      }

      .box {
        height: 70px;
        width: 50%;
        line-height: 70px;
        text-align: center;

        justify-content: center;
      }

      .bordershadow {
        height: 70px;
        width: 80%;
        line-height: 70px;
        text-align: center;
        /* border: 2px solid #dd; */
        border-radius: 3px;
        box-shadow: 0 0 0 1px rgb(0 0 0 / 20%);
        transition: all 200ms ease-out;
      }

      .nav-text :hover {
        color: rgb(250, 0, 50);
      }

      /* .submit-btn {
        height: 50px;
        width: 20%;
        padding-top: 0px;
      } */
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarScroll"
        >
          <ul
            class="navbar-nav me-2 my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item nav-text">
              <a href="msg_query.php" class="btn" role="button">Send Message</a>
            </li>
            <li class="nav-item nav-text">
              <a href="inbox.php" class="btn" role="button">Inbox</a>
            </li>
            <li class="nav-item nav-text">
              <a href="donation_history.php" class="btn" role="button"
                >Donation history</a
              >
            </li>
            <li class="nav-item nav-text">
              <a href="view_request.php" class="btn" role="button"
                >Donation Request</a
              >
            </li>
            <li class="nav-item">
              <a href="logout.php" class="btn btn-warning" role="button"
                >Log Out</a
              >
            </li>
          </ul>
          <!-- <form class="d-flex">

            <li class="nav-item">
              <a class="nav-link disabled">Link</a>
            </li>
            <a href="logout.php" class="btn btn-warning" role="button"
              >Log Out</a
            >
          </form> -->
        </div>
      </div>
    </nav>

    <!-- <a href="logout.php" class="de text-end">Logout</a>
    <button type="button" class="btn btn-link">Link</button> -->

    <!-- <div class="d-flex justify-content-end px-5 py-3 fixed-top">
      <a href="logout.php" class="btn btn-warning" role="button">Log Out</a>
    </div> -->

    <h1 class="text-center">Welcome to Easy Charity!</h1>
    <br />

    <section
      class="box container bg-info justify-content-center align-items-center rounded-3"
      id="subscribe"
    >
      <div>
        <p>
          Hello <?php echo $user_data['user_name'] ?>, You are our donor.
					 Id: <?php echo $user_data['user_id'] ?>
        </p>
      </div>
      <br />

      <div>
        <h3>Want to make donation?</h3>

        <form method="post">
          <label for="utype">Choose your donation type:</label>
          <select name="dtype" id="dtype">
            <option value="money">Money (cash)</option>
            <option value="product">Item/Product</option>
          </select>
          <br />
          <input
            id="button "
            class="btn btn-warning"
            type="submit"
            value="Press to Proceed"
          />
          <br />
        </form>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
