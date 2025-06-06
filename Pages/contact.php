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
                    <li><a href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a class="active" href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
            </ul>
        </div>
    
    </section>

    <section class="page-header"  id="contact-header">
        <h2>#GetInTouch</h4>
        <p>Cantact us with any problem you may have.</p>
    </section> 
   
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency loactions or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>22 Umgazi Rd, Ashlea Gardens, Pretoria, 0081</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>eduvos@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>012 348 3060</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Friday: 08:00 - 16:30</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.795006540425!2d28.269176299999998!3d-25.
            777333700000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9561e6be4cd951%3A0x495514abf9880e27!2sEduv
            os%20-%20Pretoria!5e0!3m2!1sen!2sza!4v1748445195491!5m2!1sen!2sza" width="600" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We would love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="../Images/employee1.jpg" alt="">
                <p><span>Luyanda Ndlovu:</span> Seniour Marketing Manager <br> Phone: 012 345 6789
                <br> Email: seniour.luyanda@gmail.com</p>
            </div>
            <div>
                <img src="../Images/employee2.jpg" alt="">
                <p><span>Johan Moyane:</span> Deputy Marketing Manager <br> Phone: 102 435 7689
                <br> Email: deputy.johan@gmail.com</p>
            </div>
            <div>
                <img src="../Images/yes_resized.jpg" alt="">
                <p><span>Chad Kriel:</span> Juniour Marketing Manager <br> Phone: 210 543 9876
                <br> Email: junior.chad@gmail.com</p>
            </div>
        </div>

    </section>

    <?php include '../Global/newsletter.php'; ?>

    <?php include '../Global/footer.php'; ?>

    <script src="../Logic/scripts.js"></script>
</body>

</html>