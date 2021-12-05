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

	$sql3 = "SELECT cart_id FROM cart WHERE customer_id = '$customerId'";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_array($result3);

	do {
		$cartId = $row3['cart_id'];
		$query = "INSERT INTO cust_order VALUES('$address',NULL,'$customerId','$cartId')";
		mysqli_query($conn, $query);
	} while ($row3 = mysqli_fetch_array($result3));

	$sql2 = "SELECT MAX(order_id) as max FROM cust_order";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($result2);
	$orderId = $row2['max'];
	$query2 = "INSERT INTO cust_tracker VALUES('$orderId','Your order has been sucessfully placed and will be dispatched soon',NULL)";
	mysqli_query($conn, $query2);
}
?>

<?php
ob_start();
include('checkout.php');
ob_end_clean();

$query3 = "INSERT INTO cust_transaction VALUES(NULL,'sucessful',NULL,'$total','$orderId','$discount')";
mysqli_query($conn, $query3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Profile</title>
</head>

<body>
	<div style="margin-left: 400px;">
		<img src="https://marketingsmokeandmirrors.files.wordpress.com/2018/07/shutterstock_142333726b.jpg">
	</div>
</body>

</html>