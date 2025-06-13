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
                    <li><a href="/index.php">Home</a></li>
                    <li><a class="active" href="../Pages/shop.php">Shop</a></li>
                    <li><a href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
                </ul>
        </div>
    
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="/Products/pro1example.webp" width="100%" id="MainImg"alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="../Products/nikeShirt4.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Products/nikeShirt3.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Products/nikeShirt2.webp" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Shop / T-Shirt</h6>
            <h4>Men's Lifestyle Nike T</h4>
            <h2>R450</h2>
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
            <span>Enjoy the simple yet clean design of our new Lifestyle line of shirts. 
                Made out of wool so the wear will always be plesurable.
            </span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>New Summer Collection</p>
        <div class="pro-container">
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
                <img src="../Products/nikeShoe2.webp" alt="">
                <div class="des">
                    <span>clothes</span>
                    <h5>Nike Air Max 97</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R2600</h4>
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
            <div class="pro">
                <img src="../Products/pro3example.webp" alt="">
                <div class="des">
                    <span>lothes</span>
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
        </div>
    </section>

    <?php include '../Global/newsletter.php'; ?>

    <?php include '../Global/footer.php'; ?>

    
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
        

    </script>

    <script src="../Logic/scripts.js"></script>
</body>

</html>