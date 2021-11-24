<?php include("header.php"); 

// session_start();
// session_destroy();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-cart</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>

	<!-- <?php print_r($_SESSION['cart']) ?> -->

<div class="container mt-4">
	<div class="row">

		<div class="col-lg-3">
		<form action="manage_cart.php" method="POST">
			<div class="card">
			  <img src="image/pc1.jpg" class="card-img-top">
			  <div class="card-body text-center">
			    <h5 class="card-title">CPU 1</h5>
			    <p class="card-text">Price: Rs. 1999</p>
			    <button type="submit" name="Add_To_Cart" class="btn btn-success">Add To Cart</button>
			    <input type="hidden" name="Item_Name" value="CPU 1">
			    <input type="hidden" name="Price" value="1999">
			  </div>
			</div>
		</form>	
		</div>

		<div class="col-lg-3">
		<form action="manage_cart.php" method="POST">
			<div class="card">
			  <img src="image/pc2.jpg" class="card-img-top">
			  <div class="card-body text-center">
			    <h5 class="card-title">CPU 2</h5>
			    <p class="card-text">Price: Rs. 2999</p>
			    <button type="submit" name="Add_To_Cart" class="btn btn-success">Add To Cart</button>
			    <input type="hidden" name="Item_Name" value="CPU 2">
			    <input type="hidden" name="Price" value="2999">
			  </div>
			</div>
		</form>	
		</div>

		<div class="col-lg-3">
		<form action="manage_cart.php" method="POST">
			<div class="card">
			  <img src="image/pc3.jpg" class="card-img-top">
			  <div class="card-body text-center">
			    <h5 class="card-title">CPU 3</h5>
			    <p class="card-text">Price: Rs. 3999</p>
			    <button type="submit" name="Add_To_Cart" class="btn btn-success">Add To Cart</button>
			    <input type="hidden" name="Item_Name" value="CPU 3">
			    <input type="hidden" name="Price" value="3999">
			  </div>
			</div>
		</form>	
		</div>

		<div class="col-lg-3">
		<form action="manage_cart.php" method="POST">
			<div class="card">
			  <img src="image/pc4.jpg" class="card-img-top">
			  <div class="card-body text-center">
			    <h5 class="card-title">CPU 4</h5>
			    <p class="card-text">Price: Rs. 4999</p>
			    <button type="submit" name="Add_To_Cart" class="btn btn-success">Add To Cart</button>
			    <input type="hidden" name="Item_Name" value="CPU 4">
			    <input type="hidden" name="Price" value="4999">
			  </div>
			</div>
		</form>	
		</div>

	</div>
</div>


</body>
</html>