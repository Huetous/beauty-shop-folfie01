<?php
    $db_host = "localhost";
    $db_name = "web";
    $username = "mysql";
    $password = "1234";

    $db = new PDO("mysql:host=$db_host;dbname=$db_name;", $username, $password);


function get_blog_item_all() {
    global $db;
    $blog_items = $db->query("SELECT * FROM blog_item");
    return $blog_items;
}

function get_gallery_item_all() {
    global  $db;
    $gallery_items = $db->query("SELECT * FROM gallery_item");
    return $gallery_items;
}

function get_masters_item_all() {
    global  $db;
    $gallery_items = $db->query("SELECT * FROM masters_item");
    return $gallery_items;
}

function get_social_links_all($id) {
    global  $db;
    $social_links = $db->query("SELECT twitter,facebook,vk,odnoklassniki FROM social_links WHERE social_links.id_master = $id");
    return $social_links;
}

function get_services_item_all() {
    global  $db;
    $services_items = $db->query("SELECT * FROM services_item");
    return $services_items;
}

function get_subs_item_all() {
    global  $db;
    $subs_items = $db->query("SELECT * FROM subs_item");
    return $subs_items;
}

function get_sub_services_all($id) {
    global  $db;
    $sub_services = $db->query("SELECT id_service,amount, `name` FROM services_subs WHERE services_subs.id_sub = $id");
    return $sub_services;
}

function get_services_list_by_id($id_services) {
    global $db;
    $services_list = $db->query("SELECT * FROM services_list WHERE services_list.id_services = $id_services");
    return $services_list;
}

function get_gallery_images_by_id($id_gallery_item) {
    global $db;
    $gallery_images = $db->query("SELECT * FROM gallery_images WHERE gallery_images.id_gallery_item = $id_gallery_item");
    return $gallery_images;
}

function get_reviews_item_all() {
    global  $db;
    $reviews_item = $db->query("SELECT * FROM review_item");
    return $reviews_item;
}
