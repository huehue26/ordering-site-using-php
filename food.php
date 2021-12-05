<?php
session_start();
require_once 'connect.php';
if (isset($_POST['add_to_cart']) != 0) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $query = 'INSERT INTO cart(quantity,product_id) VALUES ("' . $quantity . '","' . $productId . '")';
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="css/food2.css">
    <title>Foodie</title>
    <style>
        .container-food {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .food-child {
            flex-basis: 30%;
            row-gap: 10px;
            column-gap: 10px;
        }

        .food-img {
            margin: auto;
        }

        .food-inp {
            width: 40%;
        }
    </style>
</head>

<body>
    <?php
    include "nav.php";
    ?>

    <br>

    <?php
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="container-food">
        <!-- <h4 style="margin-left: 200px;"> -->
        <?php do {
            $quantity = 0;
            echo "<div class='food-child'>";
            echo '<img class="food-img" src="data:images/jpeg;base64,' . base64_encode($row["image"]) . '" height="180" width="180" />';
            echo "<br>";
            echo "<b>Product Name </b>: ";
            echo $row["product_name"];
            echo "<br>";
            echo "<b>Price </b>: ";
            echo $row["unit_price"];
            echo "<br>";
            echo "<b>Description </b>: ";
            echo "<div class=desc-food>";
            echo $row["description"];
            echo "</div>";
            echo "<br>";
            echo '<i><b>Enter Quantity</b></i> : <form action="food.php" method="POST"> 
                                <input type="number" class="food-inp" name="quantity">
                                <input type="submit" value="Add to Cart" name="add_to_cart">
                                <input name="product_id" style="display:none" value="' . $row["product_id"] . '">
                             </form>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "</div>";
        } while ($row = mysqli_fetch_array($result));
        ?>
        <!-- </h4> -->
    </div>
    <link rel="stylesheet" href="css/food2.css">

</body>

</html>