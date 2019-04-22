<?php
    class Model_Blog extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $blog_items = $db->query("SELECT * FROM blog_items");
            return $blog_items;
        }
    }
