<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	  if($_SERVER['REQUEST_METHOD'] == "POST")
	  {
	    //something was posted
	    $myquery = $_POST['stylequery'];
	    if(!empty($myquery))
	    {
	      //read from database
	      $query = $myquery;
	      $result = mysqli_query($con, $query);
				while ($row= mysqli_fetch_assoc($result))
				{
						print_r($row);
						echo "<br><br>";

				}

	        }
					                         else{
						                                  echo "Failed";
					                                      }
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
 <h1> <font size="+2"> Easy Charity Adminstrater/Owner Panel </font></H1>

	 <style type="text/css">
	  h1 { text-align: center}
	 </style>


		 <font size="1">Hello <?php echo $user_data['user_name'] ?></font><br>
		 <br>
		 <a href="msg_query.php"> Send a message</a> <br><br>
		 <a href="inbox.php">View inbox</a> <br><br>
				The highest single donation made by a donor this year:
				<br>
				<?php
				// $sql= "SELECT donor_id,receiver_id,amount FROM donation WHERE amount=(SELECT MAX(amount) FROM donation)";
				// $res=mysqli_query($con, $sql);
				// echo "<table border='1'>";
				// echo "<tr><td>Donor Name</td><td>Receiver Name</td><td>Amount</td></tr>";
				// while ($row= mysqli_fetch_assoc($res)){
				// 	$sql2="SELECT user_name FROM users WHERE user_id={$row['donor_id']}";
				// 	$sql3="SELECT user_name FROM users WHERE user_id={$row['receiver_id']}";
				// 	$res2= mysqli_query($con, $sql2);
				// 	$res3= mysqli_query($con, $sql3);
				// 	$row2= mysqli_fetch_assoc($res2);
				// 	$row3= mysqli_fetch_assoc($res3);
				// 	echo "<tr><td>{$row2["user_name"]}</td><td>{$row3["user_name"]}</td><td>{$row["amount"]}</td></tr>";
				// }

				// echo "</table>";
?>
<br>
Cumulative donation made by the highest donor this year:
<br>
<?php
// $sql= "SELECT donor_id, SUM(amount) AS sum FROM donation WHERE donor_id=(SELECT donor_id FROM donation WHERE amount=(SELECT MAX(amount) FROM donation))";
// $res=mysqli_query($con, $sql);
// echo "<table border='1'>";
// echo "<tr><td>Donor Name</td><td></td><td>Amount</td></tr>";
// while ($row= mysqli_fetch_assoc($res)){
// 	$sql2="SELECT user_name FROM users WHERE user_id={$row['donor_id']}";
// 	$res2= mysqli_query($con, $sql2);
// 	$row2= mysqli_fetch_assoc($res2);
// 	echo "<tr><td>{$row2["user_name"]}</td><td></td><td>{$row["sum"]}</td></tr>";
// }

// echo "</table>";
?>

<br>
Total number of active receivers and donors in the website:
<br>
<?php
// $sql= "SELECT utype,COUNT(user_id) as id FROM users GROUP BY utype";
// $res=mysqli_query($con, $sql);
// echo "<table border='1'>";
// echo "<tr><td>Number of donors</td><td></td><td>Number of receivers</td></tr>";
// while ($row= mysqli_fetch_assoc($res)){

// 	echo "<tr><td>{$row["utype"]}</td><td></td><td>{$row["id"]}</td></tr>";
// }

// echo "</table>";
?>
<br>
<a href="admin_table1.php"> Check out highest donors in desc order.</a>
<br><br>
<a href="admin_table2.php"> Check out highest receivers in desc order.</a>
<br><br>

 <form method="post">


	Customize query (Admin can make execute own SQL query here):
	<input id="text" type="text" name="stylequery"><br><br>
	<button class = "submitbtn" type = "submit"> Submit </button> <br>
	</form>
	<a href="logout.php">Logout</a><br>
	 <a href="signup.php">Signup as donor/receiver</a><br>

	</body> -->

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

    <title>Admin</title>
    <style>
      .nav-text :hover {
        color: rgb(250, 0, 50);
      }
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
              <a href="msg_query.php" class="btn" role="button">Send Message</a>
            </li>
            <li class="nav-item nav-text">
              <a href="inbox.php" class="btn" role="button">Inbox</a>
            </li>
            <li class="nav-item nav-text">
              <a href="admin_table1.php" class="btn" role="button">Donors</a>
            </li>
            <li class="nav-item nav-text">
              <a href="admin_table2.php" class="btn" role="button">Receivers</a>
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

    <main>
      <h3 class="text-center">Easy Charity Adminstrater/Owner Panel</h3>
      <br />
			
      <div class="container">
				<p>The highest single donation made by a donor this year:</p>
				<br>
        <table class="table table-striped table-danger" >
          <thead>
            <tr>
              
              <th scope="col " class="text-center">Donor Name</th>
              <th scope="col " class="text-center">Receiver Name </th>
              <th scope="col " class="text-center">Amount </th>
              
            </tr>
          </thead>
          <tbody>
            <tr class="td-text">
  
              
              <?php
  
								$sql= "SELECT donor_id,receiver_id,amount FROM donation WHERE amount=(SELECT MAX(amount) FROM donation)";
								$res=mysqli_query($con, $sql);
  
                while ($row= mysqli_fetch_assoc($res)){
									$sql2="SELECT user_name FROM users WHERE user_id={$row['donor_id']}";
									$sql3="SELECT user_name FROM users WHERE user_id={$row['receiver_id']}";
									$res2= mysqli_query($con, $sql2);
									$res3= mysqli_query($con, $sql3);
									$row2= mysqli_fetch_assoc($res2);
									$row3= mysqli_fetch_assoc($res3);
									echo "<tr><td>{$row2["user_name"]}</td><td>{$row3["user_name"]}</td><td>{$row["amount"]}</td></tr>";
								}
				
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>
				<br>
				<br>
				<p>
				Cumulative donation made by the highest donor this year:
				</p>
				<br>
				<table class="table table-striped table-success" >
          <thead>
            <tr>
              
              <th scope="col " class="text-center">Donor Name</th>
              
              <th scope="col " class="text-center">Amount </th>
              
            </tr>
          </thead>
          <tbody>
            <tr class="td-text">
              <?php
  
								$sql= "SELECT donor_id, SUM(amount) AS sum FROM donation WHERE donor_id=(SELECT donor_id FROM donation WHERE amount=(SELECT MAX(amount) FROM donation))";
								$res=mysqli_query($con, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
									$sql2="SELECT user_name FROM users WHERE user_id={$row['donor_id']}";
									$res2= mysqli_query($con, $sql2);
									$row2= mysqli_fetch_assoc($res2);
									echo "<tr><td>{$row2["user_name"]}</td><td>{$row["sum"]}</td></tr>";
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>
				<br>
				<br>
				<p>Total number of active receivers and donors in the website:</p>
				<br>
				<table class="table table-striped table-primary" >
          <thead>
            <tr >
              
              <th scope="col " class="text-center">User Type</th>
              
              <th scope="col " class="text-center">Numbers of Users</th>
              
            </tr>
          </thead>
          <tbody>
            <tr class="td-text">
              <?php
  
								$sql= "SELECT utype,COUNT(user_id) as id FROM users GROUP BY utype";
								$res=mysqli_query($con, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
									echo "<tr><td>{$row["utype"]}</td><td>{$row["id"]}</td></tr>";
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>
				<br>
				<br>
				<form method="post">


					Customize query (Admin can make execute own SQL query here):
					<input id="text" type="text" name="stylequery"><br><br>
					<button class = "submitbtn" type = "submit"> Submit </button> <br>
				</form>


      </div>

    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

