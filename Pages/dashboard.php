<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Account Dashboard</title>
  <link rel="stylesheet" href="../Style/dashboardStyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- For icons -->
  <link rel="stylesheet" href="../Style/styles.css">

</head>
<body>

  <section id="header">
    <a href="#"><img src="../Images/" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
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
          <li><a href="#">Orders</a></li>
          <li><a href="#">Invoices</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Product Reviews</a></li>
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
          <li><a href="#">Personal Details</a></li>
          <li><a href="#">Security Settings</a></li>
          <li><a href="#">Address Book</a></li>
          <li><a href="#">Newsletter Subscriptions</a></li>
        </ul>
      </div>

      <div class="card">
        <h2>My Lists</h2>
        <ul>
          <li><a href="#">My Lists</a></li>
          <li><a href="#">Create a List</a></li>
        </ul>
      </div>

      <div class="card">
        <h2>Support</h2>
        <ul>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </main>

  <footer>
    <?php include '../Global/footer.php'; ?>
  </footer>

</body>
</html>