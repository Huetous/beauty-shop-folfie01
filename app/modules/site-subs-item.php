<?php
    $subs_items = get_subs_item_all();

    $target_class = "popular";
    $target_class_name = "Лучшее предложение";

    foreach($subs_items as $subs_item): ?>
        <div class="col-md-3 col-sm-6 animate-box">
            <div class="subs-box <?php if($subs_item["title"] == $target_class_name) print_r($target_class) ?>">
                <h2 class="subs-plan"><?php print_r($subs_item["title"]) ?></h2>
                <div class="price"><sup class="currency"><i class="fas fa-ruble-sign"></i></sup><?php print_r($subs_item["cost"]) ?><small>/месяц</small></div>
                <ul class="classes">
                    <?php
                        $sub_services = get_sub_services_all($subs_item["id"]);

                        foreach($sub_services as $sub_service) {
                            if($sub_service["id_service"] % 2 == 0)
                            {
                                echo '<li class="color">'.$sub_service["amount"];
                                echo " ";
                                echo    $sub_service["name"].'</li>';
                            }
                            else
                            {
                                echo '<li>'.$sub_service["amount"];
                                echo " ";
                                echo    $sub_service["name"] . '</li>';
                            }
                        }

                    ?>
                </ul>
                <a href="#" class="button btn-select-plan js-btn-popup-subs " data-idSubs = <?php echo $subs_item["id"]?>>Приобрести</a>
            </div>
        </div>
        <div class="popup <?php if($subs_item["title"] == $target_class_name) print_r($target_class) ?>" style="display: none" data-idSubs = <?php echo $subs_item["id"]?>>
            <div class="popup-content">
                <div class="close"><i class="fas fa-times"></i></div>
                <h1><?php echo $subs_item["title"] ?></h1>
                <hr>
                <h3>Заявка на приобретение</h3>
                <div class="price text-center"><sup class="currency"><i class="fas fa-ruble-sign"></i></sup><?php print_r($subs_item["cost"]) ?></div>
                <hr>
                <div class="form">
                    <form class="subs-form" method="post" data-title="<?php echo $subs_item["title"] ?>">
                        <input name="name" type="text" placeholder="Ваше имя" required/>
                        <input name="tel" type="number" class="superstyle" placeholder="Ваш телефон" required/>
                        <input class="button submit btn-select-plan" type="submit" value="Оставить заявку">
                    </form>
                </div>
            </div>
        </div>
<?php endforeach; ?>