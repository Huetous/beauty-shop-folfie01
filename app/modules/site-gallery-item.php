<?php
    $gallery_items = get_gallery_item_all();


    $size = "";
    $inc = 2;
    foreach($gallery_items as $gallery_item):

        if(($gallery_item["id"]) == $inc)
        {
            $size = "two-third";
            $inc += 3;
        }
        else $size = "one-third";

    ?>

        <li class="<?php echo $size ?> animate-box"  style="background-image: url(<?php print_r($gallery_item["image"]) ?>);">
            <a href="#" class="js-popup-gallery" data-idGallery = <?php print_r($gallery_item["id"]) ?> >
                <div class="case">
                    <span><?php print_r($gallery_item["subtitle"]) ?></span>
                    <h2><?php print_r($gallery_item["title"]) ?></h2>
                </div>
            </a>
        </li>
        <div class="popup" style="display: none" data-idGallery = <?php print_r($gallery_item["id"]) ?>>
            <div class="popup-content gallery-item">
                <div class="close"><i class="fas fa-times"></i></div>
                <h1><?php print_r($gallery_item["title"]) ?></h1>
                <hr>
                <h3><?php print_r($gallery_item["subtitle"]) ?></h3>
                <hr>
                <div class="fotorama">
                    <?php
                    $gallery_images = get_gallery_images_by_id($gallery_item["id"]);

                    foreach ($gallery_images as $gallery_image)
                        echo '<img class="gallery-image" src='.$gallery_image["image"].'></img>';

                    ?>
                </div>
            </div>
        </div>

    <?php endforeach; ?>