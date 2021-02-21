<section id="cart" class="py-3">
           <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>
            <div class="row">
                <div class="col-sm-9">

                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/blog/emptyCart.png" alt="empty" class="img-fluid"style='height:200px'>
                            <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                        </div>
                    </div>

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