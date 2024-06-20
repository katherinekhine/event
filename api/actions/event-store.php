<?php

include "../../vendor/autoload.php";

use api\classes\Event;

$title = htmlspecialchars(trim($_POST['title']));
$des = htmlspecialchars(trim($_POST['des']));
$img = $_FILES['img'];

if (empty($title) || empty($des) || !is_uploaded_file($img['tmp_name'])) {
    header("location: ../event-create.php?error=1");
} else {
    $img_path = "photos/" . $img['name'];
    move_uploaded_file($img['tmp_name'], "../../$img_path");

    $event = new Event();
    $event->eventStore([
        'title' => $title,
        'des' => $des,
        'img' => $img_path
    ]);

    header("location: ../admin.php");
}
