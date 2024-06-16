<?php

namespace classes;

use classes\Database;

if (!class_exists('classes\Database')) {
    echo "Contact class not found.<br>";
} else {
    echo "Contact class found.<br>";
}

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
