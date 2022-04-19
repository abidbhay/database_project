<!DOCTYPE html>
<html lang="en">
<head>
<title>
<title>Receiver Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="receiver_css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Donate</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<button type="button" class="btn btn-primary btn-lg btn-block mb-5">Request as an Individual</button>



<form class="p-3" action="receiver_request.php" method="post">
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="personal_userid">User Id</label>
      <input type="text" class="form-control" name="personal_userId" placeholder="User Id">
    </div>
   <div class="form-group col-md-6">
      <label for="personal_nid">NID</label>
      <input type="text" class="form-control" name="personal_nid" placeholder="NID">
    </div>

    <div class="form-group col-md-6">
    <label for="personal_name">Name</label>
    <input type="text" class="form-control" name="personal_name" placeholder="Your Name">
  </div>
    
    
    <div class="form-group col-md-6">
      <label for="personal_email">Email</label>
      <input type="email" class="form-control" name="personal_email" placeholder="Email">
    </div>



</div>



    <div class="form-group">
    <label for="perosnal_address">Address</label>
    <input type="text" class="form-control" name="personal_address" placeholder="Address">
  </div>
  </div>

  <div class="form-group">
    <label for="personal_whyrequest">Tell us Briefly about Your Request</label>
    <textarea class="form-control" name="personal_whyrequest" rows="3"></textarea>
  </div>


    

  <button type="submit" class="btn btn-primary">Submit</button>
</form>














<button type="button" class="btn btn-primary btn-lg btn-block mb-5">Request as an Organization</button>

<form class="p-3" action="org_receiver_request.php" method="post">
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="org_userId">User Id</label>
      <input type="text" class="form-control" name="org_userId" placeholder="User Id">
    </div>
   <div class="form-group col-md-6">
      <label for="org_licence">Licence Number</label>
      <input type="text" class="form-control" name="org_licence" placeholder="NID">
    </div>

    <div class="form-group col-md-6">
    <label for="org_name">Organization Name</label>
    <input type="text" class="form-control" name="org_name" placeholder="Your Organization Name">
  </div>
    
    
    <div class="form-group col-md-6">
      <label for="org_email">Email</label>
      <input type="email" class="form-control" name="org_email" placeholder="Email">
    </div>



</div>







    <div class="form-group">
    <label for="org_address">Organization Address</label>
    <input type="text" class="form-control" name="org_address" placeholder="Organization Address">
  </div>
  </div>

  <div class="form-group">
    <label for="org_whyrequest">Tell us Briefly about Your Request</label>
    <textarea class="form-control" name="org_whyrequest" rows="3"></textarea>
  </div>


    

  <button type="submit" class="btn btn-primary">Submit</button>
</form>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>