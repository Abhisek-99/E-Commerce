<?php

// require MySQL connection
require('database/DBController.php');

// require product class
require('database/Product.php');

// require cart class
require('database/Cart.php');



// DBController Object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db);
// print_r($Cart->getCartId($product->getData('cart')));



?>