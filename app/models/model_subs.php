<?php
class Model_Subs extends Model
{
  public function get_data()
  {
    $db = Database::get_instance();
    $subs_items = $db->query("SELECT * FROM subs_items LEFT JOIN services_subs USING(id)");

    $data = [];
    foreach ($subs_items as $item){
      if($data[$item["id"]-1] == null)
        array_push($data, []);
      array_push($data[$item["id"]-1], $item);
    }

    return $data;
  }

}
