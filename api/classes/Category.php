<?php

namespace api\classes;

use api\classes\Database;

class Category extends Database
{
    public function catStore($data = [])
    {
        $query = "INSERT INTO category (event_id, detail, time, location, img) VALUES (:event_id, :detail, :time, :location, :img)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':event_id' => $data['event_id'],
            ':detail' => $data['detail'],
            ':time' => $data['time'],
            ':location' => $data['location'],
            ':img' => $data['img']
        ]);
        return $result->rowCount();
    }
}
