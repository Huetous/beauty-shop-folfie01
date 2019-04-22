<?php
    $target_class = "popular";
    foreach($data as $item): ?>
        <div class="col-md-3 col-sm-6 animate-box">
            <div class="subs-box <?php if($item[0]["isPopular"] == 1) print_r($target_class) ?>">
                <h2 class="subs-plan"><?php print_r($item[0]["title"]) ?></h2>
                <div class="price"><sup class="currency"><i class="fas fa-ruble-sign"></i></sup><?php print_r($item[0]["cost"]) ?><small>/месяц</small></div>
                <ul class="classes">
                    <?php
                    $count = 0;
                        foreach($item as $service) {
                            $count++;
                            if($count % 2 == 0)
                                echo '<li class="color">'.$service["amount"];
                            else
                                echo '<li>'.$service["amount"];
                            echo " ";
                            echo    $service["name"].'</li>';
                        }
                    ?>
                </ul>
                <a href="#" class="button btn-select-plan js-btn-popup-subs " data-idSubs = <?php echo $item[0]["id"]?>>Приобрести</a>
            </div>
        </div>
        <div class="popup <?php if($item[0]["isPopular"] == 1) print_r($target_class) ?>" style="display: none" data-idSubs = <?php echo $item[0]["id"]?>>
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
