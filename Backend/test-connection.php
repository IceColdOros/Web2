<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=tradehub", "root", "");
    echo "✅ Database connection successful!";
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage();
}
?>
