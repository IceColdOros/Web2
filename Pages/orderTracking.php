<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Tracking</title>
  <link rel="stylesheet" href="../Style/adminDashboard.css">
  <link rel="stylesheet" href="../Style/orderTracking.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- For icons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" href="../Style/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>



<body>

  <section id="header">
    <a href="#"><img src="../Images/logo2Smaller.png" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="../Pages/shop.php">Shop</a></li>
                    <li><a href="../Pages/blog.php">Blog</a></li>
                    <li><a href="../Pages/about.php">About</a></li>
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a class="active" href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
              </ul>
    </div>
  </section>

  <div class="tracking-container">
    <div class="tracking-header">Order Tracking</div>

    <div class="tracking-step completed">
      <strong>Order Placed</strong><br>
      Your order has been successfully placed.
    </div>

    <div class="tracking-step completed">
      <strong>Processing</strong><br>
      Your order is being prepared.
    </div>

    <div class="tracking-step completed">
      <strong>Shipped</strong><br>
      Your order has left the warehouse.
    </div>

    <div class="tracking-step">
      <strong>Out for Delivery</strong><br>
      The courier is delivering your package.
    </div>

    <div class="tracking-step">
      <strong>Delivered</strong><br>
      Your order has been delivered.
    </div>
  </div>

  <?php include '../Global/footer.php'; ?>

</body>
</html>
