<?php 
ob_start();
include('header.php');
?>

<?php
    count($product->getData('cart'))?include('Template/_cart-template.php'):include('Template/empty_cart/empty-cart.php');
?>
<?php 
    include('Template/_new-phones.php');
?>

<?php 
    include('footer.php');
?>