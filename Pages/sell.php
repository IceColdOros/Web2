<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sell Product</title>
    <link rel="stylesheet" href="../Style/styles.css">
    <link rel="stylesheet" href="../Style/sellStyles.css">
</head>
<body>

    <section id="header">
        <a href="#"><img src="../Images/logo2.png" class="logo" alt=""></a>
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

<div class="sell-container">
    <h2>List a New Product</h2>
    <form method="post" action="../Backend/postProduct.php" enctype="multipart/form-data">
        <label for="itemImage">Product Image</label>
        <input type="file" name="itemImage" id="itemImage" accept="image/*" required>

        <label for="itemName">Product Name</label>
        <input type="text" name="itemName" id="itemName" required>

        <label for="category">Category</label>
        <select name="category" id="category" required>
            <option value="">-- Select Category --</option>
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <option value="Groceries">Groceries</option>
            <option value="Home & Garden">Home & Garden</option>
            <option value="Books">Books</option>
        </select>

        <label for="description">Product Description</label>
        <textarea name="description" id="description" rows="5" required></textarea>

        <div class="buttons">
            <button type="reset" class="cancel-btn">Cancel</button>
            <button type="submit" class="post-btn">Post Product</button>
        </div>
    </form>
</div>

<?php include '../Global/footer.php'; ?>

</body>
</html>
