<?php
$products = [
    ['name' => 'Product A', 'price' => 10],
    ['name' => 'Product B', 'price' => 20],
    ['name' => 'Product C', 'price' => 30],
];

$updatedProducts = array_map(fn($product) => [
    'name' => $product['name'],
    'price' => $product['price'] * 1.15
    
], $products);
?>
