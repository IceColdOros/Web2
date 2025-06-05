<?php
session_start();
include 'database.php'; // your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check user exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // If passwords are hashed, use password_verify
        // For plain text (just for testing): if ($password == $user['password'])
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect based on role
            switch ($user['user_type']) {
                case 'admin':
                    header("Location: ../Dashboards/adminDashboard.php");
                    break;
                case 'seller':
                    header("Location: ../Dashboards/sellerDashboard.php");
                    break;
                case 'buyer':
                    header("Location: ../Dashboards/buyerDashboard.php");
                    break;
                default:
                    echo "Unknown role!";
            }
            exit;
        } else {
            echo "❌ Incorrect password.";
        }
    } else {
        echo "❌ No user found.";
    }
}
?>
