<?php
	session_start();

    $_SESSION['ordercount'] += $_SESSION['selectedQuantity'];
    $_SESSION['finalQuantity'] = 0;
    $_SESSION['finalTotal'] = 0;

    $arr_Selected = array(
                    'selectedPhoto' => $_SESSION['products'][$_SESSION['id']]['photo1'],
                    'selectedName' => $_SESSION['products'][$_SESSION['id']]['name'],
                    'selectedPrice' => $_SESSION['products'][$_SESSION['id']]['price'],
                    'selectedSize' => $_SESSION['selectedSize'],
                    'selectedQuantity' => $_SESSION['selectedQuantity'],
                    'total' => $_SESSION['selectedQuantity'] * $_SESSION['products'][$_SESSION['id']]['price']

                 );

    if (empty($_SESSION['selectedArr'])) {
        $_SESSION['selectedArr'] = array($arr_Selected);
    }
    elseif(($_SESSION['selectedArr'][sizeof($_SESSION['selectedArr']) - 1]['selectedName'] == $arr_Selected['selectedName']) && ($_SESSION['selectedArr'][sizeof($_SESSION['selectedArr']) - 1]['selectedSize'] == $arr_Selected['selectedSize'])){
        for ($i=0; $i < sizeof($_SESSION['selectedArr']); $i++) { 
            $tempPrice = $arr_Selected['selectedPrice'];
            $tempQuantity = $arr_Selected['selectedQuantity'];
            $tempTotal = $arr_Selected['total'];         
            if (($_SESSION['selectedArr'][$i]['selectedName'] == $arr_Selected['selectedName']) && ($_SESSION['selectedArr'][$i]['selectedSize'] == $arr_Selected['selectedSize'])){
                echo $_SESSION['selectedArr'][$i]['selectedPrice'] += $tempPrice;
                echo '<br>';
                echo $_SESSION['selectedArr'][$i]['selectedQuantity'] += $tempQuantity;
                echo '<br>';
                echo $_SESSION['selectedArr'][$i]['total'] += $tempTotal;
                echo '<br>';
                break;
            } 
    }
    } 
    else
        array_push($_SESSION['selectedArr'], $arr_Selected);       
    
    for ($i=0; $i < sizeof($_SESSION['selectedArr']); $i++) {             ;
        $_SESSION['finalTotal'] = $_SESSION['selectedArr'][$i]['total'] + $_SESSION['finalTotal'];
        $_SESSION['finalQuantity'] = $_SESSION['selectedArr'][$i]['selectedQuantity'] + $_SESSION['finalQuantity'];
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
        	<h4>Product Successfully Added to the Cart, what do you want to do next?</h4>
        </div>
        <div class="row">
             <div class="btn-toolbar pb-5" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="submit" class="btn btn-block btn-dark" name="btnViewCart" id="btnViewCart" onclick="location.href='cart.php'"><i class="fas fa-shopping-cart"></i>&nbsp;View Cart</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-block btn-danger" onclick="location.href='index.php'"><i class="fas fa-shopping-basket"></i>&nbsp;Continue Shopping</button>         
                </div>                                           
            </div>                     
        </div>
    </div>

	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
</body>
</html>