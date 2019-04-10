<?php
    require_once "layout/header.php";
    require_once "layout/site-nav.php";
    ?>
    <div id="site-services" class="bg-section">
        <div class="container">
                <div class="col-md-8 col-md-offset-2 text-center site-heading">
                    <h2>Услуги салона</h2>
                </div>
            <div class="row services-page">
                <?php
                require "/OSPanel/domains/folfie02/_html/app/modules/site-services-item.php";
                ?>
            </div>
        </div>
    </div>
<?php
    require_once "layout/footer.php";
