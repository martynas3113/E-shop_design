<?php 
    $item_id = $_GET['item_id']??1;
    foreach($product ->getData() as $item):
        if($item['item_id'] == $item_id):
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['product_submit'])){
        // call method addToCart
        $Cart->addToCartProduct($_POST['user_id'], $_POST['item_id']);
    }
}
?>


<section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 py-5">
                        <img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                        <div class="row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="form-control btn btn-danger">Buy</button>
                            </div>
                            <div class="col">
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??"1"; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                                    if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                        echo '<button type="submit" disabled class="form-control btn btn-success font-size-16">In the Cart</button>';
                                    }else{
                                        echo '<button type="submit" name="product_submit" class="form-control btn btn-warning font-size-16">Add to Cart</button>';
                                    }
                                ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ??"Samsung Galaxy 10" ?></h5>
                        <small>by <?php echo $item['item_brand'] ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 ront-rale font-size-14">20.534 rantings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P:</td>
                                <td><strike>200.0$</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?>$</span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save:</td>
                                <td><span class="font-size-16 text-danger">$10.00</span></td>
                            </tr>
                        </table>

                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Days <br> Money Back </a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">3 Days <br> Delivery</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">2 Years <br> Warranty</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by: March 29 - Apr 1</small>
                            <small>Sold by <a href="#">Daily Electronics</a> (4.5 out of 5 | 18.198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color:</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-primary-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-second-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border-bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border-bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="size my-3">
                            <h6 class="font-baloo">Size</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto ullam mollitia vitae eligendi aperiam nisi, incidunt, est, dignissimos qui corrupti nemo? Omnis ex reprehenderit debitis atque iusto magni, dicta eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsam nam aliquam similique quod dolorum consectetur dolorem doloribus, aperiam iusto ab harum alias et recusandae expedita incidunt quibusdam ut animi!</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto ullam mollitia vitae eligendi aperiam nisi, incidunt, est, dignissimos qui corrupti nemo? Omnis ex reprehenderit debitis atque iusto magni, dicta eum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius debitis vitae, corporis doloremque dicta omnis sint porro perferendis dolorem repudiandae impedit minima itaque assumenda dolore vel est delectus ipsa ullam.</p>
                    </div>
                </div>
            </div>
        </section>
<?php
endif;
endforeach  ?>