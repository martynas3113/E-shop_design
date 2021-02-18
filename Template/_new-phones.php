<?php  $shuffle = shuffle($product_shuffle); ?>

<section id="new-phones">
            <div class="container">
                <h4 class="font-rubik font-size-20">New Phones</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                <?php array_map(function($item){ ?>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/13.png" ?>" class="img-fluid" alt=""></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name']?? "Unknown" ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo $item['item_price']?? "299" ?>$</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <?php },$product_shuffle) ?>
                </div>
            </div>
        </section>