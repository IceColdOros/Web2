<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="../Style/userProfile.css">
</head>
<body>
    <div class="profile-container">
        <div class="card">
            <div class="profile-pic">
                <img src="../Images/yes_resized.jpg" alt="Profile Picture">
            </div>
            <h2><?= $email ?></h2>
            <p class="role"><?= $role ?></p>
        </div>
    </div>
</body>
</html>
