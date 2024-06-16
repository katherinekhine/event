<?php
include "components/header.php";
?>

<h1 class="h1 text-center text-color-primary mt-14">Booking Form</h1>

<div class="lg:px-20 px-5 mt-7">
    <div class="">
        <form action="" method="" class="text-center">
            <div class="mb-5">
                <input type="text" name="name" placeholder="Enter Your Name" class="px-3 py-2 rounded lg:w-1/2 lg:mx-auto w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="my-5">
                <input type="email" name="email" placeholder="Enter Your Email" class="px-3 py-2 rounded lg:w-1/2 lg:mx-auto w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="my-5">
                <input type="tel" name="tel" placeholder="Enter Your Phone Number" class="px-3 py-2 rounded lg:w-1/2 lg:mx-auto w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="flex flex-row items-center justify-center gap-5">
                <button class="btn btn-back"><a href="category.php">&lt; Back</a></button>
                <button type="submit" class="btn btn-primary">Booking</button>
            </div>
        </form>
    </div>
</div>

<?php
// include "../components/footer.php";
?>