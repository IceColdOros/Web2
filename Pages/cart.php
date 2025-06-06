<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Pages/login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeHub</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../Style/styles.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src="../Images/" class="logo" alt=""></a>
    
        <div>
            <ul id="navbar">
                    <li><a href="../Pages/index.php">Home</a></li>
                    <li><a href="../Pages/shop.php">Shop</a></li>
                    <li><a href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a class="active" href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
            </ul>
        </div>
    
    </section>

    <section class="page-header"  id="cart-header">
        <h2>#CheckOut!</h4>
        <p>Make dreams reality.</p>
    </section> 
   
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Images</td>
                    <td>Products</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../Products/pro2example.webp" alt=""></td>
                    <td>Graphic Shirt</td>
                    <td>R300</td>
                    <td><input type="number" value="1"></td>
                    <td>R300</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../Products/home3.jpeg" alt=""></td>
                    <td>Charcoal Curtain</td>
                    <td>R750</td>
                    <td><input type="number" value="1"></td>
                    <td>R750</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../Products/electronic3.webp" alt=""></td>
                    <td>Keychrone Keyboard</td>
                    <td>R2350</td>
                    <td><input type="number" value="1"></td>
                    <td>R2350</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
       <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your coupon">
                <button class="normal">Apply Coupon</button>
            </div>
       </div> 

       <div id="subtotal">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>R3400</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>R95</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>R3495</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to cheackout</button>
       </div>
    </section>

    <?php include '../Global/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>