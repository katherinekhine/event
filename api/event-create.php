<?php
include "components/header.php";
?>

<h1 class="h1 mt-6 lg:px-20 px-5 text-color-primary">Create Event</h1>
<div class="mt-5 lg:px-20 px-5">
    <div>
        <form action="actions/event-store.php" method="post" enctype="multipart/form-data">
            <?php include "components/error.php"; ?>
            <div class="mb-5">
                <input type="text" name="title" placeholder="Enter Your Title" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="my-5">
                <textarea name="des" class="px-3 py-2 rounded w-full text-color-bg focus:outline-color-primary focus:outline-1" placeholder="Write Your Desctiption"></textarea>
            </div>
            <div class="my-5">
                <input type="file" name="img" class="outline outline-1 w-full">
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>