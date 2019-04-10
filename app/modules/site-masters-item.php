<?php
    $masters_items = get_masters_item_all();

    foreach($masters_items as $masters_item): ?>

        <div class="col-md-4 col-sm-6 animate-box">
            <div class="master">
                <a href="" class="js-image-popup-masters" data-idMaster = <?php echo $masters_item["id"]?>>
                <img class="img-responsive" src="<?php print_r($masters_item["image"]) ?>" alt="master"></a>
                <div class="title">
                    <h3><a href="" class="js-image-popup-masters" data-idMaster = <?php echo $masters_item["id"]?>><?php print_r($masters_item["name"]) ?></a></h3>
                    <span><?php print_r($masters_item["job-position"]) ?></span>
                </div>
                <div class="desc text-center">
                    <ul class="masters-social">
                        <?php
                            $social_links = get_social_links_all($masters_item["id"]);
                            foreach($social_links as $social_link) {
                                if($social_link["twitter"] != null)
                                    echo '<li><a href='.$social_link["twitter"].'><i class="fab fa-twitter"></i></a></li>';
                                if($social_link["facebook"] != null)
                                    echo '<li><a href='.$social_link["facebook"].'><i class="fab fa-facebook-f"></i></a></li>';
                                if($social_link["vk"] != null)
                                    echo '<li><a href='.$social_link["vk"].'><i class="fab fa-vk"></i></a></li>';
                                if($social_link["odnoklassniki"] != null)
                                    echo '<li><a href='.$social_link["odnoklassniki"].'><i class="fab fa-odnoklassniki"></i></a></li>';
                            }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="popup popup-gallery" style="display: none" data-idMaster = <?php echo $masters_item["id"]?>>
            <div class="popup-content">
                <div class="close"><i class="fas fa-times"></i></div>
                <h1><?php echo $masters_item["name"] ?></h1>
                <hr>
                <h3>Оставьте отзыв о мастере</h3>
                <hr>
                <div class="form">
                    <form class="review-form" method="post" data-name="<?php echo $masters_item["name"] ?>">
                        <input name="name" type="text" placeholder="Ваше имя" required/>
                        <textarea name="review" placeholder="Ваш отзыв" required></textarea>
                        <input class="button submit" type="submit" value="Отправить">
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>