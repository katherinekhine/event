<?php

include "../../vendor/autoload.php";
echo "Autoload included successfully.<br>";

use api\classes\Contact;

if (!class_exists('api\classes\Contact')) {
    echo "Contact class not found.<br>";
} else {
    echo "Contact class found.<br>";
}

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$msg = htmlspecialchars(trim($_POST['msg']));


if (empty($name) || empty($email) || empty($msg)) {
    header("location: ../contact.php?error=1");
} else {
    $contact = new Contact();
    $contact->send([
        'name' => $name,
        'email' => $email,
        'msg' => $msg
    ]);

    header("location: ../index.php");
}
