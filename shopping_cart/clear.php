<?php
	session_start();
	session_unset();
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
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/custom-styles.css">
    <title>Sports Wear Shop</title>
    <title></title>
</head>
<body>
    <div class="container mb-4">
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
        	<h4>Online Shopping is Successful!</h4>
        </div>
        <div class="row">
             <div class="btn-toolbar pb-5" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-lg btn-block btn-danger" onclick="location.href='index.php'"><i class="fas fa-shopping-basket"></i>&nbsp;Continue Shopping</button>         
                </div>                                           
            </div>                     
        </div>
    </div>

 	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
</body>
</html>