<?php
include('private/config.php');

if (isset($_GET['name'])) {
    $product_name = $_GET['name'];
    $stmt = $conn->prepare('SELECT * FROM product WHERE name = :name');
    $stmt->bindParam(':name', $product_name);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        echo '<h2>' . $product['name'] . '</h2>';
        echo '<p>' . $product['intro_text'] . '</p>';
        echo '<img src="' . SITE_URL . 'public/images/' . $product['image_url'] . '" alt="' . $product['name'] . '">';
        if (!empty($product['ingredients'])) {
            echo '<h3>Ingrediënten:</h3>';
            echo '<p>' . $product['ingredients'] . '</p>';
        }
    } else {
        echo 'Product niet gevonden.';
    }
} else {
    echo 'Ongeldige URL.';
}