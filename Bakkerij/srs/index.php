<?php
include('srs/config.php');

// Haal producten op uit de database
$stmt = $conn->prepare('SELECT * FROM product');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$productsData = [
    [
        'name' => 'Appeltaart',
        'intro_text' => 'Een heerlijke appeltaart met kaneel en rozijnen.',
        'image_url' => 'appeltaart.jpg',
        'ingredients' => 'Appels, kaneel, rozijnen, deeg, suiker.'
    ],
    [
        'name' => 'Chocoladetaart',
        'intro_text' => 'Een rijke en decadente chocoladetaart.',
        'image_url' => 'chocoladetaart.jpg',
        'ingredients' => 'Chocolade, bloem, eieren, suiker, boter.'
    ],
    [
        'name' => 'Chocoladetaart',
        'intro_text' => 'Een rijke en decadente chocoladetaart.',
        'image_url' => 'chocoladetaart.jpg',
        'ingredients' => 'Chocolade, bloem, eieren, suiker, boter.'
    ],
    [
        'name' => 'Chocoladetaart',
        'intro_text' => 'Een rijke en decadente chocoladetaart.',
        'image_url' => 'chocoladetaart.jpg',
        'ingredients' => 'Chocolade, bloem, eieren, suiker, boter.'
    ],
    [
        'name' => 'Chocoladetaart',
        'intro_text' => 'Een rijke en decadente chocoladetaart.',
        'image_url' => 'chocoladetaart.jpg',
        'ingredients' => 'Chocolade, bloem, eieren, suiker, boter.'
    ],

];
foreach ($productsData as $productData) {
    $stmt = $conn->prepare('INSERT INTO product (name, intro_text, image_url, ingredients) VALUES (:name, :intro_text, :image_url, :ingredients)');
    $stmt->execute($productData);
}