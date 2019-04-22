<?php
    $size = "";
    $inc = 2;
    foreach($data as $gallery_item):

        if(($gallery_item[0]["id"]) == $inc)
        {
            $size = "two-third";
            $inc += 3;
        }
        else $size = "one-third";

    ?>

        <li class="<?php echo $size ?> "  style="background-image: url(<?php print_r($gallery_item[0]["image"]) ?>);">
            <a href="#" class="js-popup-gallery" data-idGallery = <?php print_r($gallery_item[0]["id"]) ?> >
                <div class="site-gallery-list-case">
                    <span><?php print_r($gallery_item[0]["subtitle"]) ?></span>
                    <h2><?php print_r($gallery_item[0]["title"]) ?></h2>
                </div>
            </a>
        </li>
        <div class="popup" style="display: none" data-idGallery = <?php print_r($gallery_item[0]["id"]) ?>>
            <div class="popup-content gallery-item">
                <div class="close"><i class="fas fa-times"></i></div>
                <h1><?php print_r($gallery_item[0]["title"]) ?></h1>
                <hr>
                <h3><?php print_r($gallery_item[0]["subtitle"]) ?></h3>
                <hr>
                <div class="fotorama">
                    <?php
                    foreach ($gallery_item as $gallery_image)
                        echo '<img class="gallery-image" src='.$gallery_image["image"].'></img>';
                    ?>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
