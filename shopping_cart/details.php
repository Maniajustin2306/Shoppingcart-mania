<?php
    session_start();

    $arr_Sizes = array('XS', 'SM', 'MD', 'LG', 'XL');

    if(isset($_POST['btnCheckout'])){
        $_SESSION['selectedSize'] = $_POST['radioSize'];
        $_SESSION['selectedQuantity'] = $_POST['inputQuantity'];
        $_SESSION['id'] = $_GET['k'];
        echo 'hello world';
        header('location: confirm.php');
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
            <div class="col-1"></div>
            <div class="col-4">
                <div class="row">
                    <div class="col-10 d-flex align-items-stretch">
                        <div class="product-grid2 card shadow mb-5 bg-white rounded">        
                            <div class="product-image2">
                                <img class="pic-1" src="img/<?php echo $_SESSION['products'][$_GET['k']]['photo1']; ?>.jpg">
                                <img class="pic-2" src="img/<?php echo $_SESSION['products'][$_GET['k']]['photo2']; ?>.jpg">               
                            </div>                          
                        </div>
                    </div>
                </div>         
            </div>       
            <div class="col-6">
                <form method="post" action="#">
                    <div class="row">
                        <h4><?php echo $_SESSION['products'][$_GET['k']]['name']; ?></h4>
                    </div>
                    <div class="row">
                        <span class="price badge-lg badge-pill badge-dark text-white">₱ <?php echo $_SESSION['products'][$_GET['k']]['price']; ?></span>
                    </div>
                    <div class="row">
                        <p><?php echo $_SESSION['products'][$_GET['k']]['description']; ?></p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="container">
                            <h4>Select Size:</h4>
                            <?php foreach ($arr_Sizes as $key => $value) : ?>                         
                            <label class="radio-inline mr-3">
                              <input type="radio" name="radioSize" id="<?php echo $value?>" <?php if ($key == 0) echo 'checked'?> value ="<?php echo $value ?>">&nbsp;<?php echo $value ?>
                            </label>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Enter Quantity:</h4>
                        <input type="number" name="inputQuantity" class="form-control" min="1" max="100" value="0">
                    </div>
                    <hr>
                    <div class="row">
                         <div class="btn-toolbar pb-5" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="submit" class="btn btn-block btn-dark" name="btnCheckout" id="btnCheckout" ><i class="fas fa-check-circle"></i>&nbsp;Confirm Product Purchase</button></a>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-block btn-danger" onclick="location.href='index.php'"><i class="fas fa-ban"></i>&nbsp;Cancel/Go Back</button>         
                            </div>                                           
                        </div>                     
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>

</body>
</html>