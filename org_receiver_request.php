<?php
session_start();

	include("connection.php");
	include("functions.php");


$org_id = $_POST['org_userId'];
$org_licence = $_POST['org_licence'];
$org_name = $_POST['org_name'];
$org_email = $_POST['org_email'];
$org_product = $_POST['org_product'];
$org_product_quantity = $_POST['org_product_quantity'];
$org_amount = $_POST['org_amount'];
$org_address = $_POST['org_address'];
$org_request_reason = $_POST['org_whyrequest'];

$org_query = "INSERT INTO org (org_userId, org_licence, org_name, org_email, org_product, org_product_quantity, org_amount, org_address, org_whyrequest) VALUES('$org_id', '$org_licence', '$org_name', '$org_email', '$org_product', '$org_product_quantity', '$org_amount', '$org_address', '$org_request_reason')";
mysqli_query($con,$org_query);

header('location:receiver.php');

?>
