<?php
session_start();
require_once 'connect.php';
include "nav.php";
if (isset($_POST['place_order']) != 0) {
	$address = $_POST['area'];
	$sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$customerId = $row['sl'];
	$query = "INSERT INTO cust_order VALUES('$address',NULL,'$customerId')";
	mysqli_query($conn, $query);
	$sql2 = "SELECT MAX(order_id) as max FROM cust_order";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($result2);
	$orderId = $row2['max'];
	$query2 = "INSERT INTO cust_tracker VALUES('$orderId','Your order has been sucessfully placed and will be dispatched soon',NULL)";
	mysqli_query($conn, $query2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Profile</title>
</head>

<body>
	<h1> Successfull!</h1>
	<div style="margin-left: 400px;">
		<img src="https://marketingsmokeandmirrors.files.wordpress.com/2018/07/shutterstock_142333726b.jpg">
	</div>
</body>

</html>