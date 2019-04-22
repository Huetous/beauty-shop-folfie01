<?php
    class Model_Reviews extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $reviews_items = $db->query("SELECT * FROM reviews_items");
            return $reviews_items;
        }
    }
