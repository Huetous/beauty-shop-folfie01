<?php
    class Model_Services extends Model
    {
        public function get_data()
        {
            $db = Database::get_instance();
            $services_items = $db->query("SELECT * FROM services_items LEFT JOIN services_list USING(id) ORDER BY id");

            $data = [];
            foreach ($services_items as $item){
              if($data[$item["id"]-1] == null)
                array_push($data, []);
              array_push($data[$item["id"]-1], $item);
            }

            return $data;
        }
    }
