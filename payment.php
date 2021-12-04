<?php
include_once 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <script src="assets/js/source.bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <title>Foodie</title>

</head>

<body>
    <?php
    include "nav.php";

    if (isset($_SESSION['valid']) != true) {
        echo "Please login or sign up first.";
    } else {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h5><span class=""></span>Please select a payment method:</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-2">
                                </div>
                                <div class="col-xs-4">
                                    <input type="radio" name="payment" value="Bkash"> Bkash<br>
                                    <img src="images/bkash.png" alt="">
                                    <br><br><br>
                                    <input type="radio" name="payment" value="Cash_on_delivery" checked> Cash on delivery<br>
                                    <img src="images/Cash_on_del.png" alt="">
                                </div>

                            </div>
                            <hr>
                        </div>
                        <form method="post" action="payment.php">
                            <div class="panel-footer">
                                <div class="row text-center">
                                    <div class="col-xs-3">
                                        <button name="checkout" type="submit" class="btn btn-success btn-block">
                                            Place Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


</body>

</html>

<?php

if (isset($_POST['checkout']) != 0) {

    $sql = "UPDATE cart SET delivery = '1' WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);

    echo '<script language="javascript">';
    echo '</script>';
    header('Refresh: 0; URL = success.php');
}
?>