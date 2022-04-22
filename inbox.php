<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);


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
  <h1> <font size="+2"> Inbox </font></H1>
 	 <style type="text/css">
 	  h1 { text-align: center}
 	 </style>
   Viewing messages in your inbox:
   <br>

  //  $my_id=$user_data['user_id'];
  //  $sql= "SELECT sender_id, time, sender_username, txt FROM message WHERE to_id='$my_id'";
  //  $res=mysqli_query($con, $sql);
  //  echo "<table border='1'>";
  //  echo "<tr><td>Sender_id</td><td>Time</td><td>Sender_username</td><td>txt</td></tr>";
  //  while ($row= mysqli_fetch_assoc($res)){
  //  	echo "<tr><td>{$row["sender_id"]}</td><td>{$row["time"]}</td><td>{$row["sender_username"]}</td><td>{$row["txt"]}</td></tr>";
  //  }
  //  echo "</table>";

   <br>
   <a href="logout.php">Logout</a><br>
 <a href="signup.php">Signup as donor/receiver</a><br>
 </body>
 </html> -->

 <!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Donar Inbox</title>
    <style>
      .nav-text :hover {
        color: rgb(250, 0, 50);
      }
    </style>
  </head>
  <body>

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
            <!-- <li class="nav-item nav-text">
              <a href="donor_index.php" class="btn" role="button">Home</a>
            </li> -->

            <li class="nav-item nav-text">
              <a href="msg_query.php" class="btn" role="button">Send Message</a>
            </li>

            <!-- <li class="nav-item nav-text">
              <a href="donation_history.php" class="btn" role="button"
                >Donation history</a
              >
            </li>
            <li class="nav-item nav-text">
              <a href="view_request.php" class="btn" role="button"
                >Donation Request</a
              >
            </li> -->
            <li class="nav-item">
              <a href="logout.php" class="btn btn-warning" role="button"
                >Log Out</a
              >
            </li>
          </ul>

        </div>
      </div>
    </nav>

    <div  >
      <h1 class="text-center ">Inbox</h1>
      <br />
      <div class="container">
        <p >Viewing messages in your inbox:</p>

        <?php
          $my_id=$user_data['user_id'];
          $sql= "SELECT sender_id, time, sender_username, txt FROM message WHERE to_id='$my_id'";
          $res=mysqli_query($con, $sql);
          // echo "<table border='1'>";
          // echo "<tr><td>Sender_id</td><td>Time</td><td>Sender_username</td><td>txt</td></tr>";
          while ($row= mysqli_fetch_assoc($res)){

            //echo "<tr><td>{$row["sender_id"]}</td><td>{$row["time"]}</td><td>{$row["sender_username"]}</td><td>{$row["txt"]}</td></tr>";
          }

          echo "</table>";
        ?>

        <br>
        <br>


        <table class="table table-striped table-info" >
          <thead>
            <tr>

              <th scope="col " class="text-center">Sender_id</th>
              <th scope="col " class="text-center">Time </th>
              <th scope="col " class="text-center">Sender_username </th>
							<th scope="col " class="text-center"> Message </th>

            </tr>
          </thead>
          <tbody>
            <tr class="td-text">


              <?php

                $my_id=$user_data['user_id'];
                $sql= "SELECT sender_id, time, sender_username, txt FROM message WHERE to_id='$my_id'";
                $res=mysqli_query($con, $sql);

                while ($row= mysqli_fetch_assoc($res)){

                  echo "<tr><td>{$row["sender_id"]}</td><td>{$row["time"]}</td><td>{$row["sender_username"]}</td><td>{$row["txt"]}</td></tr>";
                }

                echo "</table>";
              ?>

            </tr>

          </tbody>
        </table>
      </div>
    </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
