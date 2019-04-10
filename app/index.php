<?php
    require_once "layout/header.php";
?>

<!--site-loader-->
<div class="site-loader"></div>
<!--end of site-loader-->

<div id="page">
    <?php
        require_once "layout/site-nav.php";
        require_once "layout/site-header.php";
        require_once "layout/site-services.php";
        require_once "layout/site-masters.php";
        require_once "layout/site-subs.php";
        require_once "layout/site-gallery.php";
        require_once "layout/site-reviews.php";
        require_once "layout/site-blog.php";
        require_once "layout/footer.php";
    ?>
</div>
<!--gototop-->
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fas fa-angle-up"></i></a>
</div>
<!--end of gototop-->
<div id="blackout"></div>