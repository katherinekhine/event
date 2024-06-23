<?php

include "../vendor/autoload.php";

use api\classes\Event;

$id = $_GET['id'];

$result = new Event();
$event = $result->eventShow($id);

?>

<?php
include "components/admin-header.php";
?>


<?php if (isset($event->id)) : ?>
    <h1 class="h1 mt-6 lg:px-20 px-5 text-color-primary">Edit Event</h1>
    <div class="mt-5 lg:px-20 px-5">
        <div>
            <form action="actions/event-update.php?id=<?= $event->id ?>" method="post" enctype="multipart/form-data">
                <?php include "components/error.php"; ?>
                <div class="mb-5">
                    <input type="text" name="title" placeholder="Enter Your Title" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1" value="<?= $event->title ?>">
                </div>
                <div class="my-5">
                    <textarea name="des" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1" placeholder="Write Your Desctiption"><?= $event->des ?></textarea>
                </div>
                <div class="my-5">
                    <input type="file" name="img" class="outline outline-1 w-full">
                    <img src="../<?= $event->img ?>" alt="" class="w-[400px] mt-3">
                </div>
                <div class="flex items-center gap-4">
                    <a href="admin.php" type="button" class="btn btn-back flex justify-center items-center">&lt; Back</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
<?php else : ?>
    <p class="h1 text-center mt-6" style="color: yellowgreen;">No Matching article</p>

<?php endif; ?>