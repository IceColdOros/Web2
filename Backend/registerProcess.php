<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['user_type']; // 'buyer', 'seller', or 'admin'

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, password, user_type) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $userType);

    if ($stmt->execute()) {
        echo "✅ Registration successful.";
    } else {
        echo "❌ Error: " . $stmt->error;
    }
}
?>
