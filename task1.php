<?php

function get_products($products, $productId) {
    $productDetails = []; 
    foreach ($products as $product) {
        if ($product['id'] == $productId) { // Used double equal sign for comparison
            $productDetails[] = $product; // Appended matching products to the array
        }
    }
    return $productDetails; // Returned all matching products
}

$products = [
    ['id' => 101, 'name' => 'Product 1', 'price' => 99.99],
    ['id' => 102, 'name' => 'Product 2', 'price' => 75.00],
    ['id' => 103, 'name' => 'Product 3', 'price' => 120.00],
];

$productId = 102;
$products = get_products($products, $productId); // Corrected function name
foreach ($products as $product) { // Loop through each matching product
    echo 'Product Name: ' . $product['name'] . "\n";
    echo 'Product Price: ' . $product['price'] . "\n";
}

