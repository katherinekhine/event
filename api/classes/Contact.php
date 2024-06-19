<?php

namespace api\classes;

include "../../vendor/autoload.php";

use api\classes\Database;

class Contact extends Database
{
    public function send($data = [])
    {
        $query = "INSERT INTO contact (name, email, msg) VALUES (:name, :email, :msg)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':msg' => $data['msg']
        ]);
        return $result->rowCount();
    }
}
