<?php

    $db_host = "localhost";
    $db_user = "mysql";
    $db_password = "1234";
    $db_base = 'web';

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
    if ($mysqli->connect_error) {
        die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    if(isset($_POST['name']) && isset($_POST['review'])) {
        $name = $_POST['name'];
        $review = $_POST['review'];
        $master_name = $_POST['master_name'];
        $db_table = "reviews";

        $result = $mysqli->query("INSERT INTO ".$db_table." (name,review,master_name) VALUES ('$name','$review','$master_name')");

    }

    if(isset($_POST['name']) && isset($_POST['tel'])) {
        $name = $_POST['name'];
        $number = $_POST['tel'];
        $subTitle = $_POST['subTitle'];
        $db_table = "subs_request";

        $result = $mysqli->query("INSERT INTO ".$db_table." (name,number,title) VALUES ('$name','$number','$subTitle')");

    }
