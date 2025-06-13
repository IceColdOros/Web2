<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Redirect based on role
    switch ($user['user_type']) {
    case 'admin':
        header("Location: ../Dashboards/adminDashboard.php");
        break;
    case 'seller':
        header("Location: ../Dashboards/dashboard.php");
        break;
    case 'buyer':
        header("Location: ../Dashboards/dashboard.php");
        break;
    default:
        echo "Unknown role!";
    }
    exit;
} else {
    // If not logged in, go to login page
    header("Location: Backend/login.php");
    exit;
}
?>
