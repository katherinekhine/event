<?php

include "../../vendor/autoload.php";

use api\classes\Category;


$detail = htmlspecialchars(trim($_POST['detail']));
$time = htmlspecialchars(trim($_POST['time']));
$location = htmlspecialchars(trim($_POST['location']));
$img = $_FILES['img'];

if (empty($detail) || empty($time) || empty($location)) {
    header("location:../category-edit.php?error=1");
} else {
    $category = new Category();

    if (is_uploaded_file($img['tmp_name'])) {
        $img_path = "photos/category" . $img['name'];
        move_uploaded_file($img['tmp_name'], "../../" . $img_path);
        $category->catUpdate([
            'detail' => $detail,
            'time' => $time,
            'location' => $location,
            'img' => $img_path,
        ]);
    } else {
        $category->catUpdate([
            'detail' => $detail,
            'time' => $time,
            'location' => $location,
        ]);
    }
    header("location: ../admin-category.php");
}
