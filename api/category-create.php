<?php
include "components/admin-header.php";
?>

<h1 class="h1 mt-6 lg:px-20 px-5 text-color-primary">Create Category</h1>
<div class="mt-5 lg:px-20 px-5">
    <div>
        <form action="actions/category-store.php" method="post" enctype="multipart/form-data">
            <?php include "components/error.php"; ?>
            <div class="my-5">
                <input type="hidden" name="event_id" value="<?= $event['event_id'] ?>">
            </div>
            <div class="mb-5">
                <input type="text" name="time" placeholder="Enter Your Time" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="mb-5">
                <input type="text" name="location" placeholder="Enter Your Location" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="my-5">
                <textarea name="detail" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1" placeholder="Write Your Detail"></textarea>
            </div>
            <div class="my-5">
                <input type="file" name="img" class="outline outline-1 w-full">
            </div>
            <div class="flex items-center gap-4">
                <a href="admin-category.php" type="button" class="btn btn-back flex justify-center items-center">&lt; Back</a>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>