<?php

include "../vendor/autoload.php";

use api\classes\Event;

$events = new Event();
$events = $events->showAll();

?>

<?php
include "components/admin-header.php";
?>

<?php
include "components/search-bar.php";
?>

<div class="mt-5 lg:px-20 px-5 mb-5">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 event-ani">
        <?php foreach ($events as $event) : ?>
            <div class="flex flex-col justify-center items-center px-3 border border-color-primary hover:border-color-secondary hover:shadow-lg hover:shadow-color-primary">
                <div class="py-2">
                    <img src="../<?= $event['img'] ?>" alt="" class="rounded-md hover:scale-105 ease-linear duration-200">
                </div>
                <div>
                    <h3 class="h3 text-color-primary text-center"><?= $event['title'] ?></h3>
                    <p class="p mt-2"><?= $event['des'] ?></p>
                </div>
                <div class="my-4 flex gap-3 items-center">
                    <a href="event-edit.php?id=<?= $event['id'] ?>">Edit</a>
                    <a href="category.php" type="button" class="btn btn-primary justify-center items-center flex">Join</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>