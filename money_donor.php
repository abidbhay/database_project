
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
    $amount = $_POST['amt'];
    $trx_id = $_POST['trx_id'];
    $user_id =  $user_data['user_id'] ;
    $acc_num = $_POST['acc_num'];
    $inp_id = $_POST['u_id'];
    $inp_pass = $_POST['pass'];
    $inp_repass = $_POST['re_pass'];
		if(!empty($receiver_id) && !empty($amount) && !empty($trx_id) && !empty($user_id) && !empty($acc_num) && !empty($inp_id) && !empty($inp_pass) && !empty($inp_repass) && $inp_pass=== $inp_repass && $inp_pass===$user_data['password'] && $inp_id===$user_id)
		{

			$query = "INSERT INTO donation(donation_id,donor_id,receiver_id,amount,trx_id,acc_num,moneyflag,productflag) VALUES ('$don_id','$user_id','$receiver_id','$amount',	'$trx_id','$acc_num',1,0) ";

			mysqli_query($con, $query);

				header("Location: successfull_payment.php");




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

    <form method="post" >
      <div class = "container">
        <h1> Please insert transaction details </h1>
        <p> Fill in the boxes to complete </p>
        </hr>
        Enter receiver_id for your donation:
        <input id="text" type="text" name="receiver_id" > <br>

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
</html>
