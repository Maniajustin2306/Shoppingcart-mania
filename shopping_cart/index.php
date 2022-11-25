<?php

	session_start();

	$arr_Products = array(
	 	array(
	 		'name' 			=> 'LeBron James Lakers Statement Edition 2020', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '1000',
	 		'photo1' 		=> 'Product1a',
	 		'photo2' 		=> 'Product1b'
	 	),

	 	array(
	 		'name' 			=> 'Giannis Antetokounmpo Bucks Statement Edition 2020', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '800',
	 		'photo1' 		=> 'Product2a',
	 		'photo2' 		=> 'Product2b'
	 	),

	 	array(
	 		'name' 			=> 'Brooklyn Nets Biggie', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '1500',
	 		'photo1' 		=> 'Product3a',
	 		'photo2' 		=> 'Product3b'
	 	),

	 	array(
	 		'name' 			=> 'Kevin Durant Nets Statement Edition 2020', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '1000',
	 		'photo1' 		=> 'Product4a',
	 		'photo2' 		=> 'Product4b'
	 	),

	 	array(
	 		'name' 			=> 'Paul George Clippers Statement Edition 2020', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '800',
	 		'photo1' 		=> 'Product5a',
	 		'photo2' 		=> 'Product5b'
	 	),

	 	array(
	 		'name' 			=> 'Portugal 2020 Stadium Away', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '1250',
	 		'photo1' 		=> 'Product6a',
	 		'photo2' 		=> 'Product6b'
	 	),

	 	array(
	 		'name' 			=> 'Mens Mesh Training Shorts', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '850',
	 		'photo1' 		=> 'Product7a',
	 		'photo2' 		=> 'Product7b'
	 	),

	 	array(
	 		'name' 			=> 'Jordan Jumpman Air', 
	 		'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	 		'price' 		=> '850',
	 		'photo1' 		=> 'Product8a',
	 		'photo2' 		=> 'Product8b'
	 	)

	);

	$_SESSION['products'] = $arr_Products;

	if (empty($_SESSION['ordercount'])) {
		$_SESSION['ordercount'] = 0;
	}	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
	<link rel="stylesheet" type="text/css" href="css/custom-styles.css">
	<title>Sports Wear Shop</title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-6 d-flex flex-row">
				<i class="fas fa-store-alt h2"></i>
				<h3 class="h3 nav-style">Sports Wear Shop</h3>
			</div>
			<div class="col-6">
				<a href="cart.php" class="btn btn-primary float-right">
				  <i class="fas fa-shopping-cart"></i>
				  Cart
				  <span class="badge badge-light"><?php echo $_SESSION['ordercount']; ?></span>
				</a>
			</div>
		</div>
	    <hr>
	    <div class="row">
	    <?php foreach ($arr_Products as $key => $value) : ?>
		        <div class="col-md-3 col-sm-6 d-flex align-items-stretch">
		            <div class="product-grid2 card shadow mb-5 bg-white rounded">	     
		                <div class="product-image2 card-style">
		                    <a href="details.php?k=<?php echo $key?>" name="btn" id="btn">
		                        <img class="pic-1" src="img/<?php echo $value['photo1']; ?>.jpg">
		                        <img class="pic-2" src="img/<?php echo $value['photo2']; ?>.jpg">
		                    </a>	            
		                    <a href="details.php?k=<?php echo $key?>" class="add-to-cart" name="btn" id="btn">Add to cart</a>
		                </div>
		                <div class="product-content">
		                    <h3 class="title"><?php echo $value['name']; ?></h3>
		                    <span class="price badge badge-pill badge-dark text-white">₱ <?php echo $value['price']; ?></span>
		                </div>
		            </div>
		        </div>
	    <?php endforeach ?>
	    </div>
	</div>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	
</body>
</html>