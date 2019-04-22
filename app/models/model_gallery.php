<?php
    class Model_Gallery extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $gallery_items = $db->query("SELECT * FROM gallery_items LEFT JOIN gallery_images USING(id) ORDER BY id");

            $data = [];
            foreach ($gallery_items as $item){
              if($data[$item["id"]-1] == null)
                array_push($data, []);
              array_push($data[$item["id"]-1], $item);
            }

            return $data;
        }
    }
