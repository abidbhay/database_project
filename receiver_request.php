<?php
session_start();

	include("connection.php");
	include("functions.php");


$id = $_POST['personal_userId'];
$nid = $_POST['personal_nid'];
$name = $_POST['personal_name'];
$email = $_POST['personal_email'];
$product = $_POST['personal_product'];
$product_quantity = $_POST['personal_product_quantity'];
$amount = $_POST['personal_amount'];
$address = $_POST['personal_address'];
$request_reason = $_POST['personal_whyrequest'];

$query = "INSERT INTO personal (personal_userId, personal_nid, personal_name, personal_email,personal_product, personal_product_quantity, personal_amount, personal_address, personal_whyrequest) VALUES('$id', '$nid', '$name', '$email', '$product', '$product_quantity', '$amount', '$address', '$request_reason')";
mysqli_query($con,$query);

header('location:receiver.php');

?>
