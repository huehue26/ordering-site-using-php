<?php
session_start();
require_once 'connect.php';
include "nav.php";
if (isset($_POST['place_order']) != 0) {
	$address = $_POST['area'];
	$customerId = 2;
	$query = "INSERT INTO cust_order VALUES('$address',NULL,'$customerId')";
	mysqli_query($conn, $query);
	echo "$query";
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