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
	$sql = "SELECT * FROM cart";
	$result = mysqli_query($conn, $sql);
	?>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							<div class="row">
								<div class="col-xs-6">
									<h5><span class="glyphicon glyphicon-shopping-cart"></span> Food Cart</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">

						<?php
						$total = 0;
						$discount = 0;
						$quantity = 0;
						while ($row = mysqli_fetch_array($result)) {
						?>
							<div class="row">
								<div class="col-xs-2">
									<?php
									$a = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '$row[product_id]'");
									$b = mysqli_fetch_assoc($a);
									$image = $b['image'];
									echo '<img src="data:images/jpeg;base64,' . base64_encode($image) . '" height="120" width="120" />';
									?>
								</div>
								<div class="col-xs-4">
									<h4 class="product-name"><strong><?php echo "$row[item]"; ?></strong></h4>
								</div>
								<div class="col-xs-6">
									<div class="col-xs-6 text-right">
										<h6><strong><?php echo "$row[price]"; ?> <span class="text-muted">&nbsp; &nbsp;</span><?php echo "$row[quantity]"; ?></strong></h6>
									</div>
								</div>
							</div>
							<hr>
						<?php
							$total = $total + ($b['unit_price'] * $row['quantity']);
							$quantity = $quantity + $row['quantity'];
							if ($quantity > 10) {
								$total = $total * 0.15;
								$discount = 15;
							} else if ($quantity > 5) {
								$total = $total * 0.08;
								$discount = 8;
							}
						}
						?>
					</div>
					<div class="panel-footer">
						<div class="row text-center">
							<div class="col-xs-9">
								<h4 class="text-right">
									Total: <strong><?php echo "$total"; ?>.00</strong>
									<strong>Discount : <?php echo "$discount"; ?>%</strong>
								</h4>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-success btn-block" onclick="window.location.href = 'payment_dmp.php'">
									Checkout
								</button>
								<form action="profile.php" method="POST">
									<input type="submit" class="btn btn-success btn-block" name="clear_cart" value="Clear Cart">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>

</html>