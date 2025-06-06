<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'admin@example.com' && $password === 'admin123') {
    $_SESSION['user_type'] = 'admin';
    $_SESSION['user_name'] = 'admin';
    header('Location: ../Dashboards/adminDashboard.php');
    exit();
} elseif ($email === 'simone.example@gmail.com' && $password === 'buyer123') {
    $_SESSION['user_type'] = 'buyer';
    $_SESSION['user_name'] = 'Simone';
    header('Location: ../Dashboards/dashboard.php');
    exit();
} elseif ($email === 'ji.example@gmail.com' && $password === 'seller123') {
    $_SESSION['user_type'] = 'seller';
    $_SESSION['user_name'] = 'Ji';
    header('Location: ../Dashboards/dashboard.php');
    exit();
} else {
    echo "<script>
            alert('Login failed. Incorrect email or password.');
            window.location.href='../Backend/loginPage.php';
          </script>";
    exit();
}
?>