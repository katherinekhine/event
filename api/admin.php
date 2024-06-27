<?php

include "../vendor/autoload.php";

use api\classes\Event;

$events = new Event();
$events = $events->showAll();

?>

<?php
include "components/admin-header.php";
?>


<div class="mt-5 lg:px-20 px-5 mb-5">

    <?php
    include "components/search-bar.php";
    ?>

    <h1 class="h1 text-color-primary my-3">Create New Event</h1>
    <a href="event-create.php" class="text-color-primary text-[17px] underline"><i class="ri-add-circle-fill"></i> New Event</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 event-ani mt-5">
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
                    <a href="admin-category.php?id=<?= $event['id'] ?>" type="button" class="btn btn-primary justify-center items-center flex">Category</a>
                    <a href="event-edit.php?id=<?= $event['id'] ?>"><i class="fa-solid fa-pen-to-square text-green-600"></i></a>
                    <a href="actions/event-delete.php?id=<?= $event['id'] ?>" onclick="return confirm('Are you sure you want to delete')"><i class="fa-solid fa-trash text-red-600"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>