<?php 

require('database/DBControl.php');

require('database/product.php');
require('database/cart.php');

$db = new DBController();

$product = new Product($db);
$blogs = new Product($db);

$Cart = new Cart($db);



