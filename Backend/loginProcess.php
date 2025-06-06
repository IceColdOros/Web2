<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'admin@example.com' && $password === 'admin123') {
    $_SESSION['user_type'] = 'admin';
    $_SESSION['user_name'] = 'admin';
    header('Location: ../Dashboards/adminDashboard.php');
    exit();
} elseif ($email === 'buyer@example.com' && $password === 'buyer123') {
    $_SESSION['user_type'] = 'buyer';
    $_SESSION['user_name'] = 'Buyer';
    header('Location: ../Dashboards/dashboard.php');
    exit();
} elseif ($email === 'seller@example.com' && $password === 'seller123') {
    $_SESSION['user_type'] = 'seller';
    $_SESSION['user_name'] = 'Seller';
    header('Location: ../Dashboards/dashboard.php');
    exit();
} else {
    echo "<script>
        alert('Login failed. Incorrect email or password.');
        window.location.href='../Backend/loginPage.php';
    </script>";
    exit();
}