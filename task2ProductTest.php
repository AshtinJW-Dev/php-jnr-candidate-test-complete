<?php

require_once 'task2ProductClass.php';

$products = [
    ['id' => 101, 'name' => 'Product 1', 'price' => 99.99],
    ['id' => 102, 'name' => 'Product 2', 'price' => 75.00],
    ['id' => 103, 'name' => 'Product 3', 'price' => 120.00],
];

// Create an instance of the Product class
$productInstance = new Product($products);

// Define the product ID to search for
$productId = 102;

// Call the getProductById method to find the product(s) by ID
$productDetails = $productInstance->getProductById($productId);

// Output the matching product(s)
foreach ($productDetails as $product) {
    echo 'Product Name: ' . $product['name'] . "\n";
    echo 'Product Price: ' . $product['price'] . "\n";
}

