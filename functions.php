<?php 

require('database/DBControl.php');

require('database/product.php');
require('database/cart.php');

$db = new DBController();

$product = new Product($db);
$blogs = new Product($db);

$cart = new Cart($db);
$arr = [
    "user_id"=>1,
    "item_id"=>3

];
$cart ->insertIntoCart($arr);


