
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



<!-- <!DOCTYPE html>
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
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Send message</title>
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
            <!-- <li class="nav-item nav-text">
              <a href="donor_index.php" class="btn" role="button">Home</a>
            </li> -->

            <li class="nav-item nav-text">
              <a href="inbox.php" class="btn" role="button">Inbox</a>
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
  <form method="post" >
      <div class = "container text-center">
        <h1> In Website messaging system </h1>
        <p> Fill in the boxes to complete </p>
        </hr>
          
        <label for = "text"><b>Enter the id where you want to send message :</b></label> 
        <input id="text" type="text" name="receiver_id" > <br><br>
        
        <label for = "text"><b> Enter their user_name:</b></label> 
        <input id="text" type="text" name="receiver_username" >  <br>

        <br>
        <label for = "text"><b> Type you message:</b></label> 
        <input type = "text" placeholder = "msg" name = "msg" id = "msg" required/>
        <br>
        <br>
        <button class = "submitbtn" type = "submit"> Send </button>
    
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
