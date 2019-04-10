<?php
    $services_items = get_services_item_all();

    foreach($services_items as $services_item): ?>

        <div class="col-md-4 text-center animate-box">
            <div class="services">
                <span><img class="img-responsive" src="<?php print_r($services_item["pre-image"]) ?>" alt=""></span>
                <h3><?php print_r($services_item["title"]) ?></h3>
                <p><?php print_r($services_item["text"]) ?></p>
                <p><a href="#" class="button js-btn-popup-services" data-idService = <?php echo $services_item["id"]?> >Подробнее</a></p>
            </div>
        </div>
        <div class="popup" style="display: none" data-idService = <?php echo $services_item["id"]?>>
            <div class="popup-content">
                <div class="close"><i class="fas fa-times"></i></div>
                   <h1><?php echo $services_item["title"] ?></h1>
                     <hr>
                        <h3>Полный список услуг</h3>
                        <div class="image"><img src="<?php print_r($services_item["image"]) ?>"></div>
                    <hr>
                     <ul class="custom-scroll">
                         <?php
                            $services_list = get_services_list_by_id($services_item["id"]);
                                foreach ($services_list as $list_item) {
                                    echo '<li>
                                            <div class="service-name">
                                                <i class="fas fa-crown"></i>
                                                '.$list_item["name"].'</div>
                                            <div class="service-cost">
                                                от '.$list_item["cost"].'
                                                <i class="fas fa-ruble-sign"></i>
                                            </div>
                                          </li>';
                                }
                         ?>
                     </ul>
                <div class="order"><a href="#" class="button js-popup-footer">Оставить заявку</a></div>

            </div>
        </div>

    <?php endforeach; ?>