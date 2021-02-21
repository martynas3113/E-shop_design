<?php 
    $brand = array_map(function($product){
        return $product['item_brand'];
    },$product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    $shuffle = shuffle($product_shuffle);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['special_price_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

?>

<section id="special-price">
            <div class="container">
                <div id="filters" class="button-group text-right font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">All Brands</button>
                    <?php foreach($unique as $item){ ?>
                    <button class="btn" data-filter=".<?php echo $item?>"><?php echo $item ?></button> 
                    <?php }?>
                </div>
                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div class="grid">
                <?php array_map(function($item)use($Cart,$product){ ?>
                    <div class="grid-item m-1 border <?php echo $item['item_brand'] ?? "Brand"; ?>">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-rale">
                                <a href="product.php?item_id=<?php echo $item['item_id'] ?>"><img src="<?php echo $item['item_image']?? "./assets/products/13.png" ?>" class="img-fluid" alt=""></a>
                                <div class="text-center">
                                    <h6><?php echo $item['item_name'] ?? "Unknown" ?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo $item['item_price'] ?? "150$" ?>$</span>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']??"1"; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                        <?php
                                    if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                    }else{
                                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php },$product_shuffle)?>
                </div>
            </div>
        </section>