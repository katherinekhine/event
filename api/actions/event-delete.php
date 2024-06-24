<?php

include "../../vendor/autoload.php";

use api\classes\Event;

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $event = new Event();
    $result = $event->eventShow($id);
    if ($result) {
        $event->eventDelete($id);
        header("location: ../admin.php");
    } else {
        echo "This is not a valid";
    }
}
