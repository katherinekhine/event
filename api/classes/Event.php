<?php

namespace api\classes;

// include "../../vendor/autoload.php";

use api\classes\Database;

class Event extends Database
{
    public function eventStore($data = [])
    {
        $query = "INSERT INTO events (title, des, img) VALUES (:title, :des, :img)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':title' => $data['title'],
            ':des' => $data['des'],
            ':img' => $data['img']
        ]);
        return $result->rowCount();
    }
    public function showAll()
    {
        $query = "SELECT * FROM events";
        $result = $this->connect()->prepare($query);
        $result->execute();
        return $result->fetchAll();
    }
    public function eventShow($id)
    {
        $query = "SELECT * FROM events WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        return $result->fetchObject();
    }
    public function eventUpdate($data)
    {
        if ($data['img']) {
            $query = "UPDATE events SET title = :title, des = :des, img = :img WHERE id = :id";
        } else {
            $query = "UPDATE events SET title = :title, des = :des WHERE id = :id";
        }
        $result = $this->connect()->prepare($query);
        $result->execute($data);
        return $result->rowCount();
    }
    public function eventDelete($id)
    {
        $query = "DELETE FROM events WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        return $result->rowCount();
    }
}
