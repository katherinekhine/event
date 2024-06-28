<?php

include "../../vendor/autoload.php";

use api\classes\Category;

$event_id = $_GET['id'];
$detail = htmlspecialchars(trim($_POST['detail']));
$time = htmlspecialchars(trim($_POST['time']));
$location = htmlspecialchars(trim($_POST['location']));
$img = $_FILES['img'];

if (empty($event_id) || empty($detail) || empty($time) || empty($location) || !is_uploaded_file($img['tmp_name'])) {
    header('location: ../category-create.php?error=1');
} else {
    $img_path = "photos/category" . $img['name'];
    move_uploaded_file($img['tmp_name'], "../../" . $img_path);

    $category = new Category();
    $category->catStore([
        'event_id' => $event_id,
        'detail' => $detail,
        'time' => $time,
        'location' => $location,
        'img' => $img_path,
    ]);

    header("location: ../admin-category.php");
}
