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
                    <li><a class="active" href="../Pages/shop.php">Shop</a></li>
                    <li><a href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"<i class="fas fa-user-circle"></i></li></a></li>
                </ul>
        </div>
    
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="/Products/pro1example.webp" width="100%" id="MainImg"alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="../Products/pro1example.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Products/pro2example.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Products/pro3example.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Products/pro4example.webp" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Men's Fashion T shirt</h4>
            <h2>R250</h2>
            <select>
                <option>Secect Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>"BLACK SHIRT"</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>New Summer Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../Products/pro1example.webp" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Nike Shirt</h5>
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
                <img src="../Products/pro1example.webp" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Nike Shirt</h5>
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
                <img src="../Products/pro1example.webp" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Nike Shirt</h5>
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
                <img src="../Products/pro1example.webp" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Nike Shirt</h5>
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
        </div>
    </section>

    <?php include '../Backend/newsletter.php'; ?>

    <?php include '../Backend/footer.php'; ?>

    
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }

    </script>

    <script src="../Logic/scripts.js"></script>
</body>

</html>