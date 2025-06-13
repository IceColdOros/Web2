<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Account Dashboard</title>
  <link rel="stylesheet" href="../Style/dashboardStyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- For icons -->
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
                    <li><a href="../Pages/contact.php">Contact</a></li>
                    <li><a href="../Pages/cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a class="active" href="../Dashboards/dashboard.php"><i class="fas fa-user-circle"></i></a></li>
              </ul>
    </div>
  </section>

  <main class="dashboard-container">
    <h1>My Account</h1>
    <div class="grid">
      <!-- cards -->
      <div class="card">
        <h2>Orders</h2>
        <ul>
          <li><a href="../Pages/orderTracking.php">Orders</a></li>
          <li><a href="#">Invoices</a></li>
          <li><a href="#">Returns</a></li>
          <?php if ($userRole === 'admin') : ?>
            <li><a href="../Dashboards/adminDashboard.php">Admin</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <div class="card">
        <h2>Payments & Credit</h2>
        <ul>
          <li><a href="#">Coupons & Offers</a></li>
          <li><a href="#">Credit & Refunds</a></li>
          <li><a href="#">Redeem Gift Voucher</a></li>
        </ul>
      </div>

      <div class="card">
        <h2>Subscription</h2>
        <ul>
          <li><a href="#">Plan Details</a></li>
          <li><a href="#">Payment History</a></li>
        </ul>
      </div>

      <div class="card">
        <h2>Profile</h2>
        <ul>
          <li><a href="../Pages/userProfile.php">Personal Details</a></li>
          <li><a href="#">Security Settings</a></li>
          <li><a href="#">Address Book</a></li>
          <li><a href="#">Newsletter Subscriptions</a></li>
        </ul>
      </div>

      <div class="card">
        <h2>My Lists</h2>
        <ul>
          <li><a href="../Pages/sell.php">Sell</a></li>
          <li><a href="#">My Lists</a></li>
          <li><a href="#">Create a List</a></li>
        </ul>
      </div>

      <div class="card">
        <h2>Support</h2>
        <ul>
          <li><a href="../Pages/contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </main>

  <footer>
    <?php include '../Global/footer.php'; ?>
  </footer>

</body>
</html>