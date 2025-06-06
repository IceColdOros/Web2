<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$loginError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signIn'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $users = [
        'admin@example.com' => ['password' => 'admin123', 'role' => 'admin'],
        'seller@example.com' => ['password' => 'seller123', 'role' => 'seller'],
        'buyer@example.com' => ['password' => 'buyer123', 'role' => 'buyer']
    ];

    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $email;
        $_SESSION['role'] = $users[$email]['role'];

        switch ($_SESSION['role']) {
            case 'admin':
                header('Location: ../Pages/index.php');
                exit;
            case 'seller':
            case 'buyer':
                header('Location: ../Pages/index.php');
                exit;
        }
    } else {
        $loginError = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../Style/loginStyles.css">
    <link rel="stylesheet" href="../Style/styles.css">
</head>
<body>

    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="../Backend/loginProcess.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" placeholder="First Name" required>
                <label>First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" placeholder="Last Name" required>
                <label>Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="reg_email" placeholder="Email" required>
                <label>Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="reg_password" placeholder="Password" required>
                <label>Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <p class="or">--------OR--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have An Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>

        <?php if ($loginError): ?>
            <p style="color: red;"><?= $loginError ?></p>
        <?php endif; ?>

        <form method="post" action="../Backend/loginProcess.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
                <label>Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <p class="or">--------OR--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't Have An Account?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <script src="../Logic/loginScript.js"></script>
</body>
</html>
