<?php

include "../../vendor/autoload.php";

use api\classes\Category;

$detail = htmlspecialchars(trim($_POST['detail']));
$time = htmlspecialchars(trim($_POST['time']));
$location = htmlspecialchars(trim($_POST['location']));
$img = $_FILES['img'];
