
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    // posted details
    $don_id = random_num(5);
    $receiver_id = $_POST['receiver_id'];
		$receiver_username =$_POST['receiver_username'];
    $amount = $_POST['amt'];
    $trx_id = $_POST['trx_id'];
    $user_id =  $user_data['user_id'] ;
		$user_name = $user_data['user_name'];
    $acc_num = $_POST['acc_num'];
    $inp_id = $_POST['u_id'];
    $inp_pass = $_POST['pass'];
    $inp_repass = $_POST['re_pass'];
		if(!empty($receiver_id) && !empty($amount) && !empty($trx_id) && !empty($user_id) && !empty($acc_num) && !empty($inp_id) && !empty($inp_pass) && !empty($inp_repass) && $inp_pass=== $inp_repass && $inp_pass===$user_data['password'] && $inp_id===$user_id)
		{

			$query = "INSERT INTO donation(donation_id,donor_id,receiver_id,amount,trx_id,acc_num,moneyflag,productflag,donor_name,receiver_name) VALUES ('$don_id','$user_id','$receiver_id','$amount',	'$trx_id','$acc_num',1,0, '$user_name','$receiver_username')";

			  mysqli_query($con, $query);

				header("Location: successfull_payment.php");




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
    <title> Redirected to payment (donor)</title>
  </head>
  <body>

        <br>
<font size="-5">
  <style type="text/css">
   h1 { text-align: center}
  </style>
  <h1>

          <table style="border:1px solid black;margin-left:auto;margin-right:auto;">
            <tr>
              <th>  <font size="2"> Receiver Name </font></th>
              <th>  <font size="2"> Receiver ID </font></th>
            </tr>

    <form method="post" >
      <div class = "container">
        <h1> Please insert transaction details </h1>
        <p> Fill in the boxes to complete </p>
        </hr>
        Enter receiver_id for your donation:
        <input id="text" type="text" name="receiver_id" > <br>
				Enter receiver user_name:
				<input id="text" type="text" name="receiver_username" > (Optional) <br>
        <label for = "amt"><b> Amount </b></label>
        <input type = "text" placeholder = "Amount" name = "amt" id = "amt" required/>
          <br>
        <label for = "trx_id"><b> Transaction ID </b></label>
        <input type = "text" placeholder = "Transaction ID" name = "trx_id" id = "trx_id" required/>
        <br>
        <label for = "acc_num"><b> Account Number </b></label>
        <input type = "text" placeholder = "Account Number" name = "acc_num" id = "acc_num" required/>
        <br>
        <label for = "u_id"><b> Enter ID </b></label>
        <input type = "text" placeholder = "Enter ID" name = "u_id" id = "u_id" required/>
        <br>
        <label for = "pass"><b> Enter Password </b></label>
        <input type = "password" placeholder = "Enter Password" name = "pass" id = "pass" required/>
        <br>
        <label for = "re_pass"><b> Re-enter Password </b></label>
        <input type = "password" placeholder = "Re-enter Passowrd" name = "re_pass" id = "re_pass" required/>
      </hr>

      <button class = "submitbtn" type = "submit"> Submit </button>
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

    <title>Redirected to payment (donor)</title>
    <style>
      td{
        text-align: center;
      }
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
              <a href="donor_index.php" class="btn" role="button">Home</a>
            </li>

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

        </div>
      </div>
    </nav>
    <br>
    <h1 class="text-center">Check out the donation List to donate</h1> <br>
    <div class="container">
      <table class="table table-striped table-info" >
        <thead>
          <tr >

            <th scope="col " class="text-center">Receiver Name</th>
            <th scope="col " class="text-center">Receiver ID </th>

          </tr>
        </thead>
        <tbody>
          <tr class="td-text">


            <?php

              $con= mysqli_connect("localhost","root","", "charity");
              $sql= 'SELECT * from users WHERE utype="receiver"';
              $result= $con->query($sql);

              if ($result->num_rows>0){
                while($row= $result-> fetch_assoc()){
                echo	 "<tr><td>" .$row['user_name'] . "</td><td>" .$row['user_id'] . "</td>" ;
                }
              }
              else {
                echo "No results";
              }


              $con->close();
            ?>

          </tr>

        </tbody>
      </table>

    </div>
    <br>



      <form method="post" >
        <div class = "container text-center">
          <h1> Please insert transaction details to Donate</h1>
					 <p>  Hello <?php echo $user_data['user_name'] ?>, You are our donor.
					 Id: <?php echo $user_data['user_id'] ?>  </p>
          <p> Fill in the boxes to complete </p>
          </hr>
          Enter receiver_id for your donation:
          <input id="text" type="text" name="receiver_id" > <br><br>
          Enter receiver user_name:
          <input id="text" type="text" name="receiver_username" > (Optional) <br><br>
          <label for = "amt"><b> Amount </b></label>
          <input type = "text" placeholder = "Amount" name = "amt" id = "amt" required/>
            <br><br>
          <label for = "trx_id"><b> Transaction ID </b></label>
          <input type = "text" placeholder = "Transaction ID" name = "trx_id" id = "trx_id" required/>
          <br><br>
          <label for = "acc_num"><b> Account Number </b></label>
          <input type = "text" placeholder = "Account Number" name = "acc_num" id = "acc_num" required/>
          <br><br>
          <label for = "u_id"><b> Enter ID </b></label>
          <input type = "text" placeholder = "Enter ID" name = "u_id" id = "u_id" required/>
          <br><br>
          <label for = "pass"><b> Enter Password </b></label>
          <input type = "password" placeholder = "Enter Password" name = "pass" id = "pass" required/>
          <br><br>
          <label for = "re_pass"><b> Re-enter Password </b></label>
          <input type = "password" placeholder = "Re-enter Passowrd" name = "re_pass" id = "re_pass" required/>
        </hr>

        <button class = "submitbtn" type = "submit"> Submit </button>
      </form>
      <br> <br>
    <br>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
