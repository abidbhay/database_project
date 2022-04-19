<?php

$org_scon = mysqli_connect('localhost','root');

if ($org_scon){
    echo "Connection Successful";
}
else{
    echo "Connection Failed";
}

mysqli_select_db($org_scon, 'receiver_request');

$org_id = $_POST['org_userId'];
$org_licence = $_POST['org_licence'];
$org_name = $_POST['org_name'];
$org_email = $_POST['org_email'];
$org_address = $_POST['org_address'];
$org_request_reason = $_POST['org_whyrequest'];

$org_query = "INSERT INTO org (org_userId, org_licence, org_name, org_email, org_address, org_whyrequest) VALUES('$org_id', '$org_licence', '$org_name', '$org_email',  '$org_address', '$org_request_reason')";
mysqli_query($org_scon,$org_query);

header('location:receiver.php');

?>