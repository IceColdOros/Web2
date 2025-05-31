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
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
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
                <img src="../Images/b1 (1).jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Example Text</h4>
                <p>More example text</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/b1 (1).jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Example Text</h4>
                <p>More example text</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/b1 (1).jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Example Text</h4>
                <p>More example text</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/b1 (1).jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Example Text</h4>
                <p>More example text</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <?php include '../Backend/newsletter.php'; ?>

    <?php include '../Backend/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>