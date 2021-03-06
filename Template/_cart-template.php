<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteItem($_POST['item_id']);
        };
    };
?>

<section id="cart" class="py-3">
           <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>
            <div class="row">
                <div class="col-sm-9">
                    <?php 

                
                foreach($product->getData('cart')as $item){
                    $cart = $product->getProduct($item['item_id']);
                   $subtotal[] =  array_map(function($item){ 
                    ?>
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="<?php echo $item['item_image']??"./assets/products/1.png" ?>" style="height: 120px;" alt="First Product" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font baloo font-size-20"><?php echo $item['item_name']?? "Unknown" ?></h5>
                            <small>by <?php echo $item['item_brand'] ?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                            </div>
                             <div class="qty d-flex pt-2">
                                 <div class="d-flex font-rale w-25">
                                        <button data-id="pro1" class="qty-up border-bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="pro1" type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border-bg-light"><i class="fas fa-angle-down"></i></button>
                                 </div>
                                 <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            </form>
                                 
                             </div>
                        </div>
                        <div class="col-sm-2 text-end">
                            <div class="font-size-20 text-danger font-baloo">
                                <span class="product_price"><?php echo $item['item_price']??0 ?>$</span>
                            </div>
                        </div>

                    </div>
                    <?php 
                    
                    return $item['item_price'];
                    },$cart);
                    }
                    ?>
                </div>
                <div class="col-sm-3">
                    <div class="sub-total text-center mt-2 border">
                        <h6 class=" font-size-12 text-success py-3"><i class="fas fa-check"></i>Your order is eligible for FREE Delivery.</h6>
                        <div class="border-top py-4">
                            <h5 class="font-baloo font-size-20">Total (<?php echo count($product->getData('cart'))  ?> items) :&nbsp;<span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subtotal) ? $Cart->calculate($subtotal) : 0 ?>$</span></span></h5>
                            <button type="submit" class="btn btn-warning py-2">Proceed to Buy</button>
                        </div>
                    </div>
                </div>
            </div>
           </div>
       </section>