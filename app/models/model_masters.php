<?php
    class Model_Masters extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $masters_items = $db->query("SELECT * FROM masters_items LEFT JOIN social_links USING(id) ORDER BY id");

            $data = [];
            foreach ($masters_items as $item){
              if($data[$item["id"]-1] == null)
                array_push($data, []);
              array_push($data[$item["id"]-1], $item);
            }

            return $data;
        }
    }
