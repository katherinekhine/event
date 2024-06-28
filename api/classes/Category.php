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

    public function catAll()
    {
        $query = "SELECT * FROM category";
        $result = $this->connect()->prepare($query);
        $result->execute();
        return $result->fetchAll();
    }

    public function catShow($id)
    {
        $query = "SELECT * FROM category WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        return $result->fetchObject();
    }

    public function catUpdate($data)
    {
        if ($data['img']) {
            $query = "UPDATE category SET detail = :detail, time = :time, location = :location, img = :img WHERE id = :id";
        } else {
            $query = "UPDATE category SET detail = :detail, time = :time, location = :location WHERE id = :id";
        }
        $result = $this->connect()->prepare($query);
        $result->execute($data);
        return $result->rowCount();
    }

    public function catDelete($id)
    {
        $query = "DELETE FROM category WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        return $result->rowCount();
    }
}
