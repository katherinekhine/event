<?php

include "../../vendor/autoload.php";

use api\classes\Event;

$id = $_GET['id'];
$title = htmlspecialchars(trim($_POST['title']));
$des = htmlspecialchars(trim($_POST['des']));
$img = $_FILES['img'];

if (empty($title) || empty($des)) {
    header("location: ../event-update.php?id=$id&error=1");
} else {
    $event = new Event();

    if (is_uploaded_file($img['tmp_name'])) {
        $img_path = "photos/" . $img['name'];
        move_uploaded_file($img['tmp_name'], "../../$img_path");
        $event->eventUpdate([
            'id' => $id,
            'title' => $title,
            'desc' => $des,
            'img' => $img_path,
        ]);
    } else {
        $event->eventUpdate([
            'id' => $id,
            'title' => $title,
            'desc' => $des,
        ]);
    }
    header("location: ../admin.php");
}
