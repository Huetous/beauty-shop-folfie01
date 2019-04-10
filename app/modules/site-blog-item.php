<?php
    $blog_items = get_blog_item_all();

    foreach($blog_items as $blog_item): ?>

        <div class="col-md-4 col-sm-6">
            <div class="site-blog animate-box">
                <a href="#"><img class="img-responsive" src="<?php print_r($blog_item["image"]) ?>" alt=""></a>
                <div class="blog-text">
                    <h3><a href="#"><?php print_r($blog_item["title"]) ?></a></h3>
                    <span class="post-date"><?php echo date("d.m.Y в H:i", strtotime($blog_item["date"])) ?></span>
                    <span class="comment"><a href=""><?php print_r($blog_item["views"]) ?><i class="fas fa-eye"></i></a></span>
                    <p><?php print_r($blog_item["pre-text"]) ?></p>
                    <a href="#" class="button js-btn-popup-blog" data-idBlog = <?php echo $blog_item["id"]?>>Подробнее</a>
                </div>
            </div>
        </div>
       <div class="popup" style="display: none" data-idBlog = <?php echo $blog_item["id"]?>>
            <div class="popup-content blog-item">
                <div class="close"><i class="fas fa-times"></i></div>
                <h1><?php echo $blog_item["title"] ?></h1>
                <hr>
                <div class="post-text custom-scroll">
                    <div class="post-info">
                        <div class="image"><img src="<?php print_r($blog_item["image"]) ?>"></div>
                        <div class="post-date-container">
                            <span class="post-date"><?php echo date("d.m.Y в H:i", strtotime($blog_item["date"])) ?></span>
                            <span class="comment"><a href=""><?php print_r($blog_item["views"]) ?><i class="fas fa-eye"></i></a></span>
                        </div>
                    </div>
                    <h2><?php print_r($blog_item["pre-text"]) ?></h2>
                    <?php echo nl2br($blog_item["text"])?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

