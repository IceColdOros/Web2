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
                    <li><a class="active" href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"<i class="fas fa-user-circle"></i></li></a></li>
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
            <p>who are we text</p>

            <abbr title="">IDK some other text? Create stunning images</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images</marquee>
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