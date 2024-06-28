<?php
include "components/admin-header.php";
?>

<h1 class="h1 text-center text-color-primary">Title</h1>

<div class="mt-5 lg:px-20 px-5 mb-5">

    <h1 class="h1 text-color-primary mb-2">Create New Category</h1>
    <a href="category-create.php" class="text-color-primary text-[17px] underline"><i class="ri-add-circle-fill"></i> New Category</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-4">
        <div class="flex flex-col justify-center px-3 border border-color-primary hover:border-color-secondary hover:shadow-lg hover:shadow-color-primary">
            <div class="py-2">
                <img src="../img/event-1.png" alt="" class="rounded-md">
            </div>
            <div>
                <div class="text-start flex flex-row gap-5 mt-2">
                    <h3 class="h3 text-color-primary">Detail:</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ipsam possimus ipsum. Doloremque esse ipsum laudantium laboriosam fugiat odit tenetur!</p>
                </div>
                <div class="text-start flex flex-row items-center gap-5 mt-2">
                    <h3 class="h3 text-color-primary">Time:</h3>
                    <p class="p">3:30PM to 5:30PM</p>
                </div>
                <div class="text-start flex flex-row items-center gap-5 mt-2">
                    <h3 class="h3 text-color-primary">Location:</h3>
                    <p class="p">Hleden, Yangon</p>
                </div>
            </div>
            <div class="my-4 flex gap-3 items-center justify-center">
                <a href="category-edit.php"><i class="fa-solid fa-pen-to-square text-green-600"></i></a>
                <a href="#" onclick="return confirm('Are you sure you want to delete')"><i class="fa-solid fa-trash text-red-600"></i></a>
            </div>
        </div>
    </div>
</div>