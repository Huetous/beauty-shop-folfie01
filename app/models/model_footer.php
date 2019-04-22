<?php
    class Model_Footer extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $footer_items = $db->query("SELECT * FROM footer_item");
            return $footer_items;
        }
    }
