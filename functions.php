<?php 

require('database/DBControl.php');

require('database/product.php');

$db = new DBController();

$product = new Product($db);


