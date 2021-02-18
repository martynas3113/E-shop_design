<?php 
    $blog_shuffle = $blogs ->getData('blogs');
?>

<section id="latest-blogs">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <?php array_map(function($item){ ?>
                    <div class="item">
                       <div class="card border-0 font-rale mr-5" style="width:18rem">
                           <h5 class="card-title font-size-16"><?php echo $item['blog_title'] ?? "Title" ?></h5>
                           <img src="<?php echo $item['blog_image'] ?? "Unknown" ?>" class="card-img-top" alt="blog1">
                            <p class="card-text font-size-14 text-black-50"><?php echo $item['blog_text']?? "Random text" ?></p>
                            <a href="<?php echo $item['blog_link'] ?? "#" ?>" class="color-second text-left">Link to somwhere</a>
                       </div>
                    </div>
                    <?php },$blog_shuffle) ?>
                </div>
            </div>
        </section>