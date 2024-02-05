<?php

class Product {
    private $products;  //We define a private property $products to store the array of products.

    public function __construct($products) {  //The constructor method __construct() takes the $products array as a parameter and assigns it to the $products property.
        $this->products = $products;
    }

    public function getProductById($productId) { //We define a public method getProductById() which takes a product ID as a parameter and returns an array of matching products.
        $productDetails = [];
        foreach ($this->products as $product) {
            if ($product['id'] == $productId) {
                $productDetails[] = $product;
            }
        }
        return $productDetails;
    }
}



