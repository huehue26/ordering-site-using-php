<?php
session_start();
require_once 'connect.php';
$sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$customerId = $row['sl'];

$sql2 = "SELECT  as max FROM cust_order";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Foodie</title>
</head>

<body>
    <?php
    include "nav.php";
    ?>

    <br>

</body>

</html>