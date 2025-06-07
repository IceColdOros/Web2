<?php
if ($_SERVER['REQUEST_URI'] !== '/Pages/index.php') {
    header("Location: /Pages/index.php");
    exit();
}
?>