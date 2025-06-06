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
                    <li><a class="active" href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
            </ul>
        </div>
    
    </section>

    <section class="page-header"  id="about-header">
        <h2>#KnowUs</h4>
        <p>Get to know more about us.</p>
    </section> 
   
    <section id="about-head" class="section-p1">
        <img src="../Images/a6.jpg" alt="">
        <div>
            <h2>Who Are We?</h2>
            <p>At TradeHub, we believe buying and selling online should be simple, safe, and stress-free—no matter who you are.
                Whether you are a creative selling handmade goods, a small business testing the online market, or a larger organization looking for a direct connection with buyers, 
                we have built a place where transactions happen smoothly, securely, and without the usual hassle. Our C2C platform cuts out the middleman, 
                letting buyers and sellers communicate, negotiate, and transact with confidence. With secure payments, straightforward listings, 
                and real human support, we are here to make sure everyone gets a fair deal—minus the complications.
                No confusing fees. No sketchy surprises. Just a better way to buy and sell, the way it should be.
                Welcome to TradeHub—where great deals meet real people.</p>

            <abbr title="">TradeHub - Empowering informal traders across South Africa</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">For Those Who Dare.   ヽ༼ ຈل͜ຈ༼ ▀̿̿Ĺ̯̿̿▀̿ ̿༽Ɵ͆ل͜Ɵ͆ ༽ﾉ</marquee>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="../Images/cat1tech.png" alt="">
            <h6>Technology</h6>
        </div>
        <div class="fe-box">
            <img src="../Images/cat2clothes.png" alt="">
            <h6>Clothes</h6>
        </div>
        <div class="fe-box">
            <img src="../Images/cat3book.png" alt="">
            <h6>Books</h6>
        </div>
        <div class="fe-box">
            <img src="../Images/cat4home.png" alt="">
            <h6>Home</h6>
        </div>
        <div class="fe-box">
            <img src="../Images/cat5sport.png" alt="">
            <h6>Sport</h6>
        </div>
        <div class="fe-box">
            <img src="../Images/cat6car.png" alt="">
            <h6>Car</h6>
        </div>
    </section>

    <?php include '../Global/newsletter.php'; ?>

    <?php include '../Global/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>