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
                    <li><a class="active" href="../Pages/index.php">Home</a></li>
                    <li><a href="../Pages/shop.php">Shop</a></li>
                    <li><a href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
            </ul>
        </div>
    
    </section>

    <section id="hero">
        <h2>TradeHub</h4>
        <h4>Empowering informal traders across South Africa</h2>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <img src="../Images/cat1tech.png" alt="">
            <h6>Technology</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <img src="../Images/cat2clothes.png" alt="">
            <h6>Clothes</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <img src="../Images/cat3book.png" alt="">
            <h6>Books</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <img src="../Images/cat4home.png" alt="">
            <h6>Home</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <img src="../Images/cat5sport.png" alt="">
            <h6>Sport</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <img src="../Images/cat6car.png" alt="">
            <h6>Car</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Trending products from local </p>
        <div class="pro-container">
            <div class="pro">
                <img src="../Products/pro1example.webp" alt="">
                <div class="des">
                    <span>Clothes</span>
                    <h5>Nike Shirt | Fitness</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R350</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/nikeShirt2.webp" alt="">
                <div class="des">
                    <span>Clothes</span>
                    <h5>Nike Shirt | Lifestyle</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R450</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/pro2example.webp" alt="">
                <div class="des">
                    <span>Clothes</span>
                    <h5>Graphic Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R300</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/home1.jpg" alt="">
                <div class="des">
                    <span>Home</span>
                    <h5>Dark Grey Curtain</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/sport2.webp" alt="">
                <div class="des">
                    <span>Sport</span>
                    <h5>Osaka Hockey Stick</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R5650</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/sport4.jpeg" alt="">
                <div class="des">
                    <span>Sport</span>
                    <h5>Rugby Ball</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R450</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/electronic2.webp" alt="">
                <div class="des">
                    <span>Electronics</span>
                    <h5>JBL Headphones</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R1500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/electronic5.jpeg" alt="">
                <div class="des">
                    <span>Electronics</span>
                    <h5>JBL TWS Earphones</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R1250</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Discounted Items</h4>
        <h2>Up to <span>15% Off</span> - All sport accessories</h2>
        <button class="normal">See More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="../Products/book1.jpg" alt="">
                <div class="des">
                    <span>Book</span>
                    <h5>Book | Mastery</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/book2.png" alt="">
                <div class="des">
                    <span>Book</span>
                    <h5>Book | War</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R450</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/home2.webp" alt="">
                <div class="des">
                    <span>Home</span>
                    <h5>Light Grey Curtain</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/home3.jpeg" alt="">
                <div class="des">
                    <span>Home</span>
                    <h5>Charcoal Curtain</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/sport1.webp" alt="">
                <div class="des">
                    <span>Sport</span>
                    <h5>Osaka Hockey Stick</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R5550</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/car1.jpg" alt="">
                <div class="des">
                    <span>Car</span>
                    <h5>Car Phone Mount</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R250</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/electronic3.webp" alt="">
                <div class="des">
                    <span>Electronics</span>
                    <h5>Keychrone Keyboard</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R2350</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../Products/electronic4.webp" alt="">
                <div class="des">
                    <span>Electronics</span>
                    <h5>NVIDIA RTX 3090</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R23999</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>


    <?php include '../Global/newsletter.php'; ?>

    <?php include '../Global/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>
