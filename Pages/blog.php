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
        <a href="#"><img src="../Images/logo2Smaller.png" class="logo" alt=""></a>
    
        <div>
            <ul id="navbar">
                    <li><a href="../Pages/index.php">Home</a></li>
                    <li><a href="../Pages/shop.php">Shop</a></li>
                    <li><a class="active" href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
            </ul>
        </div>
    
    </section>

    <section class="page-header"  id="blog-header">
        <h2>#readmore</h4>
        <p>Read more about us.</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/blog1.avif" alt="">
            </div>
            <div class="blog-details">
                <h4>Why We Built This Platform — And How It Helps YOU Win</h4>
                <p>This is not just another buy/sell app. We are tired of fees, scams, and chaos too. 
                    So we made a place where real people get the best deals — with secure payments, 
                    no bots, and actual humans on standby. Because you deserve better.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/blog2.avif" alt="">
            </div>
            <div class="blog-details">
                <h4>Buying Secondhand? Here is How to Snag the Best Deals</h4>
                <p>Love a good bargain but hate the back-and-forth? We get it. 
                    Whether you are hunting for vintage jeans or a barely-used 3090, 
                    here is how to spot hidden gems, negotiate like a pro, 
                    and avoid sketchy sellers — all while keeping it chill. Your wallet will thank you.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>08/02</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/blog3.avif" alt="">
            </div>
            <div class="blog-details">
                <h4>Hey Sellers! These 5 Little Tricks Can DOUBLE Your Sales</h4>
                <p>Want to sell faster and for more money? You are not alone! 
                    After watching top sellers on TradeHub, 
                    we noticed they all do these 5 simple
                    things — like using bright photos and keyword-friendly titles.  
                    Ready to boost your listings?</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>25/03</h1>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <?php include '../Global/newsletter.php'; ?>

    <?php include '../Global/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>