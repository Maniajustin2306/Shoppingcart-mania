<?php
    session_start();
    $_POST['inputUpdate'] = $_SESSION['selectedArr'][0]['selectedQuantity'];
    if (isset($_POST['btnUpdate'])) {
          $value['selectedQuantity'] = $_POST['inputUpdate'];
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
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Product</th>
                                <th scope="col">Size</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                                <th scope="col" class="text-right">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($_SESSION['selectedArr'])): ?>
                                <tr>
                                    <td></td>
                                    <td>Cart is Still Empty</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> 
                            <form method="post">                             
                            <?php else: ?>
                                 <?php foreach ($_SESSION['selectedArr'] as $key => $value) : ?>
                                    <tr>
                                        <td><img class="pic-1" style="width: 5vh;" src="img/<?php echo $value['selectedPhoto']; ?>.jpg"></td>
                                        <td><?php echo $value['selectedName']; ?></td>
                                        <td><?php echo $value['selectedSize']; ?></td>
                                        <td class=" align-middle"><input class="form-control text-center" type="number" name ="inputUpdate" id="inputUpdate" value="<?php echo $value['selectedQuantity']; ?>" /></td>
                                        <td class="text-right">₱ <?php echo number_format($value['selectedPrice'], 2); ?></td>
                                        <td class="text-right">₱ <?php echo number_format($value['total'], 2); ?></td>
                                        <td class="text-right"><a href="remove-confirm.php?k=<?php echo $key?>" class="add-to-cart" name="btn" id="btn"><button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></a></td>                                                    
                                    </tr>
                                 <?php endforeach ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-center"><?php echo $_SESSION['finalQuantity']; ?></td>
                                        <td></td>                              
                                        <td class="text-right"><strong>₱ <?php echo number_format($_SESSION['finalTotal'], 2); ?></strong></td>
                                        <td></td>
                                    </tr>                               
                            <?php endif; ?>
                            </form> 
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <form method="post"> 
                <div class="row"> 
                                
                    <div class="col-4">
                        <button type="button" class="btn btn btn-block btn-danger" onclick="location.href='index.php'"><i class="fas fa-shopping-bag"></i>&nbsp;Continue Shopping</button>
                    </div>
                     <div class="col-4">
                        <button type="submit" class="btn btn btn-block btn-success" name="btnUpdate" id="btnUpdate"><i class="fas fa-edit"></i>&nbsp;Update</button>
                    </div>
                     <div class="col-4">
                        <button type="button" class="btn btn btn-block btn-primary" onclick="location.href='clear.php'"><i class="fas fa-sign-out-alt"></i>&nbsp;Checkout</button>
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