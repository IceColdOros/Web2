<?php
session_start();
require_once __DIR__ . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) { // Replace with password_verify() once hashed
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect by role
        switch ($user['role']) {
            case 'admin':
                header('Location: admin/dashboard.php');
                break;
            case 'seller':
                header('Location: ../Dashboards/dashboard.php');
                break;
            case 'buyer':
                header('Location: ../Dashboards/dashboard.php');
                break;
        }
        exit;
    } else {
        echo "<p style='color:red'>Invalid email or password</p>";
    }
}
?>