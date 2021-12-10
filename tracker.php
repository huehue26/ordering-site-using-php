<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Title</title>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <form action="tracker.php" method="POST">
        <h1>Tracker</h1>
        <input name="order_id" type="text">
        <input type="submit" name="track_order" value="search">
    </form>
</body>

</html>

<?php
session_start();
include_once 'connect.php';
if (isset($_POST['track_order']) != 0) {
    $sql2 = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $customerId = $row2['sl'];

    $orderIdSearch = $_POST['order_id'];
    $sql = "SELECT order_id FROM cust_order WHERE customer_id='$customerId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $didnt_order = false;

    do {
        $orderId = $row['order_id'];
        if ($orderIdSearch == $orderId) {
            $didnt_order = false;
            $sql3 = "SELECT * FROM cust_tracker WHERE order_id='$orderId'";
            $result3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($result3);

            echo "<br><br><br>";
            echo "<strong>Order Id    :    </strong>";
            echo $orderId;
            echo "<br>";
            echo "<strong>Current location    :    </strong>";
            echo $row3['current_location'];
            echo "<br>";
            echo "<strong>Date of order    :    </strong>";
            echo $row3['date_time'];
            echo "<br><br><br><br><br><br>";
        } else {
            $didnt_order = true;
        }
    } while ($row = mysqli_fetch_array($result));
}
?>