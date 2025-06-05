<?php
$product_id = $_GET['id'] ?? 1;

// In a real app, you'd fetch from a database.
// For now, fake data:
$products = [
    1 => ["name" => "Cool Shirt", "desc" => "Stylish cotton shirt", "price" => "R199"],
    2 => ["name" => "Sneakers", "desc" => "Comfy shoes", "price" => "R499"],
];

$product = $products[$product_id];
?>
