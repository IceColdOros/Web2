<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeHub</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../style/styles.css">
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
                    <li><a href="../Dashboards/dashboard.php"></a><i class="fas fa-user-circle"></i></li></a></li>
            </ul>
        </div>
    
    </section>

    <section class="page-header"  id="about-header">
        <h2>#KnowUs</h4>
        <p>Get to know more about us.</p>
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
                    <td><img src="../Products/pro1example.webp" alt=""></td>
                    <td>Black Nike T</td>
                    <td>R450</td>
                    <td><input type="number" value="1"></td>
                    <td>R450</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../Products/pro1example.webp" alt=""></td>
                    <td>Black Nike T</td>
                    <td>R450</td>
                    <td><input type="number" value="1"></td>
                    <td>R450</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../Products/pro1example.webp" alt=""></td>
                    <td>Black Nike T</td>
                    <td>R450</td>
                    <td><input type="number" value="1"></td>
                    <td>R450</td>
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
                <td>R1350</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>R95</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>R1445</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to cheackout</button>
       </div>
    </section>

    <?php include '../Global/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>