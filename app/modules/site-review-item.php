<?php

    $reviews_items = get_reviews_item_all();

    foreach($reviews_items as $reviews_item): ?>
        <div class="item">
            <div class="review text-center">
                <figure>
                    <img src="<?php echo $reviews_item['image']?>" alt="user">
                </figure>
                <span><?php echo $reviews_item['name']?></span>
                <blockquote>
                    <p>&ldquo;<?php echo $reviews_item['review']?>&rdquo;</p>
                </blockquote>
            </div>
        </div>
    <?php endforeach; ?>