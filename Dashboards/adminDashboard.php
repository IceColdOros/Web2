<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: ../Pages/loginPage.php");
    exit;
}
?>


<!-- Pages/adminDashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../Style/adminDashboard.css">
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
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a class="active" href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
                </ul>
            </div>
        
    </section>

    <section class="admin-dashboard container">
    <h2>Admin Product Management</h2>
    <table class="table table-dark table-hover mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Seller</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- These are hardcoded. You can make them dynamic later -->
            <tr>
                <td>1</td>
                <td>Graphic Shirt</td>
                <td>Lifestyle cotton shirt</td>
                <td>R300</td>
                <td>Nathi</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sneakers</td>
                <td>Air Max</td>
                <td>R2600</td>
                <td>Addisi</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
        </tbody>
    </table>
</section>

<?php include '../Global/footer.php'; ?>

</body>
</html>
