<?php
    class Model_About extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $data = $db->query("SELECT * FROM about");
            return $data;
        }
    }
