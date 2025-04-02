<?php

// require MySQL connection
require('../database/DBController.php');

// require product class
require('../database/Product.php');

//DBController object
$db = new DBController();

// Product object
$product = new Product($db);

// $product_shuffle = $product->getData();

if(isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}