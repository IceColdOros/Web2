<?php
require_once __DIR__ . '/connect.php';

$username = "admin";
$email = "admin@example.com";
$password = "admin123"; // plain password
$role = "admin";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash, role) VALUES (?, ?, ?, ?)");
$stmt->execute([$username, $email, $hashedPassword, $role]);

echo "✅ Admin user created successfully!";
