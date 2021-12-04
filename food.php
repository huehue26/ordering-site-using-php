<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>

    <h4 style="margin-left: 200px;">
        <?php do {
            echo "<div>";
            echo '<img src="data:images/jpeg;base64,' . base64_encode($row["image"]) . '" height="180" width="180" />';
            echo "<br>";
            echo $row["product_name"];
            echo "<br>";
            echo $row["unit_price"];
            echo "<br>";
            echo $row["description"];
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "</div>";
        } while ($row = mysqli_fetch_array($result));
        ?>
    </h4>
</body>

</html>